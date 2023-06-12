<?php
include_once('views/header.php');
include_once('controller/productController.php');

if (isset($_GET['action'])){ // RECIBIMOS EL PARAMETRO ACTION
    $controlador=new ProductController();

    switch ($_GET['action']){
        case 'listarprod': $controlador->getAllProducts();
                        break;
        case 'aniadirprod': $controlador->aniadirProducto();
                        break;
    }
}
else { // NO RECIBIMOS PARAMETRO ACTION
echo "Esta seria la pagina de entrada a nuestro sitio";
}

include_once('views/footer.php');
?>