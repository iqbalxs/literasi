@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-9">
        <ul class="breadcrumb">
          <li><a href="{{ url('/') }}">Beranda</a></li>
          <li class="active">Hubungi Kami</li>
        </ul>
          <div class="panel panel-default">
           <div class="panel-body">

              <h1>Hubungi Kami</h1>

              @if(Session::has('success'))
                  <div class="alert alert-success">
                    {{ Session::get('success') }}
                  </div>
              @endif

              {!! Form::open(['route'=>'contactus.store']) !!}

                <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                  {!! Form::label('Name:') !!}
                  {!! Form::text('name', old('name'), ['class'=>'form-control', 'placeholder'=>'Masukan Nama']) !!}
                  <span class="text-danger">{{ $errors->first('name') }}</span>
                </div>

                <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                  {!! Form::label('Email:') !!}
                  {!! Form::text('email', old('email'), ['class'=>'form-control', 'placeholder'=>'Masukan Email']) !!}
                  <span class="text-danger">{{ $errors->first('email') }}</span>
                </div>

                <div class="form-group {{ $errors->has('phone') ? 'has-error' : '' }}">
                  {!! Form::label('Telepon:') !!}
                  {!! Form::text('phone', old('phone'), ['class'=>'form-control', 'placeholder'=>'Masukan Nomor Telepon']) !!}
                  <span class="text-danger">{{ $errors->first('phone') }}</span>
                </div>

                <div class="form-group {{ $errors->has('message') ? 'has-error' : '' }}">
                  {!! Form::label('Message:') !!}
                  {!! Form::textarea('message', old('message'), ['class'=>'form-control', 'placeholder'=>'Isi Pesan']) !!}
                  <span class="text-danger">{{ $errors->first('message') }}</span>
                </div>

                <div class="form-group">
                  <button class="btn btn-success">Kirim</button>
                </div>

              {!! Form::close() !!}
            
           </div>
        </div>
      </div>      
    </div>
  </div>
@endsection
