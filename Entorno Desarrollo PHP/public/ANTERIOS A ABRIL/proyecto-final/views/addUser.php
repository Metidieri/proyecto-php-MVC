<!--
    Vista para añadir nuevos productos. Contiene el código HTML con el formulario así como el código PHP para
    mostrar errores de validación, en caso de existir.
-->
<div class="container"> 
   <h5>Introduce los datos:</h2>

    <form class="form" action="index.php?controller=UserController&action=aniadirUser" method="post">

  <div class="form-group mb-4">
            <label class="form-label" for="nick">Nick:</label>
            <input class="form-control" id="nick" type="email"  maxlength="15" value="" ><br>
            <?php
                if (isset($data) && isset($data['nick']))
                echo "<div class='alert alert-danger'>"
                       .$data['nick'].
                      "</div>";
            ?>
        </div>

  <div class="form-group mb-4">
            <label class="form-label" for="password">Password:</label>
            <input class="form-control" id="password" type="password" ><br>
            <?php
                if (isset($data) && isset ($data['password']))
                echo "<div class='alert alert-danger'>"
                       .$data['password'].
                      "</div>";
            ?>
        </div>

  <div class="row mb-4">
    <div class="col d-flex justify-content-center">
    </div>

  <?php
                if (isset($data) && isset($data['general']))
                echo "<div class='alert alert-danger'>"
                       .$data['general'].
                      "</div>";
            ?>
    <div class="form-group">
            <input class="form-control" type="submit" name="insertar" value="Iniciar Sesion">
    </div>
</form>
</div>