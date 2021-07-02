<?php
    require_once 'Conexion/DB_conexion.php';

    if(!empty($_POST)){
        $db = new Db_conexion();

        $usu = $_POST['usuario'];
        $con = $_POST['contrasena'];
    
        $sql = "select nombre,contrasena from usuarios where nombre = '$usu'";
    
        $query_exec = mysqli_query($db->conectar(),$sql)
        or die('Error en la consulta de verificación de usuario');
    
        $row = mysqli_fetch_array($query_exec);
    
        if($row){
            if($con == $row['contrasena']){
                print("
                    <script>
                        alert('Usuario correcto');
                    </script>
                ");
                header('location:inicio.php');
            } else {
                print("
                    <script>
                        alert('Contraseña Invalida!');
                    </script>
                ");
            }
        } else {
            print("
                <script>
                    alert('Usuario Invalido!');
                </script>
            ");
        }
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <title>Login</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" 
    integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" 
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" 
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" 
    integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">

        <div class="row align-item-center justify-content-center">
            <form action="login.php" method="POST">
                <div class="form-group">                
                    <label for="nom">Usuario</label>
                    <input class="form-control" type="text" name="usuario" id="nom" required>
                </div>

                <div class="form-group">  
                    <label for="cont">Contraseña</label>
                    <input class="form-control" type="password" name="contrasena" id="cont" required>
                </div>

                <button class="btn btn-primary" type="submit">Ingresar</button>
            </form>
        </div>
    </div>
</body>
</html>