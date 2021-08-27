@extends('default')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    Editar Rol
                    <a href="{{ route('principal.roles.index') }}" class="btn btn-sm btn-outline-primary float-right">Regresar</a>
                </div>

                <div class="card-body">
                    {{ Form::model($role,['route'=>['principal.roles.update',$role->id], 'method' => 'PUT']) }}
                        @include('principal.roles.partials.forme')
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
@endsection


