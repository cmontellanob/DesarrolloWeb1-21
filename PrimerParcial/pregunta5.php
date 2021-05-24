<?php 
include("conexion.php");
$sql="select id,nombres,apellidos,correo,estado from usuarios ";

$query=mysqli_query ($con, $sql);
?>
<form action="editar.php" method="POST">
<table border="1">
	<tr style="color: white;background-color: blue">
		<th>Nombres</th>
		<th>Apellidos</th>
		<th>Correo</th>
		
			
	</tr>
	<?php while ($fila = mysqli_fetch_array($query))
	 {
    ?>
	<tr style="background-color:  blue" >
		<td><input type="text" name="nombres[<?php echo $fila['id']?>]" value="<?php echo $fila['nombres'] ?>"></td>
		<td><input type="text" name="apellidos[<?php echo $fila['id']?>]" value="<?php echo $fila['apellidos'] ?>"></td>
		<td><input type="text" name="correos[<?php echo $fila['id']?>]" value="<?php echo $fila['correo'] ?>"></td>

	</tr>
     <?php
 }
 ?>

</table>
<input type="submit" value="Editar">
</form>
<?php 
mysqli_close ($con);
?>

