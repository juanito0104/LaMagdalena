<?php   

require '../modelo/persona.modelo.php';

if($_POST){
    $promocion = new Promocion();
    
    switch($_POST["accion"]){
        case "CONSULTAR";
        echo json_encode($promociones->ConsultarTodo());
        break;
        case "CONSULTAR_ID";
        echo json_encode($promociones->ConsultarPorId($_POST["idpromociones"]));
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
        $idPromocion = $_POST["idpromociones"];
        $promocion->Modificar($idPromociones, $nombre, $contenido, $precio);
        echo json_encode($respuesta);
        break;
        case "ELIMINAR";
        $idPromocion = $_POST["idpromociones"];
        $respuesta = $promocion->Eliminar($idpromociones);
        break;
    }
}
?>