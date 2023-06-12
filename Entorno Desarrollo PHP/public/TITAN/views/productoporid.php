<div class="container">
    <h1> Informacion detallada del producto </h1>

    <table class="table">
        <tr><th>Nombre</th><th>Precio:</th><th>Descripcion</th><th>Procedencia</th><th>Comprar:</th><th>Foto:</th></tr>
        <?php
                $enlaceid='<a href="index.php?controller=ProductController&action=addCarrito&id_product='.$data['id_producto'].'" style="color:orange;">Añadir al carrito</a>';
                echo "<tr>
                      <td hidden>".$data['id_producto']."</td>
                      <td>".$data['nombre']."</td>
                      <td>".$data['precio']." € </td>
                      <td>".$data['descripcion']."</td>
                      <td>";if(($data['procedencia'])==0){
                        echo "Nacional";
                      }else{
                        echo"Internacional";
                      }
                      echo "</td>
                      <td>".$enlaceid."</td>
                      <td><img src='assets/".$data['foto']."' width='450' height='225'></td>
                      </tr>"; 
        ?>
    </table>
</div>
