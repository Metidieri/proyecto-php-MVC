<?php
// Escribe un script en php que realize 
// a- array de 10 elementos aleatorios de 1 al 30
// b- imprimir los valores del array anterior
$i=0;
$numeros=array();
while($i<=10){
    $numeros[$i]=rand(1,30);
    $i++;
};
for ($i=1; $i<=10; $i++){
    echo "$numeros[$i]<br>";
}
print_r($numeros);
echo "<br>";

// a- calcular el valor medio de los valores del array
// b- mostrar el valor medio anterior
$i=0;
$sum=0;
while($i<=10){
    $sum=$sum+$numeros[$i];
    $i++;
}
$media=$sum/count($numeros);
echo "El valor medio del array es $media<br>";

// a- calcular el valor maximo de los valores del array
// b- mostrar el valor maximo anterior
$min=$numeros[0];
for ($i=1; $i<count($numeros); $i++){
    if ($numeros[$i]<$min){
        $min=$numeros[$i];
    }
}
echo "El valor minimo del array es $min<br>";

// a- calcular el valor minimo de los valores del array
// b- mostrar el valor minimo anterior
$max=$numeros[0];
for ($i=1; $i<count($numeros); $i++){
    if ($numeros[$i]>$max){
        $max=$numeros[$i];
    }
}
echo "El valor maximo del array es $max<br>";

include("funciones.php");
$i=0;
$a1=array();
while($i<10){
    $a1[$i]=rand(1,30);
    $i++;
}
$num1=numElementosArray($a1);
echo "$num1<br>";
$i=0;
$a2=array();
while($i<20){
    $a2[$i]=rand(1,30);
    $i++;
}
$num2=numElementosArray($a2);
echo "$num2<br>";
?>