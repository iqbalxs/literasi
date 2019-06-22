<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\TeacherPost;
use Session;
use DB;
use Yajra\Datatables\Datatables;
use Yajra\Datatables\Html\Builder;

class KaryaGuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, Builder $htmlBuilder)
       {
         
         if ($request->ajax()) {
             $datax = TeacherPost::with('user')
                        ->where('category','=','karya_guru')->get();
             return Datatables::of($datax)
             ->addColumn('action', function($data){
                return view('datatable._action_verif', [
                'model' => $data,
                'form_url' => route('karya-guru.destroy', $data->id),
                'view_url' => route('karya-guru.show', $data->id),
                'confirm_message' => 'Yakin mau menghapus ' . $data->title . '?'
                ]);
                })->make(true);
         }

         $html = $htmlBuilder
        ->addColumn(['data' => 'title', 'name' => 'title', 'title' => 'Judul'])
        ->addColumn(['data' => 'user.name', 'name' => 'user.name', 'title' => 'Penulis'])
        ->addColumn(['data' => 'viewcount', 'name' => 'view_count', 'title' => 'Dilihat'])
        ->addColumn(['data' => 'created_at', 'name' => 'created_at', 'title' => 'Dibuat pada'])
        ->addColumn(['data' => 'status', 'name' => 'status', 'title' => 'Status'])
        ->addColumn(['data' => 'action', 'name'=>'action', 'title'=>'', 'orderable'=>false, 'searchable'=>false]);

         return view('karya-guru.index')->with(compact('html'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $verifkg = TeacherPost::find($id);
        return view('karya-guru.show')->with(compact('verifkg'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function verification($id)
    {
        $verif = "publish";
        DB::table('teacher_posts')
            ->where('id', $id)
            ->update(['status' => $verif]);

        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Berhasil memverifikasi"
        ]);

        return redirect()->route('karya-guru.index');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $verifkg = TeacherPost::find($id);
        
        // hapus image lama, jika ada
        if ($verifkg->image) {
          $old_image = $verifkg->image;
          $filepath = public_path() . DIRECTORY_SEPARATOR . 'img'
            . DIRECTORY_SEPARATOR . $verifkg->image;
          try {
            File::delete($filepath);
          } catch (FileNotFoundException $e) {
            // File sudah dihapus/tidak ada
          }
        }
        $verifkg->delete();

        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Data Berhasil dihapus"
      ]);

      return redirect()->route('karya-guru.index');
    }
}
