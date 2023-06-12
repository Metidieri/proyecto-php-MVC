<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <div class="container">
    <h2 style="text-align: center"> Carrito de la compra </h2><br><br>
      <?php
      if(!empty($_SESSION['carrito'])){
        echo " <table class='table'> <tr><th>Nombre</th> <th>Precio:</th><th>Descripcion</th><th>Procedencia</th><th>Borrar</th></tr>";
        foreach ($data as $producto){
                    $enlaceid='<a href="index.php?controller=ProductController&action=removeCarrito&id_product='.$producto['id_producto'].'" style="color:orange;">Borrar del carrito</a>';
                      $fila="<tr>
                      <td hidden>".$producto['id_producto']."</td>
                      <td>".$producto['nombre']."</td>
                      <td>".$producto['precio']." € </td>
                      <td>".$producto['descripcion']."</td>
                      <td>";
                      if(($producto['procedencia'])==0){
                        $fila=$fila."Nacional";
                      }else{
                        $fila=$fila."Internacional</td>";
                      }
                      $fila=$fila."<td>".$enlaceid."</td></tr>";
                      echo $fila; 
        }
        echo "</table>";
      }else{
        echo "<div class='alert alert-danger'><p style='text-align: center;'>El carrito de la compra esta vacio</p></div>";
      }
      ?>
      <p style='text-align: right;'><a class="btn btn" href="index.php?controller=PedidosController&action=aniadirPedido" class="nav-link active" aria-current="page" style="background-color: darkgrey;">Realizar pedido</a> 
  </form>
</div>