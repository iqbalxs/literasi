@extends('layouts.main')
@section('breadcrumb')
  <ol class="breadcrumb">
    <li><a href="{{ url('/') }}">Beranda</a></li>
    <li><a href="{{ url('/pengumuman') }}">Pengumuman</a></li>
    <li class="active">Lihat Pengumuman</li>
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
                  @isset($announcements->image)    
                  <div class="blog-news-img">
                    <img src="{{asset('img/'.$announcements->image)}}" alt="image">
                  </div>
                  @endisset
                  <div class="blog-news-title">
                    <h2>{{$announcements->title}}</h2>
                    <p>By <a class="blog-author" href="#">{{$announcements->user->name}}</a> <span class="blog-date">| {{ $announcements->created_at->format('j F Y') }}</span> | <i class="fa fa-eye"></i> {{$announcements->viewcount}}</p>
                  </div>
                  <div class="blog-news-details blog-single-details">
                    {!! $announcements->content !!}
                  </div>
                </article>
                <!-- Start blog navigation -->
                <div class="blog-navigation-area">
                  @isset($prev)
                    <div class="blog-navigation-prev">
                      <a href="{{ url('/pengumuman/view',$prev->slug) }}">
                        <h5>{{ str_limit($prev->title, 23) }}</h5>
                        <span>Pengumuman Sebelumnya</span>
                      </a>
                    </div>
                  @endisset
                  @isset($next)    
                    <div class="blog-navigation-next">
                      <a href="{{ url('/pengumuman/view',$next->slug) }}">
                        <h5>{{ str_limit($next->title, 23) }}</h5>
                        <span>Pengumuman Selanjutnya</span>
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
