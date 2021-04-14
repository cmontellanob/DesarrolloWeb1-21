<?php 
include ("persona.php");
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];

$p1= new Persona($nombres,$apellidos);
echo $p1->NombreCompleto();
