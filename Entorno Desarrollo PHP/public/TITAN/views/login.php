<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Inicio de sesion</title>
    <style>
        body{
        background-image: url("../assets/fondo.jpg");
        background-size: cover;
        background-position: center center;
        background-repeat: no-repeat;
        background-attachment: fixed;
        }
        form {
        margin: 20px auto;
        width: 300px;
        background-color: #f2f2f2;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0px 0px 30px black;
        }
        #formulario{
        margin-top: 10%;
        }
        h2 {
        text-align: center;
        }
        label {
        display: block;
        margin-bottom: 10px;
        }
        #invitado{
        color: black;
        }
        #invitado:hover{
        color: orangered;
        }
        input[type="text"],
        input[type="password"] {
        width: 100%;
        padding: 5px;
        margin-bottom: 20px;
        border-radius: 5px;
        border: none;
        box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1);
        }
        input[type="submit"] {
        background-color: black;
        color: white;
        padding: 10px 15px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        }
        input[type="submit"]:hover {
        background-color: orangered;
        }
    </style>

  </head>
  <body>
    <div id="formulario">

      <form action="index.php?controller=ControllerUsu&action=validacioniniciosesion" method='POST'>
        <h2>Inicio de Sesión</h2>
        <label for="usuario">Nombre de usuario:</label>
        <input type="text" id="usuario" name="usuario">
        <?php

          if(isset($data) && isset($data['usuario'])){
            echo "<div class='alert alert-danger'>".$data['usuario']."</div>";
          }
        ?>
        <label for="constrasena" style="margin-top: 6%;">Contraseña:</label>
        <input type="password" id="contrasena" name="contrasena">
        <?php

          if(isset($data) && isset($data['contrasena'])){
            echo "<div class='alert alert-danger'>".$data['contrasena']."</div>";
          }

          if(isset($data) && isset($data['general'])){
            echo "<div class='alert alert-danger'>".$data['general']."</div>";
          }

        ?>

        <div style="text-align: center;">
        <input type="submit" value="Iniciar Sesion" name="iniciarsesion"><br><br>
        </div>
        
      </form>
    </div>
  </body>
</html>
