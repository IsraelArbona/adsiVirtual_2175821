<div class="btn-group btn-group-sm">
    @can('principal.users.show')
        <a href="{{ route('principal.users.show',$users->id) }}" class="btn btn-sm btn-secondary">Ver</a>
    @endcan
    @can('principal.users.edit')
        <a href="{{ route('principal.users.edit',$users->id) }}" 
        class="btn btn-sm btn-success" style="margin-left: 5px !important;">Editar</a>
    @endcan
    @can('principal.users.destroy')
        {{ Form::open(['route' => ['principal.users.destroy',$users->id], 'method' => 'DELETE']) }}
            <button class="btn btn-sm btn-danger" style="margin-left: 5px !important;">Eliminar</button>
        {{ Form::close() }}
    @endcan
</div>