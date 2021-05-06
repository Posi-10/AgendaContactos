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
        public function obtenerDatosCategoria($id_categoria) {
            $conexion = Conexion::conectar();
            $sql = "SELECT id_categoria,
                           nombre,
                           descripcion
                    FROM t_categorias
                    WHERE id_categoria = '$id_categoria'";
            $r = mysqli_query($conexion, $sql);
            $categoria = mysqli_fetch_array($r);
            $datos = array(
                "id_categoria" => $categoria['id_categoria'],
                "nombre" => $categoria['nombre'],
                "descripcion" => $categoria['descripcion']
            );
            return $datos;
        }
        public function actualizarCategorias($datos){
            $conexion = Conexion::conectar();
            $sql = "UPDATE t_categorias SET nombre = ?,
                                            descripcion = ?
                    WHERE id_categoria = ?";
            $query = $conexion->prepare($sql);
            $query->bind_param('ssi',
                $datos["nombreCategoriaU"],
                $datos["descripcionU"],    
                $datos['id_categoria']
            );
            $r = $query->execute();
            return $r;

        }
    }
?>