<?php
function limpiarCadena ($cadena){
    $cadena=trim ($cadena);
    $cadena=htmlspecialchars($cadena);
    return $cadena;
}
?>