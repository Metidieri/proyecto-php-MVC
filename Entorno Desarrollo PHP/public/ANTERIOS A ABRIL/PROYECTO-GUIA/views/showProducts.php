<!--
    Vista que muestra los datos en forma de tabla. 
    Recibe los datos a mostrar a través del parámetro $data (utilizado en la función View::show).
-->
<div class="container">
    <h1> Nuestros productos </h1>
    <table class="table">
        <tr><th>Nombre</th> <th>Foto</th> <th>Visitar producto</th></tr>
        <?php
            foreach ($data as $article){
                echo "<tr>";
                echo "<td>".$article['nombre']."</td>";
                echo "<td><img src='assets/".$article['foto']."' width='150' height='75'></td>";
                echo "<td><a href='index.php?controller=ProductController&action=getProductById&idproducto=".$article['id_producto']."'>Ver más</a></td>";
                echo "</tr>";       
            }
        ?>
    </table>
</div>