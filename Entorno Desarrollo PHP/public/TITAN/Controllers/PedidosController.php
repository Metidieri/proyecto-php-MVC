<?php

class PedidosController {

    public function getAllPedidos(){
        require_once ("models/pedidos.php");
        $pDAO=new PedidoDAO();
        $pedido=$pDAO->getAllPedidos();
        $pDAO=null;
        View::show("showPedidos", $pedido);
    }

    public function getAllPedidosUsu(){
        require_once ("models/pedidos.php");
        $pDAO=new PedidoDAO();
        $pedido=$pDAO->getAllPedidosUsu($_SESSION['id_usuario']);
        $pDAO=null;
        View::show("showPedidos", $pedido);
    }

    public function aniadirPedido(){
        $errores=array();
        
        if (!isset($_SESSION['id_usuario'])){
            View::show("login", $errores);
        } else {
            if ($_SESSION['id_usuario'] == "admin") {
                $errores['carrito']="El administrador no puede crear pedidos";
            } else {
                if (empty($_SESSION['carrito'])) 
                $errores['carrito']="El carrito no puede estar vacío.";   

                if (empty($errores)){
                include ("models/pedidos.php");
                $pDAO=new PedidoDAO();
                }

                $lastid=$pDAO->insertPedido($_SESSION['id_usuario']);
                if ($lastid){
                    $pDAO->guardarProdPedido($_SESSION['carrito'], $lastid);
                    header('Location: index.php?controller=PedidosController&action=getAllPedidosUsu');
                } else {
                    $errores['general']="Problemas al insertar";
                    View::show("mostarcarrito", $errores);  
                } 
            }
        }
    }

    public function getPedidoById(){
        include_once ('models/pedidos.php');
        if (isset($_GET['id_pedido'])){
            $pDAO=new PedidoDAO();
            $pedido=$pDAO-> getPedidoById($_GET['id_pedido']);
            View::show("pedidoporid",$pedido);
        }
    }

    public function borrarpedido(){
        include_once 'models/pedidos.php';
        if (isset($_GET['id_pedido'])){
            $pDAO=new PedidoDAO();
            $pedidos=$pDAO->borrarpedi($_GET['id_pedido']);
            $pedidos=$pDAO->getAllPedidosUsu($_SESSION['id_usuario']);
            $pDAO=null;
            View::show("showPedidos", $pedidos);
        }
    }
}
?>