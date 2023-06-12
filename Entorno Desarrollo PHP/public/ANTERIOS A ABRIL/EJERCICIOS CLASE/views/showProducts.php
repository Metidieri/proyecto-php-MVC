<div class="container">
    <h1>Listado de productos</h1>
    <table class="table">
        <tr><th>Nombre</th> <th>Descripcion</th></tr>
        <?php
            foreach ($data as $article){
                echo "<tr>
                    <td>".$article['nombre']."</td>
                    <td>".$article['descripcion']."</td>
                    </tr>";
            }
        ?>
    </table>
</div>