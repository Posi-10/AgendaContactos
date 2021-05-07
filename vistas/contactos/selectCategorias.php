<?php 
	require_once "../../clases/Conexion.php";
	$conexion = new Conexion();
	$conexion = $conexion->conectar();
	$sql = "SELECT id_categoria,
					nombre 
			FROM t_categorias 
			ORDER BY nombre";
	$r = mysqli_query($conexion, $sql);
 ?>
 	<label for="id_categoriaSelect">Selecciona una categoria</label>
 	<select id="id_categoriaSelect" name="id_categoriaSelect" class="form-control">
 		<option value="0">Seleccionar categoria</option>
 	<?php while($ver = mysqli_fetch_row($r)): ?>
 		<option value="<?php echo $ver[0] ?>"><?php echo $ver[1]; ?></option>
 	<?php endwhile; ?>
 	</select>