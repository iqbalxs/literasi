@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ config('app.name') }}
@endsection


@section('main-content')
@section('contentheader_title')
	Artikel
@endsection
<div class="container-fluid spark-screen">
@include('layouts._flash')
	<div class="row">
		<div class="col-md-12">
		<!-- Default box -->
		<div class="box">
			<div class="box-header with-border">
				<h3 class="box-title">Artikel</h3>

				<div class="box-tools pull-right">
					<button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
						<i class="fa fa-minus"></i></button>
					<button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
						<i class="fa fa-times"></i></button>
				</div>
			</div>
			<div class="box-body">
				<p> <a class="btn btn-primary" href="{{ route('articles.create') }}">Tambah</a> </p>
            	{!! $html->table(['class'=>'table-striped']) !!}
			</div>
			<!-- /.box-body -->
		</div>
		<!-- /.box -->

		</div>
	</div>
</div>
@endsection
@section('js')
{!! $html->scripts() !!}
@endsection