<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\StudentPost;
use DB;
use Session;
use Yajra\Datatables\Datatables;
use Yajra\Datatables\Html\Builder;

class KaryaSiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, Builder $htmlBuilder)
       {
        if ($request->ajax()) {
            $datax = StudentPost::with('user')->get();
            return Datatables::of($datax)
                ->addColumn('action', function($data){
                return view('datatable._action_verif', [
                    'model' => $data,
                    'form_url' => route('karya-siswa.destroy', $data->id),
                    'view_url' => route('karya-siswa.show', $data->id),
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

        return view('karya-siswa.index')->with(compact('html'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $karya_siswa = StudentPost::find($id);
        return view('karya-siswa.show')->with(compact('karya_siswa'));
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
        DB::table('student_posts')
            ->where('id', $id)
            ->update(['status' => $verif]);

        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Berhasil memverifikasi"
        ]);

        return redirect()->route('karya-siswa.index');
    }

    public function destroy($id)
    {
        $karya_siswa = StudentPost::find($id);
        
        // hapus image lama, jika ada
        if ($karya_siswa->image) {
          $old_image = $karya_siswa->image;
          $filepath = public_path() . DIRECTORY_SEPARATOR . 'img'
            . DIRECTORY_SEPARATOR . $karya_siswa->image;
          try {
            File::delete($filepath);
          } catch (FileNotFoundException $e) {
            // File sudah dihapus/tidak ada
          }
        }
        $karya_siswa->delete();

        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Data Berhasil dihapus"
        ]);

        return redirect()->route('karya-siswa.index');
    }
}
