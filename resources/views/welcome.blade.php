@extends('layouts.main')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="blog-archive-area">
          <div class="row">
            <div class="col-md-8">
              <!-- Start news area -->
              <div class="title-area">
                <h2 class="title">Berita Terbaru</h2>
                <span class="line"></span>
              </div>
              <div class="blog-archive-left">
                @forelse ($news as $data)
                  <article class="blog-news-single">
                    <div class="blog-news-img">
                      <a href="{{ url('/berita/view',$data->slug) }}"><img src="{{asset('img/'.$data->image)}}" alt="image"></a>
                    </div>
                    <div class="blog-news-title">
                      <h2><a href="{{ url('/berita/view',$data->slug) }}">{{$data->title}}</a></h2>
                      <p>By <a class="blog-author" href="#">{{$data->user->name}}</a> <span class="blog-date">| {{ $data->created_at->format('j F Y') }}</span> | <i class="fa fa-eye"></i> {{$data->viewcount}}</p>
                    </div>
                    <div class="blog-news-details">
                      <p>{!! str_limit($data->content, 600) !!}</p>
                      <a class="blog-more-btn" href="{{ url('/berita/view',$data->slug) }}">Lebih lengkap <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                  </article>
                @empty
                    <p>Belum ada berita terbaru :(</p>
                @endforelse
              </div>
              <!-- End news area -->
              
              <!-- Start karya siswa area -->
              <div class="title-area">
                <h2 class="title">Karya Siswa Terbaik</h2>
                <span class="line"></span>
              </div>
              <div class="blog-archive-left">
                @forelse ($students as $data)
                  <article class="blog-news-single">
                    <div class="blog-news-img">
                      <a href="{{ url('/berita/view',$data->slug) }}"><img src="{{asset('img/'.$data->image)}}" alt="image"></a>
                    </div>
                    <div class="blog-news-title">
                      <h2><a href="{{ url('/berita/view',$data->slug) }}">{{$data->title}}</a></h2>
                      <p>By <a class="blog-author" href="#">{{$data->user->name}}</a> <span class="blog-date">| {{ $data->created_at->format('j F Y') }}</span> | <i class="fa fa-eye"></i> {{$data->viewcount}}</p>
                    </div>
                    <div class="blog-news-details">
                      <p>{!! str_limit($data->content, 600) !!}</p>
                      <a class="blog-more-btn" href="{{ url('/berita/view',$data->slug) }}">Lebih lengkap <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                  </article>
                @empty
                    <p>Belum ada karya siswa terbaik :(</p>
                @endforelse
              </div>
              <!-- End karya siswa area -->
              
              <!-- Start karya guru area -->
              <div class="title-area">
                <h2 class="title">Karya Guru Terbaru</h2>
                <span class="line"></span>
              </div>
              <div class="blog-archive-left">
                @forelse ($teacherkg as $data)
                  <article class="blog-news-single">
                    <div class="blog-news-img">
                      <a href="{{ url('/berita/view',$data->slug) }}"><img src="{{asset('img/'.$data->image)}}" alt="image"></a>
                    </div>
                    <div class="blog-news-title">
                      <h2><a href="{{ url('/berita/view',$data->slug) }}">{{$data->title}}</a></h2>
                      <p>By <a class="blog-author" href="#">{{$data->user->name}}</a> <span class="blog-date">| {{ $data->created_at->format('j F Y') }}</span> | <i class="fa fa-eye"></i> {{$data->viewcount}}</p>
                    </div>
                    <div class="blog-news-details">
                      <p>{!! str_limit($data->content, 600) !!}</p>
                      <a class="blog-more-btn" href="{{ url('/berita/view',$data->slug) }}">Lebih lengkap <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                  </article>
                @empty
                    <p>Belum ada karya guru terbaru :(</p>
                @endforelse
              </div>
              <!-- End karya guru area -->

            </div>

            @include('layouts._right-sidebar')
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
