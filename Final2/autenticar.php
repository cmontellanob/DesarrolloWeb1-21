<?php session_start();
$username=$_POST['username'];
$password=sha1($_POST['password']);
include ("conexion.php");
$sql="select username,nombrecompleto,cu,nivel from usuarios 
where username='$username' and password='$password'";
echo $sql;
$query=mysqli_query ($con, $sql);
$fila = mysqli_fetch_array($query);

if ($fila!=null)
{
$_SESSION['nivel']=$fila['nivel'];
$_SESSION['username']=$fila['username'];
$_SESSION['nombrecompleto']=$fila['nombrecompleto'];
header('Location: index.php');
}
else
{
?>
contraseña incorrecta
<meta http-equiv="refresh" content="3;URL=login.html">
<?php

}

?>