<div class="btn-group btn-group-sm">

    <a href="{{ route('principal.users.show',$users->id) }}" class="btn btn-sm btn-secondary">Ver</a>
    <a href="{{ route('principal.users.edit',$users->id) }}" 
        class="btn btn-sm btn-success" style="margin-left: 5px !important;">Editar</a>

    {{ Form::open(['route' => ['principal.users.destroy',$users->id], 'method' => 'DELETE']) }}
        <button class="btn btn-sm btn-danger" style="margin-left: 5px !important;">Eliminar</button>
    {{ Form::close() }}
</div>