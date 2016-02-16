<?php
	/**
	* 
	*/
	class Poligono
	{
		public $vertices;
		public $color;

		
		function __construct($ver=null)
		{
			if ($ver==null)
				$this->vertices = 4 ;
			else
				$this->vertices = $ver ;
		}
	

		function __destruct()
		{
			echo "vertices :" .$this->vertices."Finalizado <br>";
		}

		function muestraVertice()
		{
			echo $this->vertices;
		}
	}
		$triangulo = new Poligono(8);
		$triangulo2 = new Poligono(2);
		$cuadrado = new Poligono();

?>