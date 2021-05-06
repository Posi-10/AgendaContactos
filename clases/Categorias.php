<?php
    require_once "Conexion.php";
    class Categorias extends Conexion{
        public function agregarCategorias($datos){
            $conexion = Conexion::conectar();
            $sql = "INSERT INTO t_categorias(nombre,
                                             descripcion)
                    VALUES(?, ?)";
            $query = $conexion->prepare($sql);
            $query->bind_param('ss', $datos["nombreCategoria"],
                                     $datos["descripcion"],    
            );
            $r = $query->execute();
            return $r;
        }
        public function eliminarCategoria($id_categoria){
            $conexion = Conexion::conectar();
            $sql = "DELETE FROM t_categorias WHERE id_categoria = ?";
            $query = $conexion->prepare($sql);
            $query->bind_param('i', $id_categoria);
            $r = $query->execute();
            return $r;
        }
    }
?>