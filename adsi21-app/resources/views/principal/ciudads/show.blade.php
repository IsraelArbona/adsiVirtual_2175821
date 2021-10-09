@extends('default')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    Ver Ciudad
                    <a href="{{ route('principal.ciudads.index') }}" class="btn btn-sm btn-outline-primary float-right">Regresar</a>
                </div>

                <div class="card-body">
                    <p><strong>Codigo : </strong>{{ $ciudad->id }}</p>
                    <p><strong>Nombre : </strong>{{ $ciudad->nombre }}</p>
                    <p><strong>Pais: </strong>{{ $ciudad->dpto->nombre }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
@endsection


