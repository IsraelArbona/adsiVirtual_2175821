@extends('default')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    Nuevo Usuario
                    <a href="{{ route('principal.users.index') }}" class="btn btn-sm btn-outline-primary float-right">Regresar</a>
                </div>

                <div class="card-body">
                    {{ Form::open(['route'=>'principal.users.store']) }}
                        @include('principal.users.partials.forme')
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
@endsection


