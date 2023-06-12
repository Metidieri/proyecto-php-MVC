<div class="container">
    <h1 style="text-align: center;"> Listado de productos </h1><br><br>
    <table class="table">
        <tr><th>Nombre</th> <th>Precio:</th> <th>Foto:</th> <th>Detalles:</th> <th>Comprar:</th></tr>
        <?php
            foreach ($data as $article){
                $enlace='<a href="index.php?controller=ProductController&action=getProductById&id_product='.$article['id_producto'].'" style="color: orange;">Ver mas... </a>';
                $enlaceid='<a href="index.php?controller=ProductController&action=addCarrito&id_product='.$article['id_producto'].'" style="color: orange;">Añadir al carrito</a>';
                $enlaceborrar='<a href="index.php?controller=ProductController&action=borrarproducto&id_product='.$article['id_producto'].'" style="color: orange;">Borrar producto</a>';
                echo "<tr>
                      <td hidden>".$article['id_producto']."</td>
                      <td>".$article['nombre']."</td>
                      <td>".$article['precio']." € </td>
                      <td><img src='assets/".$article['foto']."' width='150' height='75'></td>
                      <td>".$enlace."</td>
                      <td>".$enlaceid."</td>
                      <td>";
                      if(!empty($_SESSION['usuario'])){
                        if($_SESSION['usuario'] == "admin"){
                            echo $enlaceborrar;
                        }
                      }
                      echo"</td>
                      </tr>"; 
            }
  
        ?>
    </table>
</div>
