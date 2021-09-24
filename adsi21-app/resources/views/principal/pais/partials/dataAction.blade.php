<div class="btn-group btn-group-sm">
    @can('principal.pais.show')
        <a href="{{ route('principal.pais.show',$pais->id) }}" class="btn btn-sm btn-secondary">Ver</a>
    @endcan
    @can('principal.pais.edit')
        <a href="{{ route('principal.pais.edit',$pais->id) }}" 
        class="btn btn-sm btn-success" style="margin-left: 5px !important;">Editar</a>
    @endcan
    @can('principal.pais.destroy')
        {{ Form::open(['route' => ['principal.pais.destroy',$pais->id], 'method' => 'DELETE']) }}
            <button class="btn btn-sm btn-danger" style="margin-left: 5px !important;">Eliminar</button>
        {{ Form::close() }}
    @endcan
</div>