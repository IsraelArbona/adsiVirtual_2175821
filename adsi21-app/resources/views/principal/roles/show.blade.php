@extends('default')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    Ver Rol
                    <a href="{{ route('principal.roles.index') }}" class="btn btn-sm btn-outline-primary float-right">Regresar</a>
                </div>

                <div class="card-body">
                    <p><strong>Id : </strong>{{ $role->id }}</p>
                    <p><strong>Nombre : </strong>{{ $role->name }}</p>
         
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
@endsection


