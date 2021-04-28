<?php session_start();
include ("verificar.php");
include ("verificarnivel.php");
	 include ("conexion.php");
	 $id=$_GET['id'];
	 $sql="delete from productos where id=".$id;
	 $query=mysqli_query ($con, $sql);
     
   ?>

   Se elimino el producto
<meta http-equiv="refresh" content="5;URL=read.php">