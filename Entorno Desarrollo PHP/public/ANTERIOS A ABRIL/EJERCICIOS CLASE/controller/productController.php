<?php
include('views/view.php');
class ProductController {
    public function getAllProducts(){
        include('models/productos.php');
        $pDAO=new ProductoDAO();
        $products=$pDAO->getAllProducts();
        //include('../views/showProducts.php');
        View::show("showProducts", $products);
    }
    public function aniadirProducto(){
        $errores=array();
        if (isset($_POST['insertar'])){
            if (!isset($_POST['nombre']) || strlen($_POST['nombre'])==0)
                $errores['nombre']="El nombre no puede estar vacio";
            if (!isset($_POST['descripcion']) || strlen($_POST['descripcion'])<10)
                $errores['descripcion']="La descripcion no puede tener menos de 10 caracteres";
            if (!isset($_POST['precio']) || $_POST['precio']<=0)
                $errores['precio']="El precio debe ser mayor a 0";

                if (empty($errores)){
                    include ('models/productos.php');
                    $pDAO=new ProductoDAO();
                    if ($pDAO->insertProduct($_POST['nombre'], $_POST['descripcion'], $_POST['precio'], $_POST['procedencia']))    
                        $this->getAllProducts();
                    else {
                        $errores['general']="Problema al insertar";
                        View::show("addProduct", $errores);
                    }
                }
                else View::show("addProduct", $errores);
        }
    }
}
?>













