<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php
$a=$_GET['a'];
$b=$_GET['b'];
setcookie("a",$a,time()+3600);
setcookie("b",$b,time()+3600);
?>
<ul>
	<li><a href="resultado.php?operacion=suma">Sumar</a></li>
	<li><a href="resultado.php?operacion=resta">Resta</a></li>
	<li><a href="resultado.php?operacion=multiplicacion">Multiplicación</a></li>
	<li><a href="resultado.php?operacion=division">División</a></li>
</ul>


</body>
</html>