@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ config('app.name') }}
@endsection


@section('main-content')
@section('contentheader_title')
	Password
@endsection
<div class="container-fluid spark-screen">
@include('layouts._flash')
	<div class="row">
		<div class="col-md-12">
		<!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Ubah Password</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          <form class="form-horizontal" action="{{route('profile.password.update')}}" method="post" enctype="multipart/form-data">
          {{ csrf_field() }}
            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <label for="content" class="col-md-4 col-sm-4 col-xs-12 control-label">Password Lama</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="password" class="form-control" name="password" value="{{ old('password') }}">
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="form-group{{ $errors->has('new_password') ? ' has-error' : '' }}">
                <label for="content" class="col-md-4 col-sm-4 col-xs-12 control-label">Password Baru</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="password" class="form-control" name="new_password" value="{{ old('new_password') }}">
                    @if ($errors->has('new_password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('new_password') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="form-group">
              <label for="content" class="col-md-4 col-sm-4 col-xs-12 control-label">Konfirmasi Password Baru</label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="password" name="new_password_confirmation" class="form-control">
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