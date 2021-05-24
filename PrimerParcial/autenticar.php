<?php session_start();
$correo=$_POST['correo'];
$password=sha1($_POST['password']);
include ("conexion.php");
$sql="select correo,nombres,nivel,apellidos from usuarios 
where correo='$correo' and password='$password'";
$query=mysqli_query ($con, $sql);
$fila = mysqli_fetch_array($query);

if ($fila!=null)
{
$_SESSION['nivel']=$fila['nivel'];
$_SESSION['nombres']=$fila['nombres'];
$_SESSION['apellidos']=$fila['apellidos'];
if (isset($_COOKIE['pudo']))
{
    $valor=$_COOKIE['pudo']+1;
	setcookie("pudo",$valor,time()+3600); /* expira en 1 hora */
	}
	else
	{
	setcookie("pudo",1,time()+3600); /* expira en 1 hora */
	}

header('Location: index.php');
}
else
{
if (isset($_COOKIE['nopudo']))
{
    $valor=$_COOKIE['nopudo']+1;
	setcookie("nopudo",$valor,time()+3600); /* expira en 1 hora */
	}
	else
	{
	setcookie("nopudo",1,time()+3600); /* expira en 1 hora */
	}


?>
<div style="color: red;text-align: center;">Datos de autenticación equivocados</div>

<meta http-equiv="refresh" content="3;URL=login.html">
<?php

}

?>