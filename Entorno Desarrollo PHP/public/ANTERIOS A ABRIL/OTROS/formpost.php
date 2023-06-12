<?php
require('valform.php');
require('usuarios.php');
$nombre="";
if (isset ($_POST['EnviarDatos']))
{
    $nombre= limpiarCadena($_POST['nombre']);
    if (strlen($nombre) < 5)
        echo "El nombre debe tener al menos 5 caracteres";
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <h2>Formulario:</h2>
    <form action=" <?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <div class="mb-3 mt-3">
            <label for="nombre" class="form-label">Nombre:</label>
            <input type="nombre" class="form-control" id="nombre" placeholder="Enter nombre" name="nombre">
        </div>

        <div class="mb-3 mt-3">
            <label for="email" class="form-label">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
        </div>

        <div class="mb-3">
            <label for="pwd" class="form-label">Contraseña:</label>
            <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
        </div>

        <div class="form-check mb-3">
            <label class="form-check-label">Educacion:
            <select name="educacion">
                <option value="sin-estudios">Sin estudios</option>
                <option value="educacion-obligatoria" selected="selected">Educación Obligatoria</option>
                <option value="formacion-profesional">Formación profesional</option>
                <option value="universidad">Universidad</option>
            </select>
            </label>
        </div>

        <div class="form-check mb-3">
            <label class="form-check-label">Nacionalidad:
            <input type="radio" name="nacionalidad" value="hispana">Hispana</input>
            <input type="radio" name="nacionalidad" value="otra">Otra</input>
            </label>
        </div>

        <div class="form-check mb-3">
            <label class="form-check-label">Idiomas:
            <input type="checkbox" name="idiomas[]" value="español" checked="checked">Español</input>
            <input type="checkbox" name="idiomas[]" value="inglés">Inglés</input>
            <input type="checkbox" name="idiomas[]" value="francés">Francés</input>
            <input type="checkbox" name="idiomas[]" value="aleman">Alemén</input>
            </label>
        </div>

        <div class="mb-3">
            <label for="web" class="form-label">Web:</label>
            <input type="web" class="form-control" id="web" placeholder="Enter web" name="web">
        </div>

        <button type="submit" name="EnviarDatos" class="btn btn-primary">Submit</button>
        <?php
        if (isset ($_POST['EnviarDatos']))
                echo "Se ha pulsado el boton";
            else echo "No se ha pulsado el boton";
        ?>
    </form>
  </body>
</html>

