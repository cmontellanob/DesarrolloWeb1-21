<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Crear Producto</title>
</head>
<body>
	<?php
	session_start();
	include ("verificar.php");
	include ("verificarnivel.php");
	include("conexion.php");

	$sql="select id,categoria from categorias";

	$query=mysqli_query ($con, $sql);

	$sql2="select id,marca from marcas";

	$query2=mysqli_query ($con, $sql2);



	?>
	<form action="create.php" method="POST" enctype="multipart/form-data" >
		<label for="producto">Producto</label>
		<input type="text" name="producto" required> <br>
		<label for="fotografia">Fotografia</label>
		<input type="file" name="fotografia" required> <br>

		<label for="producto">Categoría</label>
		<?php while ($categoria = mysqli_fetch_array($query))
	    {?>
         <input type="radio" name="idcategoria" value="<?php echo $categoria['id'];?>"><?php echo $categoria['categoria'];?>
        <?php 
        }
        ?>  
        <br>
		<label for="descripcion">Descripcion</label>
		<textarea name="descripcion" required></textarea><br>
		
		<label for="producto">Marca</label>
		<select name="idmarca" >
		<?php while ($marca = mysqli_fetch_array($query2))
	    {?>
         <option value="<?php echo $marca['id']; ?>" >
              <?php echo $marca['marca'];?>
          </option>  
        <?php 
        }
        ?>  
        </select>
        <br>
		<label for="precio">Precio</label>
		<input type="number" step="any" name="precio" > <br>
		<input type="submit" value="Crear">

	</form>
	
</body>
</html>