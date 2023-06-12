<?php
if(!isset($_SESSION['carrito'])){
  $_SESSION['carrito']=array();
}

include_once ("views/View.php");
class ProductController {

    public function getAllProducts (){
        require_once ("models/productos.php");
        $pDAO=new ProductoDAO();
        $products=$pDAO->getAllProducts();
        $pDAO=null;
        View::show("showProducts", $products);
    }

    public function aniadirProduct (){
        $errores=array();
        
        if (isset($_POST['insertar'])){
            if (!isset($_POST['nombre']) || strlen($_POST['nombre'])==0) 
                $errores['nombre']="El nombre no puede estar vacío.";
            if (!isset($_POST['descripcion']) || strlen($_POST['descripcion'])<10) 
                $errores['descripcion']="La descripción debe tener al menos 10 caracteres";    
            if (!isset($_POST['precio']) || strlen($_POST['precio'])==0) 
                $errores['precio']="El precio no puede estar vacío.";

                if (empty($errores)){
                include ("models/productos.php");
                $pDAO=new ProductoDAO();
                if ($pDAO->insertProduct($_POST['nombre'], $_POST['descripcion'], $_POST['precio'], $_POST['procedencia']))
                    $this->getAllProducts(); 
                     
                else {
                    $errores['general']="Problemas al insertar";
                    View::show("addProduct", $errores);  
                }     
            }
            else  View::show("addProduct", $errores);               
        }

        else {
            View::show("addProduct", null);
        }
    }

    public function getProductById(){
        include_once 'models/productos.php';
        if (isset($_GET['id_product'])){
            $pDAO=new ProductoDAO();
            $producto=$pDAO-> getProductById($_GET['id_product']);
            View::show("productoporid",$producto);
        }
    }

    public function buscarProducto(){
        include_once 'models/productos.php';
        if (isset($_POST['nombre'])){
            $pDAO=new ProductoDAO();
            $producto=$pDAO-> buscarProducto($_POST['nombre']);
            View::show("productoporid",$producto);
        }
    }

    public function addCarrito(){
        if (isset($_GET['id_product'])){
            array_push($_SESSION['carrito'],$_GET['id_product']);  
            include_once 'models/productos.php';    
            $pDAO=new ProductoDAO();
            $products=$pDAO->getAllProducts();
            $pDAO=null;
            View::show("showProducts", $products);
        }
    }

    public function removeCarrito(){
        if (isset($_GET['id_product'])){
            echo $_GET['id_product'];
            echo $_SESSION['carrito'][$_GET['id_product']];

            if (($clave = array_search($_GET['id_product'], $_SESSION['carrito'])) !== false) {
                unset($_SESSION['carrito'][$clave]);
            }

            var_dump($_SESSION['carrito']);
            include_once 'models/productos.php';
            $pDAO=new ProductoDAO();
            $products=$pDAO->getAllProducts();
            $pDAO=null;
            View::show("showProducts", $products);
        }
    }

    public function verCarrito(){
        include_once 'models/productos.php';
        $pDAO=new ProductoDAO();
        $arrayCarrito= array();
        foreach($_SESSION['carrito'] as $posicion => $id){
            $producto=$pDAO-> getProductById($id);
            array_push($arrayCarrito,$producto);
        }
        View::show("mostrarcarrito", $arrayCarrito);
    }

    public function borrarproducto(){
        include_once 'models/productos.php';
        if (isset($_GET['id_product'])){
            $pDAO=new ProductoDAO();
            $products=$pDAO->borrarprod($_GET['id_product']);
            $products=$pDAO->getAllProducts();
            $pDAO=null;
            View::show("showProducts", $products);
        }
    }
}
?>