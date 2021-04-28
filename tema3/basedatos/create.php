<?php session_start();
include ("verificar.php");
include ("verificarnivel.php");
$producto=$_POST['producto'];
$idcategoria=$_POST['idcategoria'];
$descripcion=$_POST['descripcion'];
$idmarca=$_POST['idmarca'];
$precio=$_POST['precio'];

$separado=explode(".",$_FILES['fotografia']['name']);
$extension=$separado[1];


$fotografia=uniqid().".".$extension;



include("conexion.php");




$sql="insert into productos(producto,fotografia,idcategoria,descripcion,idmarca,precio) values ('$producto','$fotografia',$idcategoria,'$descripcion',$idmarca,$precio)";
$query=mysqli_query ($con, $sql);

mysqli_close ($con);

copy($_FILES['fotografia']['tmp_name'],'images/'.$fotografia);

?>

<meta http-equiv="refresh" content="3;URL=read.php">