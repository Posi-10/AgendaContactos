<?php
    require_once "Conexion.php";
    class Contactos extends Conexion{
        public function agregarContacto($datos) {
        	$conexion = Conexion::conectar();
        	$sql = "INSERT INTO t_contactos (id_categoria,
											 nombre,
											 paterno,
											 materno,
											 telefono,
											 email)
					VALUES (?, ?, ?, ?, ?, ?)";
        	$query = $conexion->prepare($sql);
        	$query->bind_param('isssss', 
				$datos['id_categoria'],
				$datos['nombre'],
				$datos['paterno'],
				$datos['materno'],
				$datos['telefono'],
				$datos['email']);
        	$r = $query->execute();
        	return $r;
        }
        public function eliminarContacto($id_agenda) {
			$conexion = Conexion::conectar();
			$sql = "DELETE FROM t_contactos
        	        WHERE id_agenda = ?";
			$query = $conexion->prepare($sql);
			$query->bind_param('i', $id_agenda);
			$r = $query->execute();
			return $r;
	    }
		public function obtenerDatosContacto($id_agenda){
			$conexion = Conexion::conectar();
			$sql = "SELECT id_categoria, 
						   nombre, 
						   paterno, 
						   materno, 
						   telefono, 
						   email, 
						   id_agenda 
					FROM t_contactos 
					WHERE id_agenda = '$id_agenda'";
			$r = mysqli_query($conexion, $sql);
			$contacto = mysqli_fetch_array($r);
			$datos = array(
				"id_agenda" => $contacto['id_agenda'],
				"id_categoria" => $contacto['id_categoria'],
				"nombre" => $contacto['nombre'],
				"paterno" => $contacto['paterno'],
				"materno" => $contacto['materno'],
				"telefono" => $contacto['telefono'],
				"email" => $contacto['email']
			);
			return $datos;
		}
		public function acutalizarContacto($datos){
			$conexion = Conexion::conectar();
			$sql = "UPDATE t_contactos
					SET id_categoria = ?, 
						nombre = ?, 
						paterno = ?,
						materno = ?,
						telefono = ?,
						email = ? 
					WHERE id_agenda = ?";
			$query = $conexion->prepare($sql);
			$query->bind_param('isssssi', 
				$datos['id_categoria'],
				$datos['nombre'],
				$datos['paterno'],
				$datos['materno'],
				$datos['telefono'],
				$datos['email'],
				$datos['id_agenda']
			);
			$r = $query->execute();
			return $r;
		}
    }
?>