<div class="container"> 
   <h5 style="text-align: center;">Introduce los datos del pedido a crear:</h2>

    <form class="form" action="index.php?controller=PedidosController&action=aniadirPedido" method="post">
        <div class="form-group">
            <label class="form-label" for="nombre">ID Producto:</label>
            <input class="form-control" type="text" name="id"  maxlength="3" value="" ><br>
            <?php
                if (isset($data) && isset($data['id']))
                echo "<div class='alert alert-danger'>"
                       .$data['id'].
                      "</div>";
            ?>
        </div>

        <div class="form-group">
            <label class="form-label" for="nombre">Fecha:</label>
            <input class="form-control" type="date" name="fecha"  maxlength="10" value="" ><br>
            <?php
                if (isset($data) && isset($data['fecha']))
                echo "<div class='alert alert-danger'>"
                       .$data['fecha'].
                      "</div>";
            ?>
        </div>

        <div class="form-group">
            <label class="form-label" for="productos">Productos:</label>
            <input class="form-control" type="text" name="productos" ><br>
            <?php
                if (isset($data) && isset($data['preductos']))
                echo "<div class='alert alert-danger'>"
                       .$data['productos'].
                      "</div>";
            ?>
        </div>

        <div class="form-group">
            <input class="form-control" type="submit" name="insertar" value="Enviar" style="background-color: orange;width:20%; margin-left:40%; margin-right:40%">
        </div>
        
    </form>
    </div>
    