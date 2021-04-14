<?php
include('pila.php');
$p=new pila(10);
$p->insertar("a");
$p->insertar("b");
$p->insertar("z");
$p->mostrar();
echo "despues demostrar <br>";
echo $p->eliminar();
echo $p->eliminar();
?>


