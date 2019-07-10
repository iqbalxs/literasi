<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/custom.css') }}" rel="stylesheet">

    <style type="text/css">
    body { 
        padding-top: 80px; 
        background-color: #0c1a1e;
    }
    </style>

</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-body">
                   <div class="text-center"><h2>Register Guru</h2></div>
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <div class="col-md-8 col-md-offset-2 input-group">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-user"></span>
                                </span>
                                <input id="name" type="text" placeholder="Nama Lengkap" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
                            </div>
                            <div class="col-md-8 col-md-offset-2 input-group">
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <div class="col-md-8 col-md-offset-2 input-group">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-envelope"></span>
                                </span>
                                <input id="email" type="email" placeholder="E-Mail" class="form-control" name="email" value="{{ old('email') }}" required>
                            </div>
                            <div class="col-md-8 col-md-offset-2 input-group">
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                         <div class="form-group{{ $errors->has('r_id') ? ' has-error' : '' }}">
                            <div class="col-md-8 col-md-offset-2 input-group">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-info-sign"></span>
                                </span>
                                <input id="r_id" type="number" placeholder="Nomor Induk" class="form-control" name="r_id" value="{{ old('r_id') }}" required>
                            </div>
                            <div class="col-md-8 col-md-offset-2 input-group">
                                @if ($errors->has('r_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('r_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('school') ? ' has-error' : '' }}">
                            <div class="col-md-8 col-md-offset-2 input-group">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-education"></span>
                                </span>
                                <input id="school" type="text" placeholder="Sekolah" class="form-control" name="school" value="{{ old('school') }}" required>
                            </div>
                            <div class="col-md-8 col-md-offset-2 input-group">
                                @if ($errors->has('school'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('school') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <div class="col-md-8 col-md-offset-2 input-group">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-lock"></span>
                                </span>
                                <input id="password" type="password" placeholder="Password" class="form-control" name="password" required>
                            </div>
                            <div class="col-md-8 col-md-offset-2 input-group">
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-2 input-group">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-retweet"></span>
                                </span>
                                <input id="password-confirm" type="password" placeholder="Ulangi Password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <input type="hidden" class="form-control" name="role" value="guru" required>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-2">
                                <label>
                                  <a href="{{ url('/login') }}">Sudah punya akun? Login disini</a>
                                  <br> 
                                  <a href="{{ url('/register') }}">Register siswa klik disini</a>
                                </label>
                                <button type="submit" class="btn btn-primary pull-right">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
 <!-- Scripts -->
    <script src="{{ asset('js/jquery-3.1.0.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

</body>
</html>