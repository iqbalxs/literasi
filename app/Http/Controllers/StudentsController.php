<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\StudentPost;
use Session;
use Yajra\Datatables\Datatables;
use Yajra\Datatables\Html\Builder;

class StudentsController extends Controller
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
             $datax = StudentPost::with('user')->where('user_id','=',$auth)->get();
             return Datatables::of($datax)
             ->addColumn('action', function($data){
                return view('datatable._action', [
                'model' => $data,
                'form_url' => route('students.destroy', $data->id),
                'edit_url' => route('students.edit', $data->id),
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

         return view('students.index')->with(compact('html'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('students.create');
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
        'user_id' => 'required',
        'status' => 'required'
      ]);

        $students = StudentPost::create($request->except('image'));

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

         // mengisi field image di students dengan filename yang baru dibuat
         $students->image = $filename;
         $students->save();
        }
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Berhasil menyimpan $students->title"
        ]);

        return redirect()->route('students.index');
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
        $students = StudentPost::find($id);
        return view('students.edit')->with(compact('students'));
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
        'user_id' => 'required',
        'status' => 'required'
      ]);

       $students = StudentPost::find($id);
       $students->update($request->all());

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
         if ($students->image) {
           $old_image = $students->image;
           $filepath = public_path() . DIRECTORY_SEPARATOR . 'img'
           . DIRECTORY_SEPARATOR . $students->image;
           try {
             File::delete($filepath);
           } catch (FileNotFoundException $e) {
             // File sudah dihapus/tidak ada
           }
         }

         // ganti field image dengan image yang baru
         $students->image = $filename;
         $students->save();
       }

       Session::flash("flash_notification", [
         "level"=>"success",
         "message"=>"Berhasil menyimpan $students->title"
       ]);

       return redirect()->route('students.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $students = StudentPost::find($id);
        
        // hapus image lama, jika ada
        if ($students->image) {
          $old_image = $students->image;
          $filepath = public_path() . DIRECTORY_SEPARATOR . 'img'
            . DIRECTORY_SEPARATOR . $students->image;
          try {
            File::delete($filepath);
          } catch (FileNotFoundException $e) {
            // File sudah dihapus/tidak ada
          }
        }
        $students->delete();

        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Data Berhasil dihapus"
      ]);

      return redirect()->route('students.index');
    }
}
