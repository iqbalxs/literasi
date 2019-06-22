@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ config('app.name') }}
@endsection


@section('main-content')
@section('contentheader_title')
	Pesan
@endsection
<div class="container-fluid spark-screen">
@include('layouts._flash')
	<div class="row">
		<div class="col-md-12">
		<!-- Default box -->
		<div class="box">
			<div class="box-header with-border">
				<h3 class="box-title">Daftar Pesan</h3>

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
            <th>Telepon</th>
            <th>Pesan</th>
            <th></th>
          </thead>
          <tbody>
            @forelse ($data as $key => $item)
              <td>{{ ++$key }}</td>
              <td>{{ $item->name }}</td>
              <td>{{ $item->email }}</td>
              <td>{{ $item->phone }}</td>
              <td>{{ str_limit($item->message, 30) }}</td>
              <td><a href="{{ route('pesan.show',$item->id) }}" class="btn btn-xs btn-info"><i class="fa fa-eye"></i></a></td>
            @empty
                <td colspan="6" align="center">Tidak Ada Data</td>
            @endforelse
          </tbody>
        </table>

        {{ $data->links() }}
				
			</div>
			<!-- /.box-body -->
		</div>
		<!-- /.box -->

		</div>
	</div>
</div>
@endsection