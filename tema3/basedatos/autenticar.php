<?php session_start();
$correoelectronico=$_POST['correoelectronico'];
$password=sha1($_POST['password']);
include ("conexion.php");
$sql="select correoelectronico,nombre,nivel from usuarios 
where correoelectronico='$correoelectronico' and password='$password'";
$query=mysqli_query ($con, $sql);
$fila = mysqli_fetch_array($query);

if ($fila!=null)
{
$_SESSION['nivel']=$fila['nivel'];
$_SESSION['nombre']=$fila['nombre'];
$_SESSION['correoelectronico']=$fila['correoelectronico'];
header('Location: read.php');
}
else
{
?>
contraseña incorrecta
<meta http-equiv="refresh" content="3;URL=formlogin.html">
<?php

}

?>