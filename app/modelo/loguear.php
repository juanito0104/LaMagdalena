<?php

require 'configuracion.php';

session_start();

$conexion = mysqli_connect(servidor, usuario, '', base_datos);

$usuario = $_POST['usuario'];
$password = $_POST['password'];

$sql = "SELECT * from login where usuario = '$usuario'";

$stmt = $conexion->query($sql);

if(mysqli_num_rows($stmt) > 0){
    $registro = $stmt->fetch_object();
    if($registro->contrasena != $password){
        echo "
            <script>
                alert('Contraseña incorrecta');
                window.location = '../../vista/login.html';
            </script>
        ";
    }

    echo "
        <script>
            alert('Sesión iniciada con éxito');
            window.location = '../../vista/login.html';
        </script>
    ";
}else{
    echo "
        <script>
            alert('Usuario no existe');
            window.location = '../../vista/login.html';
        </script>
    ";
}


?>