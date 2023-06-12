<div class="container"> 
   <h5 style="text-align: center;">Introduce los datos del producto que quieres añadir:</h2>

    <form class="form" action="index.php?controller=ProductController&action=aniadirProduct" method="post">
        <div class="form-group">
            <label class="form-label" for="nombre">Nombre:</label>
            <input class="form-control" type="text" name="nombre"  maxlength="50" value="" ><br>
            <?php
                if (isset($data) && isset($data['nombre']))
                echo "<div class='alert alert-danger'>"
                       .$data['nombre'].
                      "</div>";
            ?>
        </div>
        <div class="form-group">
            <label class="form-label" for="descripcion">Descripción:</label>
            <input class="form-control" type="text" name="descripcion" ><br>
            <?php
                if (isset($data) && isset ($data['descripcion']))
                echo "<div class='alert alert-danger'>"
                       .$data['descripcion'].
                      "</div>";
            ?>
        </div>
        <div class="form-group">
            <label class="form-label" for="precio">Precio:</label>
            <input class="form-control" type="text" name="precio" ><br>
            <?php
                if (isset($data) && isset($data['precio']))
                echo "<div class='alert alert-danger'>"
                       .$data['precio'].
                      "</div>";
            ?>
        </div>

        <div class="form-group">
            <label class="form-label" for="procedencia">Procedencia:</label>
            <select name="procedencia">
                <option value="0" selected="selected">Nacional</option>
                <option value="1" >Internacional</option>
        </select>
        </div>
        <?php
                if (isset($data) && isset($data['general']))
                echo "<div class='alert alert-danger'>"
                       .$data['general'].
                      "</div>";
            ?>
        <div class="form-group">
            <input class="form-control" type="submit" name="insertar" value="Enviar" style="background-color: orange;width:20%; margin-left:40%; margin-right:40%">
        </div>
        
    </form>
    </div>
    