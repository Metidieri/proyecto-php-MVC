<?php
session_start();
//include_once ("views/header.php");
include_once ("Controllers/ProductsController.php");
include_once ("Controllers/UserControllers.php");
include_once ("Controllers/PedidosController.php");

if (isset($_REQUEST['action']) && isset($_REQUEST['controller']) ){
    $act=$_REQUEST['action'];
    $cont=$_REQUEST['controller'];

    $controller=new $cont();
    $controller->$act();
}
else {
  include_once ("views/header.php");
    echo '<div class="container mt-3">
    <h1 style="text-align:center;">TIENDA ONLINE TITAN</h1>
    <div class="d-flex justify-content-center"><img src="assets/fotoinicio.jpg" width="1100" height="600"></div> 
  </div>';
  require_once ("views/footer.php");
}
?>
