@extends('layouts.main')
@section('breadcrumb')
  <ol class="breadcrumb">
    <li><a href="{{ url('/') }}">Beranda</a></li>
    <li><a href="{{ url('/karya-siswa') }}">Karya Siswa</a></li>
    <li class="active">Lihat Karya Siswa</li>
  </ol>
@endsection
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="blog-archive-area">
          <div class="row">
            <div class="col-md-8">
              <div class="blog-archive-left">
                <!-- Start blog news single -->
                <article class="blog-news-single">
                  @isset($students->image)    
                  <div class="blog-news-img">
                    <img src="{{asset('img/'.$students->image)}}" alt="image">
                  </div>
                  @endisset
                  <div class="blog-news-title">
                    <h2>{{$students->title}}</h2>
                    <p>By <a class="blog-author" href="#">{{$students->user->name}}</a> <span class="blog-date">| {{ $students->created_at->format('j F Y') }}</span> | <i class="fa fa-eye"></i> {{$students->viewcount}}</p>
                  </div>
                  <div class="blog-news-details blog-single-details">
                    {!! $students->content !!}
                  </div>
                </article>
                <!-- Start blog navigation -->
                <div class="blog-navigation-area">
                  @isset($prev)
                    <div class="blog-navigation-prev">
                      <a href="{{ url('/karya-siswa/view',$prev->slug) }}">
                        <h5>{{ str_limit($prev->title, 23) }}</h5>
                        <span>Karya Siswa Sebelumnya</span>
                      </a>
                    </div>
                  @endisset
                  @isset($next)    
                    <div class="blog-navigation-next">
                      <a href="{{ url('/karya-siswa/view',$next->slug) }}">
                        <h5>{{ str_limit($next->title, 23) }}</h5>
                        <span>Karya Siswa Selanjutnya</span>
                      </a>
                    </div>
                  @endisset
                </div>
                <!-- Start Comment box -->
                {{-- <div class="comments-box-area">
                  <h2>Leave a Comment</h2>
                  <p>Your email address will not be published.</p>
                  <form action="" class="comments-form">
                    <div class="form-group">                        
                      <input type="text" class="form-control" placeholder="Your Name">
                    </div>
                    <div class="form-group">                        
                      <input type="email" class="form-control" placeholder="Email">
                    </div>
                    <div class="form-group">                        
                      <textarea placeholder="Comment" rows="3" class="form-control"></textarea>
                    </div>
                    <button class="comment-btn">Submit Comment</button>
                  </form>
                </div> --}}
              </div>
            </div>

            @include('layouts._right-sidebar')
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

