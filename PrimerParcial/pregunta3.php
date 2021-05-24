<?php 
include("conexion.php");
$sql="select nombres,apellidos,correo,estado from usuarios ";

$query=mysqli_query ($con, $sql);
?>

<table border="1">
	<tr style="color: white;background-color: blue">
		<th>Nombres</th>
		<th>Apellidos</th>
		<th>Correo</th>
		
			
	</tr>
	<?php while ($fila = mysqli_fetch_array($query))
	 {
    ?>
	<tr style="background-color: <?php echo  $fila['estado']=='E'?'red':'white'; ?>" >
		<td><?php echo $fila['nombres'] ?></td>
		<td><?php echo $fila['apellidos'] ?></td>
		<td><?php echo $fila['correo'] ?></td>

	</tr>
     <?php
 }
 ?>

</table>
<?php 
mysqli_close ($con);
?>

