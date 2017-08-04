@extends('adminlte::layouts.app')

@section('htmlheader_title')
  {{ config('app.name') }}
@endsection


@section('main-content')
<div class="container-fluid spark-screen">
@include('layouts._flash')
  <div class="row">
    <div class="col-md-12">
    <ul class="breadcrumb">
          <li><a href="{{ url('/home') }}">Dashboard</a></li>
          <li><a href="{{ url('/guru/teacherks') }}">Karya Siswa</a></li>
          <li class="active">Lihat Karya Siswa</li>
    </ul>
    <!-- Default box -->
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">Karya Siswa</h3>

        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fa fa-minus"></i></button>
          <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fa fa-times"></i></button>
        </div>
      </div>
      <div class="box-body">
          <h3>{{$teacherks->title}}</h3>
            <div class="info-meta">
              <ul class="list-inline">
                <li><i class="fa fa-clock-o"></i> {{ $teacherks->created_at->format('F j, Y') }}</li>
                <li><i class="fa fa-eye"></i> {{$teacherks->viewcount}}</li>
                <li><i class="fa fa-user"></i> Posted by {{$teacherks->user->name}}</li>
              </ul>
            </div>
            <hr>
            <div class = "media">
               <div class = "media-body">
                <img class = "img-thumbnail" src="{{asset('img/'.$teacherks->image)}}" alt="post-image" width="350" height="250" >
                <p>
                  {!! $teacherks->content !!}
               </div>
               <p style="text-align:left;">
                <a class="btn btn-sm btn-warning" href="{{ route('teacherks.edit',$teacherks->id) }}" role="button">Verifikasi</a>
              </p>
            </div>
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
    </div>
  </div>
</div>
@endsection