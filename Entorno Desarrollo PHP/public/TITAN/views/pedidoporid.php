<div class="container">
    <h1> Informacion detallada del pedido </h1>
    <table class="table">
    <tr>
      <th>ID Pedido</th><th>Fecha:</th>
      <?php
        echo "<tr>";
        echo "<td>" .$data[0]['id_pedido']."</td>
        <td>" .$data[0]['fecha']."</td>
        </tr>"; 
      ?>
    </tr>
    </tr>
    </table>
    <table class="table">
        <th>Productos:</th> <th>Cantidad:</th></tr>
        <?php
          echo "<tr>";
          foreach ($data as $article)
            echo "<td>".$article['nombre']."</td>
            <td>".$article['cantidad']."</td>
          </tr>";        
        ?>
    </table>
</div>
