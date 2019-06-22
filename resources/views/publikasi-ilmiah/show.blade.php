@extends('adminlte::layouts.app')

@section('htmlheader_title')
  {{ config('app.name') }}
@endsection


@section('main-content')
@section('contentheader_title')
	Publikasi Ilmiah
@endsection
<div class="container-fluid spark-screen">
@include('layouts._flash')
  <div class="row">
    <div class="col-md-12">
    <ul class="breadcrumb">
          <li><a href="{{ url('/home') }}">Dashboard</a></li>
          <li><a href="{{ route('publikasi-ilmiah.index') }}">Publikasi Ilmiah</a></li>
          <li class="active">Lihat Publikasi Ilmiah</li>
    </ul>
    <!-- Default box -->
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">Publikasi Ilmiah</h3>

        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fa fa-minus"></i></button>
          <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fa fa-times"></i></button>
        </div>
      </div>
      <div class="box-body">
          <h3>{{$verifpi->title}}</h3>
            <div class="info-meta">
              <ul class="list-inline">
                <li><i class="fa fa-clock-o"></i> {{ $verifpi->created_at->format('F j, Y') }}</li>
                <li><i class="fa fa-eye"></i> {{$verifpi->viewcount}}</li>
                <li><i class="fa fa-user"></i> Posted by {{$verifpi->user->name}}</li>
              </ul>
            </div>
            <hr>
            <div class = "media">
               <div class = "media-body">
                <img class = "img-thumbnail" src="{{asset('img/'.$verifpi->image)}}" alt="post-image" width="350" height="250" >
                <p>
                  {!! $verifpi->content !!}
               </div>
               <p style="text-align:left;">
                <a class="btn btn-sm btn-success" href="{{ route('publikasi-ilmiah.verification',$verifpi->id) }}" role="button">Verifikasi</a>
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