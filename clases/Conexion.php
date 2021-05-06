<?php
    class Conexion{
        public function conectar(){
            $servidor = "localhost";
            $usuario = "root";
            $password = "";
            $database = "agenda";
            $conexion = mysqli_connect($servidor, $usuario, $password, $database);
            return $conexion;
        }
    }
?>