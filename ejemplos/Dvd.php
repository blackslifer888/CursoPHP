<?php
/**
* 
*/
class Dvd extends Soporte
{
	public $idiomas_disponibles;
	private $formato_pantalla;

	function __construct($tit,$num,$precio,$idiomas,$pantalla)
	{
		parent:: __construct($tit,$num,$precio);
		$this->idiomas_disponibles = $idiomas ;
		$this->formato_pantalla = $pantalla ;

	}

	public function imprime_caracteristicas(){
		echo "Pelicula en DVD: <br>";
		parent::imprime_caracteristicas();
		echo "<br>" . $this->idiomas_disponibles;
		echo "<br>" . $this->formato_pantalla;
	}
}

?>