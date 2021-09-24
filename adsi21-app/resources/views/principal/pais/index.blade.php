@extends('default')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Registro Pais
                    @can('principal.pais.create')
                        <a href="{{ route('principal.pais.create') }}" class="btn btn-sm btn-outline-primary float-right" style="margin-left:20px !important;">Nuevo</a>
                    @endcan
                </div>

                <div class="card-body">
                    <table id="tpais" class="display compact table table-striped table-bordered dt-responsive nowrap">
                        <thead>
                            <tr>
                                <th>Codigo</th>
                                <th>Nombre</th>
                                <th>Abrev</th>
                                <th width="80px">action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Codigo</th>
                                <th>Nombre</th>
                                <th>Abrev</th>
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

            $('#tpais').DataTable({
                "serverSide": true,
                "responsive": true,
                "ajax": "{{ route('principal.pais.index')}}",
                "columns": [
                    {data: 'id'},
                    {data: 'nombre'},
                    {data: 'abrev'},
                    {data: 'action', orderable: false, searchable:false}
                ],
                "dom": "<'row'<'col-lg-10 col-md-10 col-xs-12'f><'col-lg-2 col-md-2 col-xs-12'l>>" +
                "<'row'<'col-sm-12'tr>>" +
                "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
                language: {
                        "sProcessing":     "Procesando...",
                        "sLengthMenu":     "Mostrar _MENU_ registros",
                        "sZeroRecords":    "No se encontraron resultados",
                        "sEmptyTable":     "Ningún dato disponible en esta tabla",
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
                            "sLast":     "Último",
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

