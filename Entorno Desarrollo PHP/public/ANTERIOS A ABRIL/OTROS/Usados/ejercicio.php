<?php
require ('coches.php');

$miCoche = new Coche();
$miCoche->color = 'rojo';
$miCoche->potencia = 120;
$miCoche->marca = 'audi';

$otroCoche = new Coche();
$otroCoche->color = 'negro';
$otroCoche->potencia = 140;
$otroCoche->marca = 'bmw';

?>