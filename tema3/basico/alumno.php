	<?php
	$alumno1=['nombre'=>'juan','apellido'=>'perez','edad'=>22];
	$alumno2=['nombre'=>'pedro','apellido'=>'rodriguez','edad'=>23];
	$alumnos=[];
	$alumnos[]=$alumno1;
	$alumnos[]=$alumno2;



	$i=0;
	foreach ($alumnos as $alumno) {   
		$i++;
		echo "Alumno ".$i; 
		echo "-----------------------<br>"; 

		foreach ($alumno as $indice => $elemento) {
			echo $indice.' = '.$elemento.'<br>';
		}

	}



	?>