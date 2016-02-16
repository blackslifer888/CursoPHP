<?php

/**
* 
*/
class Juego extends Soporte
{
	public $consola;
	private $min_num_jugadores;
	private $max_num_jugadores;
	function __construct($tit,$num,$precio,$consola,$min_j,$max_j)
	{
      parent:: __construct($tit,$num,$precio);
      $this->consola = $consola;
      $this->min_num_jugadores = $min_j;
      $this->max_num_jugadores = $max_j;
	}

	public function imprime_jugadores_posibles(){
		if ($this->min_num_jugadores == $this->max_num_jugadores){
			if ($this->min_num_jugadores ==1)
				echo "<br>Para un Jugador";
			else
				echo "<br>Para ". $this->min_num_jugadores ." Jugadores";
		}else
		{
			echo "<br>Para ".$this->min_num_jugadores. " a " .$this->max_num_jugadores . " Jugadores";
		}
	}
	public function imprime_caracteristicas(){

		echo "Juego para: ".$this->consola ."<br>";
		parent::imprime_caracteristicas();
		echo "<br>" .$this->imprime_jugadores_posibles();
	}

}

?>