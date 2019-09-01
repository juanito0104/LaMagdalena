<?php   

require '../modelo/persona.modelo.php';

if($_POST){
    $promocion = new Promocion();
    
    switch($_POST["accion"]){
        case "CONSULTAR";
            echo json_encode($promocion->ConsultarTodo());
        break;
        case "CONSULTAR_ID";
            echo json_encode($promocion->ConsultarPorId($_POST["idpromociones"]));
        break;
        case "GUARDAR";
            $nombre = $_POST["nombres"];
            $contenido = $_POST["contenido"];
            $precio = $_POST["precio"];
            $respuesta = $promocion->Guardar($nombre, $contenido, $precio);
            echo json_encode($respuesta);
        break;
        case "MODIFICAR";
            $nombre = $_POST["nombres"];
            $contenido = $_POST["contenido"];
            $precio = $_POST["precio"];
            $idpromociones = $_POST["idpromociones"];
            $respuesta = $promocion->Modificar($idpromociones, $nombre, $contenido, $precio);
            echo json_encode($respuesta);
        break;
        case "ELIMINAR";
            $idpromociones = $_POST["idpromociones"];
            $respuesta = $promocion->Eliminar($idpromociones);
        break;
    }
}
?>