<?php
    require_once '../Conexion/DB_conexion.php';

    $db = new Db_conexion();

    $sql = "select id, nombre, apellido_1, apellido_2, estado from pr_tabla limit 100000";
    $resultado = mysqli_query($db->conectar(),$sql);

    while($registro = mysqli_fetch_array($resultado)){
        $datos[] = $registro;
    }

    $result = [
        "sEcho" => 1,
        "iTotalDisplayRecords" => count($datos),
        "aaData" => $datos
    ];

    print(json_encode($result));
    $db->db_cerrar();

?>
