<?php session_start();
include("conexion.php");
$sql="SELECT libros.id, imagen,titulo,autor,anio,carrera FROM libros LEFT JOIN carreras on libros.idcarrera=carreras.id ";
if (isset($_GET['orden']))
{
    $orden=$_GET['orden'];
	$sql=$sql."ORDER BY ".$orden;
}
else
 $orden="";

$query=mysqli_query ($con, $sql);
?>
<table border="1">
	<tr>
		<th>Imagen</th>
		<th><a href="javascript:cargarContenido('read.php?orden=titulo')">Titulo</a></th>
		<th><a href="javascript:cargarContenido('read.php?orden=autor')">Autor</a></th>
		<th><a href="javascript:cargarContenido('read.php?orden=anio')">Año</a></th>
		<th><a href="javascript:cargarContenido('read.php?orden=carrera')">Carrera</a></th>
		
		<th>Operaciones</th>
		
	</tr>
	<?php while ($fila = mysqli_fetch_array($query))
	 {
    ?>
	<tr>
		<td><img width="100px" src="images/<?php echo $fila['imagen'];  ?>" alt=""></td>
		<td><?php echo $fila['titulo'] ?></td>
		<td><?php echo $fila['autor'] ?></td>
		<td><?php echo $fila['anio'] ?></td>
		<td><?php echo $fila['carrera'] ?></td>
        <td>
        	<?php 
        	if ($_SESSION['nivel']==1) 
        		{?>
        	<a href="javascript:cargarContenido('formedit.php?id=<?php echo $fila['id'] ?>')">Editar</a>
        	<?php 	
        	} ?>
        </td>
	</tr>
     <?php
 }
 ?>

</table>
<?php
mysqli_close ($con);

?>

