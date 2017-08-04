<div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
	{!! Form::label('title', 'Judul', ['class'=>'col-md-2 control-label']) !!}
  <div class="col-md-4">
	{!! Form::text('title', null, ['class'=>'form-control']) !!}
	{!! $errors->first('title', '<p class="help-block">:message</p>') !!}
  </div>
</div>

<div class="form-group{{ $errors->has('textarea') ? ' has-error' : '' }}">
  {!! Form::label('title', 'Isi', ['class'=>'col-md-2 control-label']) !!}
  <div class="col-md-8">
   {{ Form::textarea('content', null, array('class' => 'form-control')) }}
    </div>
</div>

{!! Form::hidden('category', 'sejarah' , ['class'=>'form-control']) !!}
{!! Form::hidden('user_id', Auth::user()->id , ['class'=>'form-control']) !!}

<div class="form-group">
 <div class="col-md-4 col-md-offset-2">
  {!! Form::submit('Simpan', ['class'=>'btn btn-primary']) !!}
 </div>
</div>
