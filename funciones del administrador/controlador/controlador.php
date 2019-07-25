<?php   

    require '../modelo/persona.modelo.php';

    if($_POST){
        $persona = new Persona();

        switch($_POST["accion"]){
            case "CONSULTAR";
                echo json_encode($promociones->ConsultarTodo());
            break;
            case "CONSULTAR_ID";
                echo json_encode($promociones->ConsultarPorId($_POST[]));
            break;
            case "GUARDAR";
                $nombre = $_POST["nombre"];
                $contenido = $_POST["contenido"];
                $precio = $_POST["precio"];
                $promocion->Guardar($nombre, $contenido, $precio);
                echo json_encode($respuesta);
            break;
            case "MODIFICAR";
            
            $nombre = $_POST["nombre"];
            $contenido = $_POST["contenido"];
            $precio = $_POST["precio"];
            $idPromocion = $_POST["idPromocion"];
            $promocion->Modificar($idPromocion, $nombre, $contenido, $precio);
            echo json_encode($respuesta);
            break;
            case "ELIMINAR";
            $idPromocion = $_POST["idPromocion"];
            $respuesta = $promocion->Eliminar($idPromocion);
            break;
        }
    }
?>