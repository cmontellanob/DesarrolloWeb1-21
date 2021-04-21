<?php
include("conexion.php");
$sql="select id ,producto,descripcion,precio from productos ";
$query=mysqli_query ($con, $sql);
?>
<table border="1">
	<tr>
		<th>Producto</th>
		<th>Descripcion</th>
		<th>Precio</th>
	</tr>
	<?php while ($fila = mysqli_fetch_array($query))
	 {
    ?>
	<tr>
		<td><?php echo $fila['producto'] ?></td>
		<td><?php echo $fila['descripcion'] ?></td>
		<td><?php echo $fila['precio'] ?> </td> 

	</tr>
     <?php
 }
 ?>

</table>






<?php

mysqli_close ($con);
?>