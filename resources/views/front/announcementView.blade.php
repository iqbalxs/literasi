@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-9">
        <ul class="breadcrumb">
          <li><a href="{{ url('/') }}">Beranda</a></li>
          <li><a href="{{ url('/pengumuman') }}">Pegumuman</a></li>
          <li class="active">Lihat Pengumuman</li>
        </ul>
          <div class="panel panel-default">
           <div class="panel-body">

            <h3>{{$announcements->title}}</h3>
            <div class="info-meta">
              <ul class="list-inline">
                <li><i class="fa fa-clock-o"></i> {{ $announcements->created_at->format('F j, Y') }}</li>
                <li><i class="fa fa-eye"></i> {{$announcements->viewcount}}</li>
                <li><i class="fa fa-user"></i> {{$announcements->user->name}}</li>
              </ul>
            </div>
            <hr>
            <div class = "media">
               <div class = "media-body">
                  {!! $announcements->content !!}
               </div>
               
            </div>
           </div>

        </div>
       </div>      
    </div>
  </div>
@endsection
