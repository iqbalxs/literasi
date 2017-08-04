<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MainPost;
use Session;
use Yajra\Datatables\Datatables;
use Yajra\Datatables\Html\Builder;

class AnnounCementsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index(Request $request, Builder $htmlBuilder)
       {
         if ($request->ajax()) {
             $datax = MainPost::with('user')->where('category','like','announcement')->get();
             return Datatables::of($datax)
             ->addColumn('action', function($data){
                return view('datatable._action', [
                'model' => $data,
                'form_url' => route('announcements.destroy', $data->id),
                'edit_url' => route('announcements.edit', $data->id),
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

         return view('announcements.index')->with(compact('html'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('announcements.create');
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
        'category' => 'required',
        'user_id' => 'required',
        'status' => 'required'
      ]);

      $announcement = MainPost::create($request->all());

      Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Berhasil menyimpan $announcement->title"
      ]);

      return redirect()->route('announcements.index');
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
        $announcement = MainPost::find($id);
        return view('announcements.edit')->with(compact('announcement'));
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
        'category' => 'required',
        'user_id' => 'required',
        'status' => 'required'
      ]);

        $announcement = MainPost::find($id);
        $announcement->update($request->all());

        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Berhasil mengubah $announcement->title"
      ]);

      return redirect()->route('announcements.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        MainPost::destroy($id);

          Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Data Berhasil Dihapus"
          ]);

        return redirect()->route('announcements.index');
    }
}
