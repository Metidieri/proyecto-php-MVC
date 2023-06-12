<?php
class ControllerUsu{
   
    public function showiniciosesion(){
        View::show("login");
    }

    public function showregister(){
        View::show("register");
    }

    public function validacioniniciosesion(){
        $errores=array();
        if(isset($_POST['iniciarsesion'])){
            if(!isset($_POST['usuario'])||strlen($_POST['usuario'])==0){
                $errores['usuario']="El nombre debe estar relleno";
            }
            if(!isset($_POST['contrasena'])||strlen($_POST['contrasena'])==0){
                $errores['contrasena']="La contrasena no puede estar vacia";
            }
            if(empty($errores)){
                include_once('models/usuarios.php');
                include_once('models/productos.php');
                $uDAO=new UsuarioDAO();
                $id_usuario=$uDAO->getAllUsers($_POST['usuario'],$_POST['contrasena']);
                if($id_usuario < 0){
                    $errores['general']="El usuario no esta registrado.";
                    View::show("login",$errores);
                }else{
                    $pDAO=new ProductoDAO();
                    $products=$pDAO->getAllProducts();
                    $pDAO=null;
                    $_SESSION['usuario']=$_POST['usuario'];
                    $_SESSION['id_usuario']=$id_usuario;
                    header('Location: index.php');
                }
            }else{
                View::show("login",$errores);
            }
        }
    }

    public function cerrarsesion(){
        session_destroy();
        header('Location: index.php');
    }

    public function aniadirUsuario(){
        $errores=array();
        
        if (isset($_POST['registrar'])){
            if (!isset($_POST['nick']) || strlen($_POST['nick'])==0) 
                $errores['nick']="El nick no puede estar vacío.";
            if (!isset($_POST['contra']) || strlen($_POST['contra'])<3) 
                $errores['contra']="La contra debe tener al menos 3 caracteres";    

                if (empty($errores)){
                include ("models/usuarios.php");
                $pDAO=new UsuarioDAO();
                if ($pDAO->insertUsuario($_POST['nick'], $_POST['contra'])){
                    $_SESSION['usuario']=$_POST['nick'];
                    header('Location: index.php');
                } else {
                    $errores['general']="Problemas al insertar";
                    View::show("register", $errores);  
                }     
            }
            else  View::show("register", $errores);               
        }

        else {
            View::show("register", null);
        }
    }
}
?>