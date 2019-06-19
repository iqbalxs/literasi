@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ config('app.name') }}
@endsection


@section('main-content')
@section('contentheader_title')
	Guru
@endsection
<div class="container-fluid spark-screen">
@include('layouts._flash')
	<div class="row">
		<div class="col-md-12">
		<!-- Default box -->
		<div class="box">
			<div class="box-header with-border">
				<h3 class="box-title">Daftar Guru</h3>

				<div class="box-tools pull-right">
					<button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
						<i class="fa fa-minus"></i></button>
					<button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
						<i class="fa fa-times"></i></button>
				</div>
			</div>
			<div class="box-body">

            <table class="table table-striped">
                <thead>
                  <th>#</th>
                  <th>Nama</th>
                  <th>Email</th>
                  <th>NIP</th>
                  <th>Sekolah</th>
                  <th>Status</th>
                  <th>Aksi</th>
                </thead>
                <tbody>
                  @if($users->count())
                    @foreach($users as $key => $data)
                      <tr>
                        <td>{{ ++$key }}</td>
                        <td>{{ $data->user->name }}</td>
                        <td>{{ $data->user->email }}</td>
                        <td>{{ $data->user->r_id }}</td>
                        <td>{{ $data->user->school }}</td>
                        <td> 
							@if($data->user->is_verified === 0)
								<span class="label label-warning">pending</span>
							@else
								<span class="label label-success">active</span>
							@endif
                        </td>
                        <td><a href="{{ route('verifteacher.show',$data->user->id) }}" class="btn btn-xs btn-info">Verifikasi</a></td>
                      </tr>
                    @endforeach
                  @else
                    <tr>
                      <td colspan="4">There are no data.</td>
                    </tr>
                  @endif
                </tbody>
              </table>
              {{ $users->links() }}
				
			</div>
			<!-- /.box-body -->
		</div>
		<!-- /.box -->

		</div>
	</div>
</div>
@endsection