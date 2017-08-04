@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-9">
      <ul class="breadcrumb">
          <li><a href="{{ url('/') }}">Beranda</a></li>
          <li class="active">Latar Belakang</li>
        </ul>
          <div class="panel panel-default">
           <div class="panel-body">    
            <h3>{{$background->title}}</h3>
            <div class="info-meta">
              <ul class="list-inline">
                <li><i class="fa fa-clock-o"></i> {{ $background->created_at->format('F j, Y') }}</li>
                <li><i class="fa fa-user"></i> Posted by {{$background->user->name}}</li>
                <li class="pull-right"></li>
              </ul>
            </div>
            <hr>
            <div class = "media">         
               <div class = "media-body">
                  {!! $background->content !!}
               </div>
              
            </div>
            <hr>
           </div>
        </div>
       </div>
    </div>
  </div>
@endsection
