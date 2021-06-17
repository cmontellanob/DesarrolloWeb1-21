<?php
include("conexion.php");
$iddepartamento=$_GET['iddepartamento'];
$sql="SELECT id,provincia,poblacion FROM provincias WHERE iddepartamento=$iddepartamento";
$query=mysqli_query ($con, $sql);
$i=0;
while ($fila =  mysqli_fetch_object($query))
{
    $rawdata[] = $fila;
}	 
echo json_encode($rawdata);
?>