<?php
include_once ('db/db.php');
/**
 * Clase de acceso a datos para la tabla productos. IMplementa todos los métodos que necesiten atacar
 * la tabla productos de la base de datos.
 */
class UsuarioDAO {

    //Atributo con la conexión a la BBDD.
    public $db_con;

    //Constructor que inicializa la conexión a la BBDD.
    public function __construct (){
        $this->db_con=Database::connect();
    }

    //Método que devuelve toda la información de un producto dado su id.
    public function getUserById ($id){
        $stmt= $this->db_con->prepare("SELECT * FROM Usuarios WHERE id_usuario=$id");
        
        $stmt->setFetchMode(PDO::FETCH_ASSOC);

        $stmt->execute();

        return $stmt->fetch();        
    }

    public function comprobarUser($nick, $contra){
        $stmt=$this->db_con->prepare("SELECT $nick, $contra FROM Usuarios");

        $stmt->bindParam(':nick', $nick);
        $stmt->bindParam(':contra', $contra);

        try{
            return $stmt->execute();
        } catch (PDOException $e){
            echo $e->getMessage();
        }
    }
    //Instar un productos en la base de datos.
    /**
     * Parámetros: 
     *  $nombre, nombre del producto.
     *  $descrip, descripción del producto.
     * 
     *  Retorna true si la inserción fue exitosa y false en caso contrario.
     */
    public function insertUsuario($nick, $contra){
        $stmt= $this->db_con->prepare ("INSERT INTO Usuarios (nick, contra) values (:nick, :contra)");      
        
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