<?php
require ('usuarios.php');

$miUsuario = new Usuario();
$miUsuario->nombre = 'rojo';
$miUsuario->email = 120;
$miUsuario->contraseña = '120';
$miUsuario->educacion = 'audi';
$miUsuario->nacionalidad = 'rojo';
$miUsuario->idioma = '120';
$miUsuario->web = 'audi';

$otroUsuario = new Usuario();
$otroUsuario->nombre = 'negro';
$otroUsuario->email = 140;
$otroUsuario->contraseña = '120';
$otroUsuario->educacion = 'bmw';
$otroUsuario->nacionalidad = 'negro';
$otroUsuario->idioma = '140';
$otroUsuario->web = 'bmw';

?>