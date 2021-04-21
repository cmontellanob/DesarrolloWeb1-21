<?php 
include('pila.php');
session_start();
if (isset($_SESSION['p']))
	echo $_SESSION['p']->mostrar();


?>