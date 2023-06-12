<?php
session_start();
print_r($_SESSION);
if (isset($_SESSION['nombre']))

echo "Estoy en la pagina 2 y el usuario logueado es " . $_SESSION['nombre'];

else

echo "Debes registrarte en el sitio";
//echo "Datos de la session<br>";
//print_r($_SESSION);

//echo "<br>Eliminamos password de la session<br>";
//unset($_SESSION['pass']);

//echo "Datos de la session despues de borrar la pass<br>";
//print_r($_SESSION);
?>