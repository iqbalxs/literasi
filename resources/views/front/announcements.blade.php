@extends('layouts.main')
@section('breadcrumb')
  <ol class="breadcrumb">
    <li><a href="{{ url('/') }}">Beranda</a></li>
    <li class="active">Pengumuman</li>
  </ol>
@endsection
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="blog-archive-area">
          <div class="row">
            <div class="col-md-8">
              <!-- Start news area -->
              <div class="title-area">
                <h2 class="title">Pengumuman</h2>
                <span class="line"></span>
              </div>
              <div class="blog-archive-left">
                @forelse ($announcements as $data)
                  <article class="blog-news-single">
                    @isset($data->image)    
                      <div class="blog-news-img">
                        <a href="{{ url('/pengumuman/view',$data->slug) }}"><img src="{{asset('img/'.$data->image)}}" alt="image"></a>
                      </div>
                    @endisset
                    <div class="blog-news-title">
                      <h2><a href="{{ url('/pengumuman/view',$data->slug) }}">{{$data->title}}</a></h2>
                      <p>By <a class="blog-author" href="#">{{$data->user->name}}</a> <span class="blog-date">| {{ $data->created_at->format('j F Y') }}</span> | <i class="fa fa-eye"></i> {{$data->viewcount}}</p>
                    </div>
                    <div class="blog-news-details">
                      <p>{!! str_limit($data->content, 600) !!}</p>
                      <a class="blog-more-btn" href="{{ url('/pengumuman/view',$data->slug) }}">Lebih lengkap <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                  </article>
                @empty
                    <p>Belum ada pengumuman terbaru :(</p>
                @endforelse

                {{$announcements->links()}}
              </div>
              <!-- End news area -->
            </div>

            @include('layouts._right-sidebar')
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
