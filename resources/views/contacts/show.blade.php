@extends('adminlte::layouts.app')

@section('htmlheader_title')
  {{ config('app.name') }}
@endsection


@section('main-content')
@section('contentheader_title')
	Pesan
@endsection
<div class="container-fluid spark-screen">
@include('layouts._flash')
  <div class="row">
    <div class="col-md-12">
     <ul class="breadcrumb">
          <li><a href="{{ url('/home') }}">Dashboard</a></li>
          <li><a href="{{ route('pesan.index') }}">Pesan</a></li>
          <li class="active">Lihat Pesan</li>
    </ul>
    <!-- Default box -->
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">Pesan</h3>

        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fa fa-minus"></i></button>
          <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fa fa-times"></i></button>
        </div>
      </div>
      <div class="box-body">
        <p></p>
        <div class="info-meta">
          <ul class="list-inline">
            <li><i class="fa fa-user"></i> Dari {{$contact->name}}</li>
            <li><i class="fa fa-envelope"></i> {{$contact->email}}</li>
            <li><i class="fa fa-phone"></i> {{$contact->phone}}</li>
            <li><i class="fa fa-clock-o"></i> {{ $contact->created_at->format('j F Y') }}</li>
          </ul>
        </div>
        <hr>
        <div class = "media">
          <div class = "media-body">
            <h4>ISI PESAN</h4>
            <p>
              {!! $contact->message !!}
            </p>
          </div>
        </div>
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
    </div>
  </div>
</div>
@endsection