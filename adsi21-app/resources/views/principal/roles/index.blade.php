@extends('default')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Registro Roles
                    @can('principal.roles.create')
                        <a href="{{ route('principal.roles.create') }}" class="btn btn-sm btn-outline-primary float-right">Nuevo</a>
                    @endcan
                </div>

                <div class="card-body">
                    <table id="troles" class="display compact table table-striped table-bordered dt-responsive nowrap">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nombre</th>
                                <th width="80px">action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Id</th>
                                <th>Nombre</th>
                                <th>action</th>
                            </tr>
                        </tfoot>
                    </table>
 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@section('js')

    <script type="text/javascript">
        $(document).ready(function(){

            $('#troles').DataTable({
                "serverSide": true,
                "responsive": true,
                "ajax": "{{ route('principal.roles.index')}}",
                "columns": [
                    {data: 'id'},
                    {data: 'name'},
                    {data: 'action', orderable: false, searchable:false}
                ],
                "dom": "<'row'<'col-lg-10 col-md-10 col-xs-12'f><'col-lg-2 col-md-2 col-xs-12'l>>" +
                "<'row'<'col-sm-12'tr>>" +
                "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
                language: {
                        "sProcessing":     "Procesando...",
                        "sLengthMenu":     "Mostrar _MENU_ registros",
                        "sZeroRecords":    "No se encontraron resultados",
                        "sEmptyTable":     "Ning??n dato disponible en esta tabla",
                        "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                        "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
                        "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
                        "sInfoPostFix":    "",
                        "sSearch":         "Buscar:",
                        "sUrl":            "",
                        "sInfoThousands":  ",",
                        "sLoadingRecords": "Cargando...",
                        "oPaginate": {
                            "sFirst":    "Primero",
                            "sLast":     "??ltimo",
                            "sNext":     "Siguiente",
                            "sPrevious": "Anterior"
                        },
                        "oAria": {
                            "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                            "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                        },
                        "buttons": {
                            "copy": "Copiar",
                            "colvis": "Visibilidad"
                        }
                    }
            });
        });
    </script>

@endsection


