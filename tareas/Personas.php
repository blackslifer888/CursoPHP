<?php

class Personas
{
	private $Nombre;
	private $Apellido;
	private $FechaNacimiento;
	
	function __construct($nom,$ape,$fec_nac)
	{
		$this->Nombre = $nom ;
		$this->Apellido = $ape;
		$this->FechaNacimiento = $fec_nac;
	}

	public function calcular_edad(){
		echo "<br> Años: " .(date("Y-m-d") - date($this->FechaNacimiento));
	}

	public function imprime_caracteristicas(){
		echo "<b>Mi nombre es: " . $this->Nombre."</b>";
		echo "<br>Apellido: " . $this->Apellido;
		$this->calcular_edad();
	}
}
?>