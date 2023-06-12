<?php
// Crea un bucle que me introduzca los numeros que sean pares del 1 al 100
echo "<table border=1px><tr>";
for ($num=1; $num<=100; $num++){
    if ($num %2==0){
        echo "<td>" . $num . "</td>";
    }
}
echo "</tr></table>";

// Crea un bucle que me muestre los numeros multiplos de 3 y 4 a la vez del 1 al 100
echo "<table border=1px>";
for ($num=1; $num<=100; $num++){
    if (($num %3==0) && ($num %4==0)){
        echo "<tr>";
        for ($i=1; $i<=10; $i++){
                echo "<td>" . $num*$i . "</td>";
        }
        echo "</tr>";
    }
}
echo "</table>";

// Hacer el factorial del numero 5
$num=5;
$fact=1;
$i=1;
if ($num!=0){
while ($i<=$num){
    $fact=$fact*$i;
    $i++;
}
echo "El factorial de $num es $fact<br>";
}
else{
    echo "El factorial de $num es 1<br>";
}

// Hacer en casa
// Algoritmo que muestre los numeros primos entre 1 y 200
?>