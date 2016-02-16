<?php
require ('Soporte.php');
require ('Juego.php');

$mijuego = new juego("Final Fantasis",21,2.5,"PlayStation",1,1);
$mijuego->imprime_caracteristicas();

//echo "<br>Jugadores: ". $mijuego->min_jugadores;

$mijuego->imprime_jugadores_posibles();

echo "<p>";
$mijuego2 = new juego ("GP Motoracer",27,3,"PlayStation II",1,2);
echo "<b>" . $mijuego2->titulo ."</b>";
$mijuego2->imprime_jugadores_posibles();
?>