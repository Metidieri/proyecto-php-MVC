<?php
session_start();


$_SESSION['user']='Carlos';
$_SESSION['pass']='12345';

echo "Iniciada la session de " . $_SESSION['user'].'<br>';

echo "<a href='pagina2.php'> Enlace pagina 2 </a>";
?>