<?php
function numElementosArray($vector){
    $num_elementos=0;
    foreach ($vector as $valor){
        $num_elementos++;
    }
    return $num_elementos;
}

function tMultiplicar($valor){
    for ($i=1; $i<11; $i++){
        $multi=$valor*$i;
        echo "$valor multiplicado por $i es igual a $multi<br>";
    }
}

function vTablasMultiplicar($valor1, $valor2){
    for ($valor1; $valor1<=$valor2; $valor1++){
        tMultiplicar($valor1);
    }
}

function inicializar_array($n_elenentos, $max, $min){
    $i=0;
    $numeros2=array();
    while($i<$n_elenentos){
        $numeros2[$i]=rand($min,$max);
        $i++;
    }
    return $numeros2;
}

function calcular_media($numeros2){
    $i=0;
    $sum=0;
    while($i<count($numeros2)){
        $sum=$sum+$numeros2[$i];
        $i++;
    }
    $media=$sum/count($numeros2);
    return $media;
}

function calcular_maximo($numeros2){
    $maximo=$numeros2[0];
    for($i=1; $i<count($numeros2); $i++){
        if($numeros2[$i]>$maximo){
            $maximo=$numeros2[$i];
        }
    }
    return $maximo;
}

function calcular_minimo($numeros2){
    $minimo=$numeros2[0];
    for($i=1; $i<count($numeros2); $i++){
        if($numeros2[$i]<$minimo){
            $minimo=$numeros2[$i];
        }
    }
    return $minimo;
}

function imprimir_array($numeros2){
    echo "<table border=1px><tr>";
    for($i=0; $i<count($numeros2); $i++){
        echo "<td>" . $i . "</td>";
        echo "<td>" . $numeros2[$i] . "</td></tr>";
    }
    echo "</table>";
}
?>