<?php
$producto=$_POST['producto'];
$descripcion=$_POST['descripcion'];
$precio=$_POST['precio'];
include("conexion.php");

$sql="insert into productos(producto,descripcion,precio) values ('$producto','$descripcion',$precio)";
$query=mysqli_query ($con, $sql);

mysqli_close ($con);


?>

<meta http-equiv="refresh" content="3;URL=read.php">