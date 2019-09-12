<?php

require 'conexion.php';

class Almuerzos{

    public function ConsultarTodo(){
        $conexion = new Conexion();
        $stmt = $conexion->prepare("SELECT * FROM almuerzo");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function ConsultarPorId($idalmuerzo){
        $conexion = new Conexion();
        $stmt = $conexion->prepare("SELECT * FROM almuerzo where idalmuerzo = :idalmuerzo");
        $stmt->bindValue(":idalmuerzo", $idalmuerzo, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_OBJ);
    }
    
    public function Guardar($nombres, $valor){

        $conexion = new Conexion();
        $stmt = $conexion->prepare("INSERT INTO `almuerzo`
                                            (`nombrealmuerzo`,
                                            `valor`)
                                            VALUES (:nombrealmuerzo,
                                            :valor);");
        
        $stmt->bindValue(":nombrealmuerzo", $nombres, PDO::PARAM-STR);
        $stmt->bindValue(":valor", $valor, PDO::PARAM-STR);
    
        if($stmt->execute()){
            return "OK";
        }else{
            return "Error: se ha generado un error al guardar la información";
        }

    }

    public function Modificar($idalmuerzo, $nombres, $valor){

        $conexion = new Conexion();
        $stmt = $conexion->prepare("UPDATE `almuerzo`
                                        SET `idalmuerzo`=`idalmuerzo`,
                                            `nombrealmuerzo`=`nombrealmuerzo`,
                                            `valor`=`valor`
                                        WHERE idalmuerzo = idalmuerzo;");
        
        $stmt->bindValue(":nombrealmuerzo", $nombres, PDO::PARAM-STR);
        $stmt->bindValue(":valor", $valor, PDO::PARAM-STR);
        $stmt->bindValue(":idalmuerzo", $idalmuerzo, PDO::PARAM-STR);
    
        if($stmt->execute()){
            return "OK";
        }else{
            return "Error: se ha generado un error al modificar la información";
        }

    }

    public function Eliminar($idalmuerzo){

        $conexion = new Conexion();
        $stmt = $conexion->prepare("DELETE FROM almuerzo WHERE idalmuerzo = :idalmuerzo");
        $stmt->bindValue(":idalmuerzo", $idalmuerzo, PDO::PARAM-STR);
    
        if($stmt->execute()){
            return "OK";
        }else{
            return "Error: se ha generado un error al eliminar la información";
        }

    }

}

?>