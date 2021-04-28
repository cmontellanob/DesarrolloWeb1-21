<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Crear Producto</title>
</head>
<body>
	<?php session_start();
     include ("verificar.php");
	 include ("verificarnivel.php");
	 include ("conexion.php");
	 $id=$_GET['id'];
	 $sql="select id ,producto,fotografia,idcategoria,descripcion,idmarca,precio from productos where id=".$id;
	 $sql2="select id,categoria from categorias";
	 $query2=mysqli_query ($con, $sql2);
     
	 $query=mysqli_query ($con, $sql);
     $producto = mysqli_fetch_array($query);
    $sql3="select id,marca from marcas";

	$query3=mysqli_query ($con, $sql3);

   ?>
	<form action="edit.php" method="POST" enctype="multipart/form-data">
		<input type="hidden" name="id" value="<?php echo $producto['id']; ?>">
		<input type="hidden" name="foto" value="<?php echo $producto['fotografia']; ?>">
		<label for="producto">Producto</label>
		<input type="text" name="producto" required value="<?php echo $producto['producto'] ?>"> <br>
		<label for="fotografia">Fotografia</label>
		<img width="200px" src="images/<?php echo $producto['fotografia'];  ?>" alt="">
		<input type="file" name="fotografia" required> <br>

		<label for="idcategoria">Categoría</label>
		<?php while ($categoria = mysqli_fetch_array($query2))
	    {?>
         <input type="radio" name="idcategoria" value="<?php echo $categoria['id'];?>" 
         <?php 
         echo $producto['idcategoria']==$categoria['id']?'checked':''; ?>

         >
         <?php echo $categoria['categoria'];?>

        <?php 
        }
        ?>  
        <br>
		<label for="descripcion">Descripcion</label>
		<textarea name="descripcion" required><?php echo $producto['descripcion'] ?></textarea><br>
		<label for="producto">Marca</label>
		<select name="idmarca" >
		<?php while ($marca = mysqli_fetch_array($query3))
	    {?>
         <option value="<?php echo $marca['id']; ?>"

        <?php 
         echo $producto['idmarca']==$marca['id']?'selected':''; ?>
          >
              <?php echo $marca['marca'];?>
          </option>  
        <?php 
        }
        ?>  
        </select>
        <br>
		<label for="precio">Precio</label>
		<input type="number" step="any" name="precio" value="<?php echo $producto['precio'];?>"> <br>
		<input type="submit" value="Editar">

	</form>
	
</body>
</html>