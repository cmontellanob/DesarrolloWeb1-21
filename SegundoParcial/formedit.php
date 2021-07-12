	<?php session_start();
     include ("conexion.php");
	 $id=$_GET['id'];
	 $sql="select id, imagen,titulo,autor,anio,carrera from libros where id=".$id;
	 
	 $query=mysqli_query ($con, $sql);
     $libro = mysqli_fetch_array($query);
    $sql3="select id,marca from marcas";

	$query3=mysqli_query ($con, $sql3);

   ?>
	<form action="javascript:editar()" method="POST" enctype="multipart/form-data">
		<input type="hidden" name="id" value="<?php echo $libro['id']; ?>">
		<label for="libro">Titulo</label>
		<input type="text" name="libro" required value="<?php echo $libro['titulo'] ?>"> <br>
		
				<label for="descripcion">Autor</label>
		<textarea name="descripcion" required><?php echo $libro['autor'] ?></textarea><br>
        <br>
		<label for="precio">anio</label>
		<input type="number" step="any" name="precio" value="<?php echo $libro['anio'];?>"> <br>
		<input type="submit" value="Editar">

	</form>
