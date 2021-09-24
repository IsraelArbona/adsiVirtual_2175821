@extends('default')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    Nuevo Pais
                    <a href="{{ route('principal.pais.index') }}" class="btn btn-sm btn-outline-primary float-right">Regresar</a>
                </div>

                <div class="card-body">
                    {{ Form::open(['route'=>'principal.pais.store']) }}
                        @include('principal.pais.partials.forme')
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
@endsection


