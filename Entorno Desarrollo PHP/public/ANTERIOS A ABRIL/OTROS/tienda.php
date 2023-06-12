<?php
require ('models/productos.php');
    $prod=new ProductoDAO();
    print_r($prod->getAllProducts());
    echo "<a href='Proyecto/views/inicio-sesion.php'> Enlace login </a><br>";
    echo "<a href='Proyecto/index.php'> Enlace datos de la base de datos </a>";
?>