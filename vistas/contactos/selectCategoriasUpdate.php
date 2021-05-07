<?php 
	require_once "../../clases/Conexion.php";
	$conexion = new Conexion();
	$conexion = $conexion->conectar();
	$id_categoria = $_GET['id_categoria'];
	$sql = "SELECT id_categoria,
					nombre 
			FROM t_categorias 
			ORDER BY nombre";
	$r = mysqli_query($conexion, $sql);
 ?>
 	<label for="id_categoriaSelectU">Selecciona una categoria</label>
 	<select id="id_categoriaSelectU" name="id_categoriaSelectU" class="form-control">
 		<option value="0">Seleccionar categoria</option>
 	<?php
		while($ver = mysqli_fetch_row($r)):
			if($ver[0] == $id_categoria){
    ?>
 		<option selected="" value="<?php echo $ver[0] ?>"><?php echo $ver[1]; ?></option>
	<?php
			}else{
    ?>
		<option value="<?php echo $ver[0] ?>"><?php echo $ver[1]; ?></option>	
	<?php
			}
	?>
 	<?php endwhile; ?>
 	</select>