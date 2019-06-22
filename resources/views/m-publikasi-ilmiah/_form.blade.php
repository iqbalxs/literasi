<div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
	{!! Form::label('title', 'Judul', ['class'=>'col-md-2 control-label']) !!}
  <div class="col-md-4">
	{!! Form::text('title', null, ['class'=>'form-control']) !!}
	{!! $errors->first('title', '<p class="help-block">:message</p>') !!}
  </div>
</div>

<div class="form-group{{ $errors->has('textarea') ? ' has-error' : '' }}">
  {!! Form::label('title', 'Konten', ['class'=>'col-md-2 control-label']) !!}
  <div class="col-md-8">
   {{ Form::textarea('content', null, array('class' => 'form-control')) }}
    </div>
</div>

<div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
  {!! Form::label('name', 'Gambar', ['class'=>'col-md-2 control-label']) !!}
  <div class="col-md-4">
    {!! Form::file('image') !!}
    @if (isset($teacherpi) && $teacherpi->image)
      <p>{!! Html::image(asset('img/'.$teacherpi->image), null, ['class'=>'img-rounded img-responsive']) !!}</p>
    @endif
    {!! $errors->first('image', '<p class="help-block">:message</p>') !!}
  </div>
</div>

{!! Form::hidden('category', 'publikasi_ilmiah' , ['class'=>'form-control']) !!}
{!! Form::hidden('user_id', Auth::user()->id , ['class'=>'form-control']) !!}

@if(!isset($teacherkg))  
  {!! Form::hidden('status', 'pending' , ['class'=>'form-control']) !!}
@endif

<div class="form-group">
 <div class="col-md-4 col-md-offset-2">
  {!! Form::submit('Simpan', ['class'=>'btn btn-primary']) !!}
 </div>
</div>
