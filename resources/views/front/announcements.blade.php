@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-9">
          <div class="panel panel-default">
           <div class="panel-body">

            @foreach ($announcements as $data)
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
               <div class = "media-body">
                  {!! str_limit($data->content, 500) !!}
               </div>
              <p>
                <a class="btn btn-sm btn-primary" href="{{ url('/pengumuman/view',$data->id) }}" role="button">Baca</a>
              </p>
            </div>
            <hr>
            @endforeach

            {{$announcements->links()}}
           </div>

        </div>
       </div>      
    </div>
  </div>
@endsection
