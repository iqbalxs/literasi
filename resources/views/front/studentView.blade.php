@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-9">
      <ul class="breadcrumb">
          <li><a href="{{ url('/') }}">Beranda</a></li>
          <li><a href="{{ url('/karya-siswa') }}">Karya Siswa</a></li>
          <li class="active">Lihat Karya Siswa</li>
        </ul>
          <div class="panel panel-default">
           <div class="panel-body">

            <h3>{{$students->title}}</h3>
            <div class="info-meta">
              <ul class="list-inline">
                <li><i class="fa fa-clock-o"></i> {{ $students->created_at->format('F j, Y') }}</li>
                <li><i class="fa fa-eye"></i> {{$students->viewcount}}</li>
                <li><i class="fa fa-user"></i> Posted by {{$students->user->name}}</li>
              </ul>
            </div>
            <hr>
            <div class = "media">
               <div class = "media-body">
                <img class = "img-thumbnail" src="{{asset('img/'.$students->image)}}" alt="post-image" width="350" height="250" >
                <p>
                  {!! $students->content !!}
               </div>
               
            </div>
           </div>

        </div>
       </div>      
    </div>
  </div>
@endsection
