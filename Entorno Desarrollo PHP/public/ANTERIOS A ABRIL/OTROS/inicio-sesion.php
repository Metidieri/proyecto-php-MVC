<?php
require ('models/usuarios.php');
session_start();
$nombre='';
$contraseña='';
if (isset ($_POST['EnviarDatos'])){
    $_SESSION['nombre'] = $_POST['nombre'];
}
    $usu=new Usuario($nombre,$contraseña);
// Esto de aqui abajo nos da un vista mas gustosa del html
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
<form id="loginform" method='POST'>
    <div class="mb-3 mt-3">
        <label for="nombre" class="form-label">Nombre:</label>
        <input type="nombre" class="form-control" id="nombre" placeholder="Enter nombre" name="nombre">
    </div>
    <div class="mb-3">
        <label for="pwd" class="form-label">Contraseña:</label>
        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
    </div>
    <button type="submit" name="EnviarDatos" class="btn btn-primary">LOGIN</button>
</form>
</html>
<?php
    echo "<a href='Proyecto/views/tienda.php'> Enlace tienda </a>";
?>