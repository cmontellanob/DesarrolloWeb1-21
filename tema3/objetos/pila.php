<?php

class pila 
{
	private $elementos=array();
	private $tope;
	private $max;
	function __construct($ma)
	{
		$this->max=$ma;
		$this->tope=0;
	}
	function insertar($elemento)
	{
		if ($this->tope-1==$this->max)
		{
			echo "la pila esta llena";
		}
		else
		{
			$this->elementos[$this->tope]=$elemento;
			$this->tope++;
		}
	}
	function eliminar()
	{
		if ($this->tope==0)
		{
			return "la pila esta vacia";
		}
		else
		{
			$this->tope--;
			$aux= $this->elementos[$this->tope];
			
			return $aux;
		}
	}
	function mostrar()
	{
		for ($i=0; $i <$this->tope ; $i++) { 
		 echo $this->elementos[$i]."<br>";	# code...
		}
		
	}

}