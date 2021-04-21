<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php session_start();
$a=$_GET['a'];
$b=$_GET['b'];
$_SESSION['a']=$a;
$_SESSION['b']=$b;
?>
<ul>
	<li><a href="resultado.php?operacion=suma">Sumar</a></li>
	<li><a href="resultado.php?operacion=resta">Resta</a></li>
	<li><a href="resultado.php?operacion=multiplicacion">Multiplicación</a></li>
	<li><a href="resultado.php?operacion=division">División</a></li>
</ul>


</body>
</html>