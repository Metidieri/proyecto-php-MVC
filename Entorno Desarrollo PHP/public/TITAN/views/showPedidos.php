<div class="container">
    <h1 style="text-align: center;"> Listado de pedidos </h1><br><br>
    <table class="table">
        <tr><th>Fecha</th> <th>ID Usuario</th> <th>Detalles</th> <th>Borrar</th></tr>
        <?php
            foreach ($data as $article){
                $enlace='<a href="index.php?controller=PedidosController&action=getPedidoById&id_pedido='.$article['id_pedido'].'" style="color: orange;">Ver mas... </a>';
                $enlaceborrar='<a href="index.php?controller=PedidosController&action=borrarpedido&id_pedido='.$article['id_pedido'].'" style="color: orange;">Borrar pedido</a>';
                echo "<tr>
                      <td hidden>".$article['id_pedido']."</td>
                      <td>".$article['fecha']."</td>
                      <td>".$article['nick']."</td>
                      <td>".$enlace."</td>
                      <td>";if(!empty($_SESSION['usuario'])){
                        echo $enlaceborrar;
                      }
                      echo"</td>
                      </tr>"; 
            }
            
        ?>
    </table>
</div>
