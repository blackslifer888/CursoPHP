<?php
require('Soporte.php');
require('Dvd.php');

$midvd = new dvd('El Padrino',25,5,'Espanol-ingles-frances','4:3 y 16:9');
$midvd->imprime_caracteristicas();
?>