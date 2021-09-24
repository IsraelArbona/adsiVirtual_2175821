@extends('default')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    Editar Departamentos
                    <a href="{{ route('principal.dptos.index') }}" class="btn btn-sm btn-outline-primary float-right">Regresar</a>
                </div>

                <div class="card-body">
                    {{ Form::model($dpto,['route'=>['principal.dptos.update',$dpto->id], 'method' => 'PUT']) }}
                        @include('principal.dptos.partials.forme')
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
@endsection


