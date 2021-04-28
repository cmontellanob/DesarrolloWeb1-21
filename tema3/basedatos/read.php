<?php session_start();
include ("verificar.php");
echo "Nombre: ".$_SESSION['nombre'];
?>

<div><a href="cerrarsession.php">Cerrar Session</a></div>

<?php

include("conexion.php");
$sql="select productos.id,fotografia ,producto,categoria,descripcion,marca,precio from productos 
left join categorias on productos.idcategoria=categorias.id
left join marcas on productos.idmarca=marcas.id";

$query=mysqli_query ($con, $sql);
?>
<table border="1">
	<tr>
		<th>Imagen</th>
		<th>Producto</th>
		<th>Categoria</th>
		<th>Descripcion</th>
		<th>Marca</th>
		<th>Precio</th>
		<th>Operaciones</th>
		
	</tr>
	<?php while ($fila = mysqli_fetch_array($query))
	 {
    ?>
	<tr>
		<td><img width="100px" src="images/<?php echo $fila['fotografia'];  ?>" alt=""></td>
		<td><?php echo $fila['producto'] ?></td>
		<td><?php echo $fila['categoria'] ?></td>
		<td><?php echo $fila['descripcion'] ?></td>
		<td><?php echo $fila['marca'] ?></td>
		<td><?php echo $fila['precio'] ?> </td> 
        <td>
        	<?php 
        	if ($_SESSION['nivel']==1) 
        		{?>
        	<a href="formedit.php?id=<?php echo $fila['id'] ?>">Editar</a>
        	<a href="delete.php?id=<?php echo $fila['id'] ?>">Eliminar</a>
        	<?php 	
        	} ?>
        </td>
	</tr>
     <?php
 }
 ?>

</table>
<?php 
if ($_SESSION['nivel']==1) 
        		{?>
<a href="formcreate.php">Crear Producto</a>
<?php 
}


mysqli_close ($con);

?>

