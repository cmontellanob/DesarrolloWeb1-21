<?php session_start();
$correoelectronico=$_POST['correoelectronico'];
$password=sha1($_POST['password']);
include ("conexion.php");
$sql="select usuario,nombrecompleto,nivel from usuarios 
where usuario='$correoelectronico' and password='$password'";
$query=mysqli_query ($con, $sql);
$fila = mysqli_fetch_array($query);

if ($fila!=null)
{
$_SESSION['nivel']=$fila['nivel'];
$_SESSION['nombre']=$fila['nombrecompleto'];
$_SESSION['usuario']=$fila['usuario'];
echo "Autenticado";
}
else
{
    echo "Error deautenticacion";
}
?>
