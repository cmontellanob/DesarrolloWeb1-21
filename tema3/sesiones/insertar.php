<?php 
include('pila.php');
session_start();
if (!isset($_SESSION['p']))
	$_SESSION['p']=new Pila(50);
$_SESSION['p']->insertar($_GET['elemento']);
?>
Se inserto con éxito
<meta http-equiv="refresh" content="3;URL=menupila.php">