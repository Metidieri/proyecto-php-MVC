<?php
/**
 *  Controlador de Productos. Implementará todas las acciones que se puedan llevar a cabo desde las vistas
 * que afecten a productos de la tienda.
 */
include_once("views/view.php");
class UserController {

    public function comprobarUser(){
        $errores=array();

        if (isset($_POST['insertar'])){
        if (!isset($_POST['nick']) || strlen($_POST['nick'])==0) 
            $errores['nick']="El nombre no puede estar vacío.";   
        if (!isset($_POST['contra']) || strlen($_POST['contra'])==0) 
            $errores['contra']="El precio no puede estar vacío.";

            if (empty($errores)){
                include_once("models/usuario.php");
                $uDAO=new UsuarioDAO();
                if ($uDAO->comprobarUser($_POST['nick'], $_POST['contra']))
                    $this->comprobarUser();
                     
                else {
                    $errores['general']="Problemas al insertar";
                    View::show("addUser", $errores);  
                }  
            }           
        }
    }
    /**
     * Método que añade un producto a la BBDD recogiendo los datos que llegan a través de $_POST. Previo
     * a la inserción realiza la validación de los datos.
     */
    public function aniadirUser(){
        $errores=array();
        
        /* Si se ha pulsado en el botón insertar se validan los datos y en caso de error, éstos se almacenan
        en el array $errores*/
        if (isset($_POST['insertar'])){
            if (!isset($_POST['nick']) || strlen($_POST['nick'])==0) 
                $errores['nick']="El nick no puede estar vacío.";
            if (!isset($_POST['contra']) || strlen($_POST['contra'])<5) 
                $errores['contra']="La contraseña debe tener al menos 5 caracteres";    
            /**
             * Si el array está vacío es que no hay errores. Si instancia un ProductoDAO y se trata de insertar
             * el nuevo producto en la BBDD. 
             * Si se produce la inserción, se llama al método que muestra todos los productos de la tienda.
             * Si hay error, se muestra la vista de inserción pasándole el array de errores.
             */
                if (empty($errores)){
                include ("models/usuario.php");
                $uDAO=new UsuarioDAO();
                if ($uDAO->insertUser($_POST['nick'], $_POST['contra']))
                    $this->getAllUsers(); 
                     
                else {
                    $errores['general']="Problemas al insertar";
                    View::show("addUser", $errores);  
                }     
            }
            else  View::show("addUser", $errores);               
        }
        // Si no se pulsó el botón insertar, se muestra la vista con el formulario.
        else {
            View::show("addUser", null);
        }
    }
}
?>