@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ config('app.name') }}
@endsection


@section('main-content')
@section('contentheader_title')
	Siswa
@endsection
<div class="container-fluid spark-screen">
@include('layouts._flash')
	<div class="row">
		<div class="col-md-12">
		<!-- Default box -->
		<div class="box">
			<div class="box-header with-border">
				<h3 class="box-title">Daftar Siswa</h3>

				<div class="box-tools pull-right">
					<button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
						<i class="fa fa-minus"></i></button>
					<button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
						<i class="fa fa-times"></i></button>
				</div>
			</div>
			<div class="box-body">
        <div class="pull-right">
          <form class="form-inline" action="{{ route('user-siswa.index') }}">
            <div class="form-group">
              <select class="form-control input-sm" name="verified">
                  <option value="">--Filter Verifikasi--</option>
                  <option value="all" @if($verified == 'all') selected @endif>Semua</option>
                  <option value="1" @if($verified == '1') selected @endif>Terverifikasi</option>
                  <option value="0" @if($verified == '0') selected @endif>Belum Terverifikasi</option>
              </select>
            </div>
            <button type="submit" class="btn btn-sm btn-flat btn-primary">Filter</button>
          </form>
        </div>
        <table class="table table-striped">
          <thead>
            <th>#</th>
            <th>Nama</th>
            <th>Email</th>
            <th>NIS</th>
            <th>Sekolah</th>
            <th>Terverifikasi</th>
            <th>Aksi</th>
          </thead>
          <tbody>
            @if($users->count())
              @foreach($users as $key => $data)
                <tr>
                  <td>{{ ++$key }}</td>
                  <td>{{ $data->name }}</td>
                  <td>{{ $data->email }}</td>
                  <td>{{ $data->r_id }}</td>
                  <td>{{ $data->school }}</td>
                  <td> 
                      @if($data->is_verified == true)
                        <span class="label label-success">Ya</span>
                      @else
                        <span class="label label-danger">Tidak</span>
                      @endif
                  </td>
                  <td><a href="{{ route('user-siswa.verification',$data->id) }}" class="btn btn-xs btn-info">Verifikasi</a></td>
                </tr>
              @endforeach
            @else
              <tr>
                <td colspan="4">There are no data.</td>
              </tr>
            @endif
          </tbody>
        </table>

        {{ $users->appends(compact('verified'))->links() }}
				
			</div>
			<!-- /.box-body -->
		</div>
		<!-- /.box -->

		</div>
	</div>
</div>
@endsection