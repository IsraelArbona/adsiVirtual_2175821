<?php
    class Db_conexion {

        function __construct(){
            $this->conectar();
        }

        function __destruct(){
            $this->db_cerrar();
        }

        public function conectar(){
            // importar los parametros de la conxion.
            require_once 'parametros.php';

            // conexion con el drivers MYSQLI
            $conexion = mysqli_connect(db_servidor,db_usuario,db_contrasena,db_base_dato)
            or die('sin conexion a la base de datos.');

            // retornar la conexion de la base de datos.
            return $conexion;
        }

        public function db_cerrar(){
            // cerrar la conexion de la base de datos.
            mysqli_close($this->conectar());
        }
    }
?>