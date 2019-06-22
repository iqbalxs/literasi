<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\User;
use Session;
use DB;
use Yajra\Datatables\Datatables;
use Yajra\Datatables\Html\Builder;

class UserSiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, Builder $htmlBuilder)
    {
        $users = User::whereRoleIs('siswa');

        $verified = $request->get('verified');
        if ($request->has('verified')) {
          if ($verified != 'all'){
            $users->where('is_verified', $verified);
          }
        }

        $users = $users->paginate(20);

        // simple use = whereRoleIs
        return view('user-siswa.index')->with(compact('users', 'verified'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function verification($id)
    {
         DB::table('users')
            ->where('id', $id)
            ->update(['is_verified' => 1]);

        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Berhasil memverifikasi"
        ]);

        return redirect()->route('user-siswa.index');
    }
}
