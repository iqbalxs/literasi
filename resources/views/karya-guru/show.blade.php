@extends('adminlte::layouts.app')

@section('htmlheader_title')
  {{ config('app.name') }}
@endsection


@section('main-content')
@section('contentheader_title')
	Karya Guru
@endsection
<div class="container-fluid spark-screen">
@include('layouts._flash')
  <div class="row">
    <div class="col-md-12">
     <ul class="breadcrumb">
          <li><a href="{{ url('/home') }}">Dashboard</a></li>
          <li><a href="{{ route('karya-guru.index') }}">Karya Guru</a></li>
          <li class="active">Lihat Karya Guru</li>
    </ul>
    <!-- Default box -->
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">Karya Guru</h3>

        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fa fa-minus"></i></button>
          <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fa fa-times"></i></button>
        </div>
      </div>
      <div class="box-body">
          <h3>{{$verifkg->title}}</h3>
            <div class="info-meta">
              <ul class="list-inline">
                <li><i class="fa fa-clock-o"></i> {{ $verifkg->created_at->format('F j, Y') }}</li>
                <li><i class="fa fa-eye"></i> {{$verifkg->viewcount}}</li>
                <li><i class="fa fa-user"></i> Posted by {{$verifkg->user->name}}</li>
              </ul>
            </div>
            <hr>
            <div class = "media">
               <div class = "media-body">
                <img class = "img-thumbnail" src="{{asset('img/'.$verifkg->image)}}" alt="post-image" width="350" height="250" >
                <p>
                  {!! $verifkg->content !!}
               </div>
               <p style="text-align:left;">
                <a class="btn btn-sm btn-success" href="{{ route('karya-guru.verification',$verifkg->id) }}" role="button">Verifikasi</a>
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