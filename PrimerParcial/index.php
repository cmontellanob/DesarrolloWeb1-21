<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Examen parcial 1</title>
	<link rel="stylesheet" href="estilos.css">
</head>
<body>
<?php session_start();?>	
<div class="contenedor">
	<div class="encabezado">
		<div id="logou">
			<img src="images/usfx.png" alt="">
		</div>
		<div id="letras">
	<div style="text-align: center;color: red;">UNIVERSIDAD DE SAN FRANCISCO XAVIER</div>	
    <div style="text-align: center;"><span style="color: blue">Facultad de Tecnología</span> 
    	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: red;">Sucr</span><span style="color:yellow">e-Bol</span><span style="color: green;">ivia</span></div>
    <div style="text-align: center;">Carrera Ing de Sistemas</div>
    <div style="text-align: center;">Semestre 1-2021</div>
    <div style="text-align: center;">Alumno: <span style="background-color: blue">Carlos Montellano</span> CU: <span style="background-color: blue">35-239</span></div>   

		</div>
		<div id="logofacu">
			<img src="images/tecnologia.png" alt="">
		</div>


	</div>
	<div style="clear: both;">
	<div class="cuerpo">
<div>Estos son los datos de autenticación:</div>
<div>Nombre: <span style="color: blue"><?php echo $_SESSION['nombres'] ?></span> </div> 
<div>Apellidos: <span style="color: blue"><?php echo $_SESSION['apellidos'] ?></span> </div>
<div>Nivel: <span style="color: blue"><?php echo $_SESSION['nivel']==1?'Administrador':'Usuario' ?></span> </div>

	 </div>
	<div class="derecha">
		<div style="display: block;background-color: blue;">
		<ul class="menuvertical">
      	<li style="background-color: red;" ><a href="login.html">Inicio</a></li>
      	<li style="background-color: yellow;"><a href="pregunta3.php">Pregunta 3</a></li>
      	<li style="background-color: green;"><a href="formcalendario.html">Pregunta 4</a></li>
      	<li><a href="pregunta5.php">Pregunta 5</a></li>
      </ul>
       </div>
    </div>
	</div>
	<?php 
            $pudo=$_COOKIE['pudo'];
       if (isset($_COOKIE['nopudo']))
            $nopudo=$_COOKIE['nopudo'];
       else
            $nopudo=0;


	?>
	<div class="pie">
		<div>Todos los Derechos Reservados</div>
		<div>Nro intentos: <?php echo $pudo+$nopudo; ?> 
		 nro erroneos: <?php echo $nopudo; ?>
	     nro ingresos: <?php echo $pudo; ?>
	 </div>

	</div>
  
	</div>

</body>
</html>