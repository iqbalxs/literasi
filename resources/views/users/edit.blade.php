@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ config('app.name') }}
@endsection


@section('main-content')
@section('contentheader_title')
	Pengguna
@endsection
<div class="container-fluid spark-screen">
@include('layouts._flash')
	<div class="row">
		<div class="col-md-12">
		<!-- Default box -->
		<div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">Edit Pengguna</h3>

        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fa fa-minus"></i></button>
          <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fa fa-times"></i></button>
        </div>
      </div>
      <div class="box-body">
        <form class="form-horizontal" action="{{route('user.update',$user->id)}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        {{ method_field('PATCH') }}
          <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
              <label for="content" class="col-md-4 col-sm-4 col-xs-12 control-label">Nama</label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" class="form-control" name="name" value="{{ $user->name }}">
                  @if ($errors->has('name'))
                      <span class="help-block">
                          <strong>{{ $errors->first('name') }}</strong>
                      </span>
                  @endif
              </div>
          </div>
          <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
              <label for="content" class="col-md-4 col-sm-4 col-xs-12 control-label">Email</label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" class="form-control" name="email" value="{{ $user->email }}">
                  @if ($errors->has('email'))
                      <span class="help-block">
                          <strong>{{ $errors->first('email') }}</strong>
                      </span>
                  @endif
              </div>
          </div>
          <div class="form-group{{ $errors->has('school') ? ' has-error' : '' }}">
              <label for="content" class="col-md-4 col-sm-4 col-xs-12 control-label">Sekolah</label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" class="form-control" name="school" value="{{ $user->school }}" placeholder="Wajib diisi untuk guru / siswa">
                  @if ($errors->has('school'))
                      <span class="help-block">
                          <strong>{{ $errors->first('school') }}</strong>
                      </span>
                  @endif
              </div>
          </div>
          <div class="form-group{{ $errors->has('r_id') ? ' has-error' : '' }}">
              <label for="content" class="col-md-4 col-sm-4 col-xs-12 control-label">NIP / NIS</label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" class="form-control" name="r_id" value="{{ $user->r_id }}" placeholder="Wajib diisi untuk guru / siswa">
                  @if ($errors->has('r_id'))
                      <span class="help-block">
                          <strong>{{ $errors->first('r_id') }}</strong>
                      </span>
                  @endif
              </div>
          </div>
          <div class="form-group{{ $errors->has('avatar') ? ' has-error' : '' }}">
              <label for="content" class="col-md-4 col-sm-4 col-xs-12 control-label">Foto profil</label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="file" name="avatar" value="{{ $user->avatar }}">
                  <small class="pull-right"><i>*ukuran maksimal foto adalah 1MB</i></small>
                  @if ($errors->has('avatar'))
                    <span class="help-block">
                        <strong>{{ $errors->first('avatar') }}</strong>
                    </span>
                  @endif
                  @if (!is_null($user->avatar))
                    <img src="{{asset('img/'.$user->avatar)}}" width="200px" class="img-rounded">
                  @endif
              </div>
          </div>
          <div class="form-group{{ $errors->has('type') ? ' has-error' : '' }}">
            <label for="category_id" class="col-md-4 col-sm-4 col-xs-12 control-label">Type Akun</label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                  <select class="form-control" name="type">
                    @foreach ($user->roles as $role)
                      <option value="{{$role->name}}">{{ $role->display_name }}</option>
                    @endforeach
                    <option value="">--Pilih Type Akun--</option>
                    @foreach (\App\Role::all() as $role)
                        <option value="{{$role->name}}">{{$role->display_name}}</option>
                    @endforeach
                  </select>
                  @if ($errors->has('type'))
                      <span class="help-block">
                          <strong>{{ $errors->first('type') }}</strong>
                      </span>
                  @endif
              </div>
          </div>
          <div class="form-group">
              <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-4">
                  <button type="submit" class="btn btn-primary">
                      Simpan
                  </button>
              </div>
          </div>
        </form>
      </div>
      <!-- /.box-body -->
    </div>
		<!-- /.box -->

		</div>
	</div>
</div>
@endsection