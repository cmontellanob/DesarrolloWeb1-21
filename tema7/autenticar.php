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
echo "contraseña correcta";
}
else
{
echo "contraseña incorrecta";
}

?>   
<!-- admin' OR 1=1-- ' >