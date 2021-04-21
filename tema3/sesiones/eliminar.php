<?php 
include('pila.php');
session_start();
if (isset($_SESSION['p']))
	echo $_SESSION['p']->eliminar();
?>
Se eliminó con éxito <br>
<meta http-equiv="refresh" content="3;URL=menupila.php">