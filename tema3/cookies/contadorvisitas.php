<?php 
if (isset($_COOKIE['contador']))
{
    $valor=$_COOKIE['contador']+1;
	echo "es la visita $valor";
	setcookie("contador",$valor,time()+3600); /* expira en 1 hora */
	}
else
{
	echo "es la visita 1";
	setcookie("contador",1,time()+3600); /* expira en 1 hora */
}

?>