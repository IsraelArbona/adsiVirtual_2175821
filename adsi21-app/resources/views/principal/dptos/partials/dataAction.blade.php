<div class="btn-group btn-group-sm">
    @can('principal.dptos.show')
        <a href="{{ route('principal.dptos.show',$dptos->id) }}" class="btn btn-sm btn-secondary">Ver</a>
    @endcan
    @can('principal.dptos.edit')
        <a href="{{ route('principal.dptos.edit',$dptos->id) }}" 
        class="btn btn-sm btn-success" style="margin-left: 5px !important;">Editar</a>
    @endcan
    @can('principal.dptos.destroy')
        {{ Form::open(['route' => ['principal.dptos.destroy',$dptos->id], 'method' => 'DELETE']) }}
            <button class="btn btn-sm btn-danger" style="margin-left: 5px !important;">Eliminar</button>
        {{ Form::close() }}
    @endcan
</div>