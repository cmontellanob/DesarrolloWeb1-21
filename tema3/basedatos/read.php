<?php session_start();
include ("verificar.php");
echo "Nombre: ".$_SESSION['nombre'];
?>

<div><a href="cerrarsession.php">Cerrar Session</a></div>

<?php
include("conexion.php");
$sql="select productos.id,fotografia ,producto,categoria,descripcion,marca,precio from productos 
left join categorias on productos.idcategoria=categorias.id
left join marcas on productos.idmarca=marcas.id ";
if (isset($_GET['buscar'])){
	$buscar=$_GET['buscar'];
    $sql=$sql."WHERE producto like '%$buscar%' ";
    $sql=$sql."OR categoria like '%$buscar%' ";
    $sql=$sql."OR descripcion like '%$buscar%' ";
    $sql=$sql."OR marca like '%$buscar%' ";
}
else
{
	$buscar="";
}

if (isset($_GET['orden']))
{
    $orden=$_GET['orden'];
    $tipo=$_GET['tipo'];
    if ($tipo=='ASC')
    	$nuevotipo='DESC';
    else
    	$nuevotipo='ASC';
	$sql=$sql.' ORDER BY '.$orden.' '.$tipo;

}
else
 $orden="";

$query=mysqli_query ($con, $sql);
?>
<div >
    <form action="read.php" method="GET">
	<label for="buscar">Buscar:</label> 
	 <input type="text" name ="buscar" value="<?php echo $buscar?>">
	 <input type="submit" value="Buscar">
	 </form>
</div>

<table border="1">
	<tr>
		<th>Imagen</th>
		<th><a href="read.php?orden=producto&tipo=<?php echo $orden=='producto'?$nuevotipo:'ASC';?>&buscar=<?php echo $buscar ?>">Producto</a></th>
		<th><a href="read.php?orden=categoria&tipo=<?php echo $orden=='categoria'?$nuevotipo:'ASC';?>&buscar=<?php echo $buscar ?>">Categoria</a></th>
		<th><a href="read.php?orden=descripcion&tipo=<?php echo $orden=='descripcion'?$nuevotipo:'ASC';?>&buscar=<?php echo $buscar ?>">Descripcion</a></th>
		<th><a href="read.php?orden=marca&tipo=<?php echo $orden=='marca'?$nuevotipo:'ASC';?>&buscar=<?php echo $buscar ?>">Marca</a></th>
		<th><a href="read.php?orden=precio&tipo=<?php echo $orden=='precio'?$nuevotipo:'ASC';?>&buscar=<?php echo $buscar ?>">Precio</a></th>
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

