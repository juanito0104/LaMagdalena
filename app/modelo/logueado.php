<?php

session_start();

$usuario = $_SESSION['username'];

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sesión iniciada correctamente</title>
    <link rel="stylesheet" href="estilo.css">
    <div class="text-center">
        <a type="btn btn-succes" href="../../index.html">Página Principal</a>
    </div>
</head>
<body>
</body>
</html>
