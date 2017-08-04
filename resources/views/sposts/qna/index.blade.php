@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ config('app.name') }}
@endsection

@section('main-content')
<div class="container-fluid spark-screen">
	@include('layouts._flash')
	<div class="row">
		<div class="col-md-12">
		<ul class="breadcrumb">
          <li><a href="{{ url('/home') }}">Dashboard</a></li>
      		<li class="active">Tanya Jawab</li>
        </ul>

		<!-- Default box -->
		<div class="box">
			<div class="box-header with-border">
				<h3 class="box-title">Tanya Jawab</h3>

				<div class="box-tools pull-right">
					<button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
						<i class="fa fa-minus"></i></button>
					<button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
						<i class="fa fa-times"></i></button>
				</div>
			</div>
			<div class="box-body">
			{!! Form::model($qna, ['url' => url('admin/web/qna'),'method' => 'post', 'class'=>'form-horizontal']) !!}
				@include('sposts.qna._form')
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