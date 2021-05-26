<?php 
$imagen = imagecreatefrompng("zend.png");
$dimensiones = getimagesize("zend.png");

$dimensionx = $dimensiones[0] /2;
$dimensiony = $dimensiones[1] /2;
$miniatura = imagecreatetruecolor($dimensionx,$dimensiony);
imagecopyresampled($miniatura, $imagen, 0, 0, 0, 0, $dimensionx, $dimensiony, $dimensiones[0], $dimensiones[1]);

header("Content-Type: image/png");
imagepng($miniatura);
?>
