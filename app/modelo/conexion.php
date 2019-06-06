<?php

    class Conexion extends PDO{
        public function __construct(){
            try{
                parent::__construct("mysql:host=localhost;dbname=restaurante", "root", "");
                parent::exec("set names utf8");
            }catch(Exception $e){
                echo "Ha surgido un error al conectar";
                exit;
            }
        }
    }

$conexion = mysqli_connect('localhost', 'root', '', 'restaurante');

?>