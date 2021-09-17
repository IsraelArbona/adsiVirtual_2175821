<div class="form-group">
    {{ Form::label('name','Nombre') }}
    {{ Form::text('name',null,['class'=>'form-control']) }}
    {{ Form::hidden('guard_name','web') }}
</div>

<h3>Lista de Permisos</h3>

<div class="form-group">
    <ul class="list-unstyled">
        @foreach($permissions as $permission)
            <li>
                <label>
                    {{ Form::checkbox('permissions[]',$permission->id,null) }}
                    {{ $permission->name }}
                </label>
            </li>
        @endforeach
    </ul>
</div>


<div class="form-group">
    {{ Form::submit('Guardar',null,['class'=>'btn btn-sm btn-outline-primary']) }}
</div>
