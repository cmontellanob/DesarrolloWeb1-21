<?php
include("conexion.php");
foreach($_POST['nombres'] as $id=>$nombres)
{
	$apellidos= $_POST['apellidos'][$id];
	$correo=$_POST['correos'][$id];
    $sql="update usuarios set nombres='$nombres',apellidos='$apellidos',correo='$correo' where id=$id";
     $query=mysqli_query ($con, $sql);

}



mysqli_close ($con);


?>
Se actualizó con éxito
<meta http-equiv="refresh" content="5;URL=pregunta5.php">