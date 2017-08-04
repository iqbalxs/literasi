@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ config('app.name') }}
@endsection

@section('main-content')
<div class="container-fluid spark-screen">
	<div class="row">
		<div class="col-md-12">
		<ul class="breadcrumb">
          <li><a href="{{ url('/home') }}">Dashboard</a></li>
      		<li><a href="{{ url('/admin/articles') }}">Artikel</a></li>
      		<li class="active">Ubah Artikel</li>
        </ul>

		<!-- Default box -->
		<div class="box">
			<div class="box-header with-border">
				<h3 class="box-title">Ubah Artikel</h3>

				<div class="box-tools pull-right">
					<button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
						<i class="fa fa-minus"></i></button>
					<button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
						<i class="fa fa-times"></i></button>
				</div>
			</div>
			<div class="box-body">
			{!! Form::model($articles, ['url' => route('articles.update', $articles->id), 'method' => 'put', 'files'=>'true', 'class'=>'form-horizontal']) !!}
				@include('articles._form')
			{!! Form::close() !!}
			</div>
			<!-- /.box-body -->
		</div>
		<!-- /.box -->

		</div>
	</div>
</div>
@endsection

@section('js')
<script type="text/javascript">
	tinymce.init({
		selector: 'textarea',
		plugins: [
	      'advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker',
	      'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
	      'save table contextmenu directionality emoticons template paste textcolor'
	    ]
	});
</script>
@endsection