<!--
    Vista que muestra los datos en forma de tabla. 
    Recibe los datos a mostrar a través del parámetro $data (utilizado en la función View::show).
-->
<div class="container">
    <h1> Listado de usuarios </h1>

    <table class="table">
        <tr><th>Nick</th> <th>Contraseña</th></tr>
        <?php
            foreach ($data as $article){
                echo "<tr>
                      <td>".$article['nick']."</td>
                      <td>".$article['password']."</td>
                      </tr>"; 
            }
        ?>
    </table>
</div>