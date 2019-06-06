<?php

session_start();

require 'conexion.php'

$usuario = $_POST['usuario']
$password = $_POST['password']

$q = "SELECT COUNT(*) as contar from login where usuario = '$usuario' and contraseña = '$password'";

$consulta = mysqli_query($conexion, $q);
$array = mysqli_fetch_array($consulta);

if($array['contar']>0){
    header("location: ../../index.html")
}else{
    echo "Datos Incorrectos"
}

?>