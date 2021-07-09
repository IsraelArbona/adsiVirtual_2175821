<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" 
    integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" 
    crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" 
    href="https://cdn.datatables.net/v/dt/dt-1.10.25/datatables.min.css"/>


    <script src="https://code.jquery.com/jquery-3.4.1.min.js" 
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" 
    crossorigin="anonymous"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" 
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" 
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" 
    integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" 
    crossorigin="anonymous"></script>

    <script type="text/javascript" 
    src="https://cdn.datatables.net/v/dt/dt-1.10.25/datatables.min.js"></script>

    <script type="text/javascript" src="Recursos/js/main.js"></script>

    <title>Inicio</title>
</head>
<body>
    <h1> Registros de PR Tabla</h1>

    <div class="container">
        <table id="dt_pr_tabla" class="table table-striped table-bordered" style="width: 100%">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Pr Apellido</th>
                    <th>Sg Apellido</th>
                    <th>Estado</th>
                </tr>
            </thead>
        </table>
    </div>
</body>
</html>