<?php
require('db/db.php');
class ProductoDAO {
    public $db_con;
    public function __construct (){
        $this->db_con=Database::connect();
    }
    public function getAllProducts(){
        $stmt= $this->db_con->prepare("SELECT * FROM producto");
        $stmt->setFetchMode(PDO::FETCH_ASSOC);

        $stmt->execute();

        return $stmt->fetchAll();
    }

    public function getProductByID ($id){
        $stmt= $this->db_con->prepare("SELECT * FROM productos WHERE id_producto=1");

        $stmt->setFetchMode(PDO::FETCH_ASSOC);

        $stmt->execute();

        return $stmt->fetch();
    }
    public function insertProducts($nombre, $precio, $descripcion, $procedencia){
        // Prepare
        $stmt = $this->db_con->prepare("INSERT INTO Producto (nombre, precio, descripcion, procedencia) VALUES (:nombre, :precio, :descripcion, :procedencia)");
        // Bind
        $stmt->bindParam(':nombre', $nombre);
        $stmt->bindParam(':precio', $precio);
        $stmt->bindParam(':descripcion', $descripcion);
        $stmt->bindParam(':procedencia', $procedencia);
        // Excecute
        try{
            return $stmt->execute();
        } catch (PDOException $e){
            echo $e->getMessage();
        }
    
        }
}
?>