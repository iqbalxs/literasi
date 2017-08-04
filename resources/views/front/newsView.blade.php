@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-9">
        <ul class="breadcrumb">
          <li><a href="{{ url('/') }}">Beranda</a></li>
          <li><a href="{{ url('/berita') }}">Berita</a></li>
          <li class="active">Lihat Berita</li>
        </ul>
          <div class="panel panel-default">
           <div class="panel-body">

            <h3>{{$news->title}}</h3>
            <div class="info-meta">
              <ul class="list-inline">
                <li><i class="fa fa-clock-o"></i> {{ $news->created_at->format('F j, Y') }}</li>
                <li><i class="fa fa-eye"></i> {{$news->viewcount}}</li>
                <li><i class="fa fa-user"></i> Posted by {{$news->user->name}}</li>
              </ul>
            </div>
            <hr>
            <div class = "media">
               <div class = "media-body">
               <img class = "img-thumbnail" src="{{asset('img/'.$news->image)}}" alt="post-image" width="350" height="250" >
                <p>
                  {!! $news->content !!}
               </div>
               
            </div>
           </div>

        </div>
       </div>      
    </div>
  </div>
@endsection
