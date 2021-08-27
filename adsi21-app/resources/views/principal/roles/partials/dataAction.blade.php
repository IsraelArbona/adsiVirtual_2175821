<div class="btn-group btn-group-sm">
    @can('principal.roles.show')
        <a href="{{ route('principal.roles.show',$roles->id) }}" class="btn btn-sm btn-secondary">Ver</a>
    @endcan
    @can('principal.roles.edit')
        <a href="{{ route('principal.roles.edit',$roles->id) }}" 
        class="btn btn-sm btn-success" style="margin-left: 5px !important;">Editar</a>
    @endcan
    @can('principal.roles.destroy')
        {{ Form::open(['route' => ['principal.roles.destroy',$roles->id], 'method' => 'DELETE']) }}
            <button class="btn btn-sm btn-danger" style="margin-left: 5px !important;">Eliminar</button>
        {{ Form::close() }}
    @endcan
</div>