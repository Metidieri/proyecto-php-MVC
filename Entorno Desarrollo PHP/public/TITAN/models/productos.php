<?php
include_once ('db/db.php');

class ProductoDAO {

    public $db_con;

    public function __construct (){
        $this->db_con=Database::connect();
    }

    public function getAllProducts(){
        $stmt= $this->db_con->prepare("Select * from Producto");
        $stmt->setFetchMode(PDO::FETCH_ASSOC);

        $stmt->execute();
        $productos= array ();

        return $stmt->fetchAll();
    }

    public function getProductById ($id){
        $stmt= $this->db_con->prepare("Select * from Producto where id_producto=$id");
        
        $stmt->setFetchMode(PDO::FETCH_ASSOC);

        $stmt->execute();

        return $stmt->fetch();        
    }

    public function buscarProducto($nombre){
        $stmt= $this->db_con->prepare("Select * from Producto where Producto.nombre like '%$nombre%'");
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute();
        return $stmt->fetch();        
    }

    public function insertProduct($nombre, $descrip, $precio, $proc){
        $stmt= $this->db_con->prepare ("Insert into Producto (nombre, descripcion, precio, procedencia) values (:nombre, :descripcion, :precio, :procedencia)");      
        
        $stmt->bindParam(':nombre', $nombre);
        $stmt->bindParam(':descripcion', $descrip);
        $stmt->bindParam(':precio', $precio);
        $stmt->bindParam(':procedencia', $proc);

        try{
            return $stmt->execute();
        } catch (PDOException $e){
            echo $e->getMessage();
        }
        
    }

    public function borrarprod($id){
        $stmt= $this->db_con->prepare ("Delete from Producto where id_producto=$id");
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute();
        return $stmt->fetch();       
    }

}
?>