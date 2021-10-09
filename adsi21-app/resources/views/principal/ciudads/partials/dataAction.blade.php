<div class="btn-group btn-group-sm">
    @can('principal.ciudads.show')
        <a href="{{ route('principal.ciudads.show',$ciudads->id) }}" class="btn btn-sm btn-secondary">Ver</a>
    @endcan
    @can('principal.ciudads.edit')
        <a href="{{ route('principal.ciudads.edit',$ciudads->id) }}" 
        class="btn btn-sm btn-success" style="margin-left: 5px !important;">Editar</a>
    @endcan
    @can('principal.ciudads.destroy')
        {{ Form::open(['route' => ['principal.ciudads.destroy',$ciudads->id], 'method' => 'DELETE']) }}
            <button class="btn btn-sm btn-danger" style="margin-left: 5px !important;">Eliminar</button>
        {{ Form::close() }}
    @endcan
</div>