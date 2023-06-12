<?php
include('models/productos.php');
$dao=new ProductoDAO();
if ($dao->insertProducts(4,"Higo",4,"Fruta que se obtiene de la higuera",2)){
echo "Se han introducido correctamente";
}
?>