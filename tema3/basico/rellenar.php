<?php
$columnas = $_GET['n']; 
$filas = $_GET['m']; 
for($i=0; $i < $columnas; $i++) 
{ 
	for($j=0; $j < $filas; $j++) 
	{ 
		$matriz[$i][$j] = $i * $j; 
	}
 }

for($i=0; $i < $columnas; $i++) 
{ 
	for($j=0; $j < $filas; $j++) 
	{ 
		echo $matriz[$i][$j].' '; 
	}
	echo "<br>";
 }


 ?>