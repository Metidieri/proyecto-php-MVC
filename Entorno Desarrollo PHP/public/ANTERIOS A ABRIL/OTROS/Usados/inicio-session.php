<?php
require('usuarios.php');
session_start();
if (isset ($_POST['EnviarDatos'])){
    $_SESSION['nombre'] = $_POST['nombre'];
}

   $_SESSION['usuarios']=array();
    $_SESSION['nuevousuario']='pepe';
    $usu=new Usuario($nobre,$contraseña);
    array_push($_SESSION['usuarios'],$usu);
?>
<html>
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
    echo "<a href='pagina2.php'> Enlace pagina 2 </a>";
</form>
</html>