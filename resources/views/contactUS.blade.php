@extends('layouts.main')
@section('content')
  <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-area">
             <h2 class="title">Kontak Kami</h2>
             <span class="line"></span>
             <p>Silahkan mengisi form dibawah untuk mengirim pesan kepada kami</p>
           </div>
        </div>
        <div class="col-md-12">
          <div class="cotact-area">
            @if(Session::has('success'))
                <div class="alert alert-success">
                  {{ Session::get('success') }}
                </div>
            @endif
            <div class="row">
              <div class="col-md-4">
                <div class="contact-area-left">
                  <h4>Alamat</h4>
                  <address class="single-address">
                      <p><i class="fa fa-map-marker fa-fw"></i> Sekertariat - SMPN 2 Lembang Jl. Maribaya No. 129 Lembang 40391</p>
                      <p><i class="fa fa-phone fa-fw"></i> Tlp. (022) 2786994</p>
                      <!-- <p><i class="fa fa-envelope fa-fw"></i> E-mail : info@literasi.co.id</p> -->
                  </address> 
                  <div class="footer-right contact-social">
                     <a href="#"><i class="fa fa-facebook"></i></a>
                     <a href="#"><i class="fa fa-twitter"></i></a>
                     <a href="#"><i class="fa fa-linkedin"></i></a>
                     <a href="#"><i class="fa fa-pinterest"></i></a>
                   </div>                
                </div>
              </div>
              <div class="col-md-8">
                <div class="contact-area-right">
                  {!! Form::open(['route'=>'contactus.store', 'class'=>'comments-form contact-form']) !!}

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
      </div>
    </div>
@endsection
