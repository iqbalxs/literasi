@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-9">
          <div class="panel panel-default">
          <div class="panel-heading"><b>Berita</b></div>
           <div class="panel-body">       
            @foreach ($bnews as $data)
            <h3>{{$data->title}}</h3>
            <div class="info-meta">
              <ul class="list-inline">
                <li><i class="fa fa-clock-o"></i> {{ $data->created_at->format('F j, Y') }}</li>
                <li><i class="fa fa-eye"></i> {{$data->viewcount}}</li>
                <li><i class="fa fa-user"></i> Posted by {{$data->user->name}}</li>
              </ul>
            </div>
            <hr>
            <div class = "media">
               <a class = "pull-left" href = "#">
                <img class = "media-object " src="{{asset('img/'.$data->image)}}" alt="post-image" width="250" height="170" >
               </a>
               <div class = "media-body">
                   {!! str_limit($data->content, 600) !!}
               </div>
              <p style="text-align:right;">
                <a class="btn btn-sm btn-primary" href="{{ url('/berita/view',$data->id) }}" role="button">Baca</a>
              </p>
            </div>
            <hr>
            @endforeach
            {{$bnews->links()}}      
           </div>
        </div>
        
        <div class="panel panel-default">
          <div class="panel-heading"><b>Artikel</b></div>
           <div class="panel-body">       
            @foreach ($barticles as $data)
            <h3>{{$data->title}}</h3>
            <div class="info-meta">
              <ul class="list-inline">
                <li><i class="fa fa-clock-o"></i> {{ $data->created_at->format('F j, Y') }}</li>
                <li><i class="fa fa-eye"></i> {{$data->viewcount}}</li>
                <li><i class="fa fa-user"></i> Posted by {{$data->user->name}}</li>
              </ul>
            </div>
            <hr>
            <div class = "media">
               <a class = "pull-left" href = "#">
                <img class = "media-object " src="{{asset('img/'.$data->image)}}" alt="post-image" width="250" height="170" >
               </a>
               <div class = "media-body">
               {!! str_limit($data->content, 600) !!}
               </div>
              <p style="text-align:right;">
                <a class="btn btn-sm btn-primary" href="{{ url('/artikel/view',$data->id) }}" role="button">Baca</a>
              </p>
            </div>
            <hr>
            @endforeach
            {{$barticles->links()}}   
           </div>
        </div>
       </div>


      <div class="col-sm-3">
        <div class="panel panel-default">
           <div class="panel-heading"><b>Pengumuman</b></div>
           <div class="panel-body">
           @foreach ($bannouncements as $data)
           <h4>{{$data->title}}</h4>
            <div class="recent">
              <div class="info-meta">
                <ul class="list-inline">
                  <li><i class="fa fa-clock-o"></i> {{ $data->created_at->format('F j, Y') }}</a></li>
                  <li><i class="fa fa-eye"></i> {{$data->viewcount}}</li>
                </ul>
              </div>
                <a class="btn btn-xs btn-primary" href="{{ url('/pengumuman/view',$data->id) }}" role="button">Baca</a>
            </div>
            <hr />
            @endforeach
            {{$bannouncements->links()}}
          </div>
        </div>
      </div>

      </div>
    </div>
  </div>
@endsection
