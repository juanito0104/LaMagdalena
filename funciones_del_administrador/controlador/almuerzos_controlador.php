<?php

    require '../modelo/almuerzos_modelo.php';

    if($_POST){
    $almuerzo = new Almuerzos();

        switch($_POST["accion"]){
            case "CONSULTAR" :
                echo json_encode($almuerzo->ConsultarTodo());
            break;
            case "CONSULTAR_ID":
                echo json_encode($almuerzo->ConsultarPorId($_POST["idalmuerzo"]));
            break;
            case "GUARDAR":
                $nombre = $_POST["nombre"];
                $valor = $_POST["valor"];
                $respuesta = $almuerzo->Guardar($nombre, $valor);
                echo json_encode($respuesta);
            break;
            case "MODIFICAR":
                $nombre = $_POST["nombre"];
                $valor = $_POST["valor"];
                $idalmuerzo = $_POST["idalmuerzo"];
                $respuesta = $almuerzo->Modificar($idalmuerzo, $nombre, $valor);
                echo json_encode($respuesta);
            break;
            case "ELIMINAR":
                $idalmuerzo = $_POST["idalmuerzo"];
                $respuesta = $almuerzo->Eliminar($idalmuerzo);
                echo json_encode($respuesta);
            break;

        }
    }

?>