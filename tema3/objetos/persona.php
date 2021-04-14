<?php
/**
 * 
 */
class Materia 
{
	public nombre;
	public calificacion;
	function __construct($nom,$calif)
	{
		$this->nombre=$nom;
		$this->calificaicon=$calif;
	}
}
/**
 Cla* 
 */
class Persona 
{
	private $nombre;
	private $apellidos;
	
	function __construct($nom,$ape)
	{
		$this->nombre=$nom;
	    $this->apellidos=$ape;
			
	}
    function NombreCompleto()
    {
    	return $this->nombre." ".$this->apellidos;
    }
    function setNombre($nom)
    {
    	$this->nombre=$nom;
    }

}

class Docente extends Persona
{
	public $materias=[];
	public $cedulaidentidad;
	public $horario;
	public $prefesion;
	
	
	function __construct($nom,$ape)
	{
		$this->nombre=$nom;
	    $this->apellidos=$ape;
			
	}
    function getNumeroMateria()
    {
    	return count($materias);
    }

}
class Alumno extends Persona
{
	public $materias=[];
	public $CU;
	public $carrera;
	public $horario;
	
	
	function __construct($nom,$ape,$mat)
	{
		$this->nombre=$nom;
	    $this->apellidos=$ape;
	    $this->$materias=$mat;
			
	}
    function getPromedio()
    {
    	$suma=0;
    	$i=++;
    	foreach ($materias as $materia) {
    		$suma+=$materia->calificacion;
    		$i++;
    	}

    	return $suma/$i;
    }

}




?>