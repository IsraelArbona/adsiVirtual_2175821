<div class="form-group">
    {{ Form::label('id','Codigo') }}
    {{ Form::text('id',null,['class'=>'form-control']) }}
</div>

<div class="form-group">
    {{ Form::label('nombre','Nombre') }}
    {{ Form::text('nombre',null,['class'=>'form-control']) }}
</div>

<div class="form-group">
    {{ Form::label('pais_id','Pais') }}
    {{ Form::select('pais_id',$pais,null,['class'=>'form-control']) }}
</div>

<div class="form-group">
    {{ Form::submit('Guardar',null,['class'=>'btn btn-sm btn-outline-primary']) }}
</div>
