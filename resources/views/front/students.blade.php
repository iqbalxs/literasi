@extends('layouts.main')
@section('breadcrumb')
  <ol class="breadcrumb">
    <li><a href="{{ url('/') }}">Beranda</a></li>
    <li class="active">Karya Siswa</li>
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
                <h2 class="title">Karya Siswa</h2>
                <span class="line"></span>
              </div>
              <div class="blog-archive-left">
                @forelse ($students as $data)
                  <article class="blog-news-single">
                    @isset($data->image)    
                      <div class="blog-news-img">
                        <a href="{{ url('/karya-siswa/view',$data->slug) }}"><img src="{{asset('img/'.$data->image)}}" alt="image"></a>
                      </div>
                    @endisset
                    <div class="blog-news-title">
                      <h2><a href="{{ url('/karya-siswa/view',$data->slug) }}">{{$data->title}}</a></h2>
                      <p>By <a class="blog-author" href="#">{{$data->user->name}}</a> <span class="blog-date">| {{ $data->created_at->format('j F Y') }}</span> | <i class="fa fa-eye"></i> {{$data->viewcount}} | <i class="fa fa-star"></i> {{ number_format($data->averageRating, 1) }}</p>
                    </div>
                    <div class="blog-news-details">
                      <p>{!! str_limit($data->content, 600) !!}</p>
                      <a class="blog-more-btn" href="{{ url('/karya-siswa/view',$data->slug) }}">Lebih lengkap <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                  </article>
                @empty
                    <p>Belum ada karya-siswa terbaru :(</p>
                @endforelse

                {{$students->links()}}
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
