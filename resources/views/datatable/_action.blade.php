{!! Form::model($model, ['url' => $form_url, 'method' => 'delete', 'class' => 'form-inline js-confirm', 'data-confirm' => $confirm_message] ) !!}
<a class="btn btn-xs btn-warning" href="{{ $edit_url }}"><i class="fa fa-pencil"></i></a>
{{ Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs'] )  }}
{!! Form::close()!!}