<?php
require 'conexion.php';

class Persona{
    
    public function ConsultarTodo(){
        $conexion = new Conexion();
        $stmt = $conexion->prepare("SELECT * FROM promociones")
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }
    
    public function ConsultarPorId($idPromociones){
        $conexion = new Conexion();
        $stmt = $conexion->prepare("SELECT * FROM promociones WHERE idPromciones = :idPromociones");
        $stmt->bindValue(":idPromciones", $idPromociones, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_OBJ);
    }
    
    public function Guardar($nombres , $contenido , $precio){
        $conexion = new Conexion();
        $stmt = $conexion->prepare("INSERT INTO `promociones`(
            `nombredepromocion`, 
            `contenido`, 
            `precio`) 
            VALUES (':nombrePromocion',
            ':contenido',
            ':precio')");
            $stmt->bindValue(":nombres", $nombres, PDO::PARAM_STR);
            $stmt->bindValue(":contenido", $contenido, PDO::PARAM_STR);
            $stmt->bindValue(":precio", $precio, PDO::PARAM_STR);
            $stmt->bindValue(":acciones", $acciones, PDO::PARAM_STR);
            
            if($stmt->execute()){
                return "OK";
            }else{
                return "Error: se ha generado un error al guardar la informacion";
                
            }
        }
        public function Modificar( $idPromociones , $nombres , $contenido , $precio , $acciones ){
            
            $conexion = new Conexion();
            $stmt = $conexion->prepare("UPDATE `promociones` 
            SET     `nombredepromocion`=`:nombredepromocion`,
            `contenido`= :contenido',
            `precio`= :precio' 
            
            WHERE 'idPromocion'= :idPromocion';
            ");
            $stmt->bindValue(":nombres", $nombres, PDO::PARAM_STR);
            $stmt->bindValue(":contenido", $contenido, PDO::PARAM_STR);
            $stmt->bindValue(":precio", $precio, PDO::PARAM_STR);
            $stmt->bindValue(":acciones", $acciones, PDO::PARAM_STR);
            $stmt->bindValue(":idPromocion", $idPromociones, PDO::PARAM_INT);
            
            if($stmt->execute()){
                return "OK";
            }else{
                return "Error: se ha generado un error al modificar la informacion";
                
            }
        }
        
        public function Eliminar ( $idPromociones ){
            
            $conexion = new Conexion();
            $stmt = $conexion->prepare("DELETE FROM promociones WHERE idPromcion = idPromocion ");
            $stmt->bindValue(":idPromocion", $idPromociones, PDO::PARAM_INT);
            
            if($stmt->execute()){
                return "OK";
            }else{
                return "Error: se ha generado un error al eliminar la informacion";
                
            }
        }
        
        
    }
    
    ?>