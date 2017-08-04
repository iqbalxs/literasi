<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\TeacherPost;
use Session;
use Yajra\Datatables\Datatables;
use Yajra\Datatables\Html\Builder;

class TeacherPIController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, Builder $htmlBuilder)
       {
         
         //ambil id user dari session
         $auth = Auth::user()->id;

         if ($request->ajax()) {
             $datax = TeacherPost::with('user')
                        ->where('category','=','publikasi_ilmiah')
                        ->where('user_id','=',$auth)->get();
             return Datatables::of($datax)
             ->addColumn('action', function($data){
                return view('datatable._action', [
                'model' => $data,
                'form_url' => route('teacherpi.destroy', $data->id),
                'edit_url' => route('teacherpi.edit', $data->id),
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

         return view('teacherpi.index')->with(compact('html'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('teacherpi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
        'title' => 'required',
        'content' => 'required',
        'image' => 'image|max:2048',
        'category' => 'required',
        'user_id' => 'required',
        'status' => 'required'
      ]);

        $teacherpi = TeacherPost::create($request->except('image'));

        // isi field image jika ada image yang diupload
        if ($request->hasFile('image')) {
            
         // Mengambil file yang diupload
         $uploaded_image = $request->file('image');

         // mengambil extension file
         $extension = $uploaded_image->getClientOriginalExtension();

         // membuat nama file random berikut extension
         $filename = md5(time()) . '.' . $extension;

         // menyimpan image ke folder public/img
         $destinationPath = public_path() . DIRECTORY_SEPARATOR . 'img';
         $uploaded_image->move($destinationPath, $filename);

         // mengisi field image di teacherpi dengan filename yang baru dibuat
         $teacherpi->image = $filename;
         $teacherpi->save();
        }
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Berhasil menyimpan $teacherpi->title"
        ]);

        return redirect()->route('teacherpi.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $teacherpi = TeacherPost::find($id);
        return view('teacherpi.edit')->with(compact('teacherpi'));
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
        $this->validate($request, [
        'title' => 'required',
        'content' => 'required',
        'image' => 'image|max:2048',
        'category' => 'required',
        'user_id' => 'required',
        'status' => 'required'
      ]);

       $teacherpi= TeacherPost::find($id);
       $teacherpi->update($request->all());

       if ($request->hasFile('image')) {
         // menambil image yang diupload berikut ekstensinya
         $filename = null;
         $uploaded_image = $request->file('image');
         $extension = $uploaded_image->getClientOriginalExtension();

         // membuat nama file random dengan extension
         $filename = md5(time()) . '.' . $extension;
         $destinationPath = public_path() . DIRECTORY_SEPARATOR . 'img';
         
         // memindahkan file ke folder public/img
         $uploaded_image->move($destinationPath, $filename);
         
         // hapus image lama, jika ada
         if ($teacherpi->image) {
           $old_image = $teacherpi->image;
           $filepath = public_path() . DIRECTORY_SEPARATOR . 'img'
           . DIRECTORY_SEPARATOR . $teacherpi->image;
           try {
             File::delete($filepath);
           } catch (FileNotFoundException $e) {
             // File sudah dihapus/tidak ada
           }
         }

         // ganti field image dengan image yang baru
         $teacherpi->image = $filename;
         $teacherpi->save();
       }

       Session::flash("flash_notification", [
         "level"=>"success",
         "message"=>"Berhasil menyimpan $teacherpi->title"
       ]);

       return redirect()->route('teacherpi.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $teacherpi = TeacherPost::find($id);
        
        // hapus image lama, jika ada
        if ($teacherpi->image) {
          $old_image = $teacherpi->image;
          $filepath = public_path() . DIRECTORY_SEPARATOR . 'img'
            . DIRECTORY_SEPARATOR . $teacherpi->image;
          try {
            File::delete($filepath);
          } catch (FileNotFoundException $e) {
            // File sudah dihapus/tidak ada
          }
        }
        $teacherpi->delete();

        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Data Berhasil dihapus"
      ]);

      return redirect()->route('teacherpi.index');
    }
}
