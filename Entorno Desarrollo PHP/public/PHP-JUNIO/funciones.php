<?php
include("funciones2.php");
$tabla_multiplicar=tMultiplicar(5);
echo "$tabla_multiplicar<br>";

$varias_tablas=vTablasMultiplicar(1,3);
echo "$varias_tablas<br>";

$array=inicializar_array(10,1,30);
print_r($array);
echo "<br>";

$media_array=calcular_media($array);
echo "El valor medio del array es $media_array<br>";

$maximo_array=calcular_maximo($array);
echo "El valor maximo del array es $maximo_array<br>";

$minimo_array=calcular_minimo($array);
echo "El valor minimo del array es $minimo_array<br>";

$sacar_array=imprimir_array($array);
echo $sacar_array;
?>