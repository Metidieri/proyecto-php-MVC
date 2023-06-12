<!DOCTYPE html>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=devide-width, initial-scale=1">
    <title> TITAN </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
<div class="container">
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
      <a href="index.php" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
        <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
        <span class="fs-4"><img src="assets/logo.png" style="height: 75px; width: 100px"></img></span>
      </a>

      <ul class="nav nav-pills">
          <form class="form" action="index.php?controller=ProductController&action=buscarProducto" method="post">
            <input type="text" name="nombre" placeholder="Buscar..." required>
            <button type="submit">Buscar</button>
          </form>
        <?php
        if(!empty($_SESSION['usuario'])){
          if ($_SESSION['usuario'] != "admin"){
            echo '<li class="nav-item"><a href="index.php?controller=ProductController&action=getAllProducts" class="nav-link" style="color: black">Listar Productos</a></li>
            <li class="nav-item"><a href="index.php?controller=PedidosController&action=getAllPedidosUsu" class="nav-link" style="color: black">Listar tus pedidos</a></li> 
            <li class="nav-item"><a href="index.php?controller=ControllerUsu&action=cerrarsesion" class="nav-link active" aria-current="page" style="background-color: black;">Cerrar Sesion</a></li> 
            <li class="nav-item"><a href="index.php?controller=ProductController&action=verCarrito" class="nav-link"><img src="assets/carrito.jpg" style="width: 30px;height:30px;"></a></li>';
        } else {
          echo '<li class="nav-item"><a href="index.php?controller=ProductController&action=getAllProducts" class="nav-link" style="color: black">Listar Productos</a></li>
          <li class="nav-item"><a href="index.php?controller=PedidosController&action=getAllPedidos" class="nav-link" style="color: black">Listar todos los pedidos</a></li> 
          <li class="nav-item"><a href="index.php?controller=ProductController&action=aniadirProduct" class="nav-link" style="color: black;">Añadir Producto</a></li>
          <li class="nav-item"><a href="index.php?controller=ControllerUsu&action=cerrarsesion" class="nav-link active" aria-current="page" style="background-color: black;">Cerrar Sesion</a></li> 
          <li class="nav-item"><a href="index.php?controller=ProductController&action=verCarrito" class="nav-link"><img src="assets/carrito.jpg" style="width: 30px;height:30px;"></a></li>';
        }
        }else{
          echo  '<li class="nav-item"><a href="index.php?controller=ProductController&action=getAllProducts" class="nav-link" style="color: black">Listar Productos</a></li>
          <li class="nav-item"><a href="index.php?controller=ControllerUsu&action=showiniciosesion" class="nav-link active" aria-current="page" style="background-color: darkgrey;">Iniciar Sesion</a></li>
          <li class="nav-item"><a href="index.php?controller=ControllerUsu&action=showregister" class="nav-link active" aria-current="page" style="background-color: grey;">Registarse</a></li> 
          <li class="nav-item"><a href="index.php?controller=ProductController&action=verCarrito" class="nav-link"><img src="assets/carrito.jpg" style="width: 30px;height:30px;"></a></li>';
        }
       ?>
      </ul>
    </header>
  </div>