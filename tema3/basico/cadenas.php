<?php

$cadena =$_GET['cadena'];
echo $cadena,"<br>\n";
echo strlen($cadena),"<br>";
$palabras=explode(" ",$cadena); 
foreach ($palabras as $palabra)
{
   echo $palabra,"<br>\n";
}

$separadocomas=implode('-', $palabras); 
echo $separadocomas."<br>\n";

$resultado=sprintf("8x5 = %d <br>",8*5); 
echo $resultado,"<br>"; 
echo substr($cadena,6,3),"<br>"; 

if (chop("Cadena \n\n ") == "Cadena") 
	echo "Iguales<br><br>";

 echo strpos($cadena, "hola"),"<br><br>"; 
 echo str_replace("a","u",$cadena),"<br>"; 
 ?>