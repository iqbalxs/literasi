@extends('layouts.main')
@section('breadcrumb')
  <ol class="breadcrumb">
    <li><a href="{{ url('/') }}">Beranda</a></li>
    <li class="active">{{ $additional['title'] }}</li>
  </ol>
@endsection
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="blog-archive-area">
          <div class="row">
            <div class="col-md-2"></div> 
            <div class="col-md-8">
              <div class="blog-archive-left">
                <!-- Start blog news single -->
                <article class="blog-news-single">
                  @isset($data->image)    
                  <div class="blog-news-img">
                    <img src="{{asset('img/'.$data->image)}}" alt="image">
                  </div>
                  @endisset
                  <div class="blog-news-title">
                    <h2>{{$data->title}}</h2>
                    <p>By <a class="blog-author" href="#">{{$data->user->name}}</a> <span class="blog-date">| {{ $data->created_at->format('j F Y') }}</span></p>
                  </div>
                  <div class="blog-news-details blog-single-details">
                    {!! $data->content !!}
                  </div>
                </article>
              </div>
            </div>
            <div class="col-md-2"></div> 
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
