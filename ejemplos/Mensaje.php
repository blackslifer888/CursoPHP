<?php
/**
* 
*/
class Mensaje
{
	
	public static function mostrar()
	{
		echo "Hemos accedido a este Metodo estatico";
	}
}

echo Mensaje::mostrar();

?>