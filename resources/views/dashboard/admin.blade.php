@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ config('app.name') }}
@endsection


@section('main-content')
	<div class="container-fluid spark-screen">
		<div class="row">

			<div class="col-lg-3 col-xs-6">
					<!-- small box -->
					<div class="small-box bg-aqua">
						<div class="inner">
							<h3>{{ App\StudentPost::count() }}</h3>

							<p>Total Karya Siswa</p>
						</div>
						<div class="icon">
							<i class="fa fa-book"></i>
						</div>
						<a href="#" class="small-box-footer">
							Lihat detail <i class="fa fa-arrow-circle-right"></i>
						</a>
					</div>
				</div>
				<div class="col-lg-3 col-xs-6">
					<!-- small box -->
					<div class="small-box bg-green">
						<div class="inner">
							<h3>{{ App\TeacherPost::where('category','like', 'karya_guru')->count() }}</h3>

							<p>Total Karya Guru</p>
						</div>
						<div class="icon">
							<i class="fa fa-pencil"></i>
						</div>
						<a href="#" class="small-box-footer">
							Lihat detail <i class="fa fa-arrow-circle-right"></i>
						</a>
					</div>
				</div>
				<div class="col-lg-3 col-xs-6">
					<!-- small box -->
					<div class="small-box bg-yellow">
						<div class="inner">
							<h3>{{ App\TeacherPost::where('category','like', 'publikasi_ilmiah')->count() }}</h3>

							<p>Total Publikasi Ilmiah</p>
						</div>
						<div class="icon">
							<i class="fa fa-pencil-square"></i>
						</div>
						<a href="#" class="small-box-footer">
							Lihat detail <i class="fa fa-arrow-circle-right"></i>
						</a>
					</div>
				</div>
					<div class="col-lg-3 col-xs-6">
					<!-- small box -->
					<div class="small-box bg-red">
						<div class="inner">
							<h3>{{ App\MainPost::where('category','like', 'articles')->count() }}</h3>

							<p>Total Artikel</p>
						</div>
						<div class="icon">
							<i class="fa fa-file-text"></i>
						</div>
						<a href="#" class="small-box-footer">
							Lihat detail <i class="fa fa-arrow-circle-right"></i>
						</a>
					</div>
				</div>

			<div class="col-md-12">

				<!-- Default box -->
				<div class="box">
					<div class="box-header with-border">
						<h3 class="box-title">Home</h3>

						<div class="box-tools pull-right">
							<button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
								<i class="fa fa-minus"></i></button>
							<button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
								<i class="fa fa-times"></i></button>
						</div>
					</div>
					<div class="box-body">
						Selamat Datang Admin!
					</div>
					<!-- /.box-body -->
				</div>
				<!-- /.box -->

			</div>
		</div>
	</div>
@endsection
