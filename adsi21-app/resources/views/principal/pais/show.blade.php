@extends('default')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    Ver Pais
                    <a href="{{ route('principal.pais.index') }}" class="btn btn-sm btn-outline-primary float-right">Regresar</a>
                </div>

                <div class="card-body">
                    <p><strong>Codigo : </strong>{{ $pais->id }}</p>
                    <p><strong>Nombre : </strong>{{ $pais->nombre }}</p>
                    <p><strong>Abrev : </strong>{{ $pais->abrev }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
@endsection


