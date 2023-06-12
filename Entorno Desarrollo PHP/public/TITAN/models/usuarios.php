<?php
require_once 'db/db.php';

class UsuarioDAO{
    public $db_con;
    public function __construct(){
        $this->db_con=Database::connect();
    }
    public function getAllUsers($usuario,$contrasena){
        $stmt=$this->db_con->prepare("select id_usuario from Usuarios where nick='$usuario' and contra='$contrasena'");
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute();
        $id=$stmt->fetchAll();
        if (empty($id)){
            return -1;
        } else
            return $id[0]['id_usuario'];
    }

    public function insertUsuario($nick, $contra){
        $stmt= $this->db_con->prepare ("Insert into Usuarios (nick, contra) values (:nick, :contra)");      
        
        $stmt->bindParam(':nick', $nick);
        $stmt->bindParam(':contra', $contra);

        try{
            return $stmt->execute();
        } catch (PDOException $e){
            echo $e->getMessage();
        }
        
    }
}

?>