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
        <h3 class="box-title">Data Akun</h3>

        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fa fa-minus"></i></button>
          <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fa fa-times"></i></button>
        </div>
      </div>
      <div class="box-body">
        <div class="pull-right">
          <form class="form-inline" action="{{ route('user.index') }}">
            <div class="form-group">
              <select class="form-control input-sm" name="type">
                <option value="">--Pilih Hak Akses--</option>
                @foreach (\App\Role::all() as $role)
                    <option value="{{$role->name}}">{{$role->display_name}}</option>
                @endforeach
              </select>
            </div>
            <button type="submit" class="btn btn-sm btn-flat btn-primary">Filter</button>
          </form>
        </div>
        <a href="{{ route('user.create') }}" class="btn btn-sm btn-primary">Tambah</a>
        <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Nama</th>
                  <th>Email</th>
                  <th>Hak Akses</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                @foreach ($users as $key => $item)
                <tr>
                  <td>{{ ++$key }}</td>
                  <td>{{ $item->name }}</td>
                  <td>{{ $item->email }}</td>
                  <td>
                      @foreach ($item->roles as $role)
                        {{ $role->display_name }}
                      @endforeach
                  </td>
                  <td>
                  <form class="delete" action="{{ route('user.destroy', $item->id ) }}" method="post">
                      {{csrf_field()}}
                      <input type="hidden" name="_method" value="delete">
                      <a class="btn btn-warning btn-xs" href="{{ route('user.edit',$item->id) }}" title="Edit Data"><i class="fa fa-pencil"></i></a>
                      <button type="submit" value="Delete" class="btn btn-danger btn-xs" title="Hapus Data">
                        <i class="fa fa-trash"></i>
                      </button>
                  </form>
                  </td>
                </tr>  
                @endforeach
              </tbody>
            </table>
          </div>
          {{ $users->links() }}
      </div>
      <!-- /.box-body -->
    </div>
		<!-- /.box -->

		</div>
	</div>
</div>
@endsection