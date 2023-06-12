<?php
include_once ('db/db.php');

class PedidoDAO {

    public $db_con;

    public function __construct (){
        $this->db_con=Database::connect();
    }

    public function getAllPedidos(){
        $stmt= $this->db_con->prepare("Select usuarios.nick, pedido.* from Pedido inner join Usuarios on pedido.usu=usuarios.id_usuario");
        $stmt->setFetchMode(PDO::FETCH_ASSOC);

        $stmt->execute();
        $productos= array ();

        return $stmt->fetchAll();
    }

    public function getAllPedidosUsu($id_usuario){
        $stmt= $this->db_con->prepare("Select usuarios.nick, pedido.* from Pedido inner join Usuarios on pedido.usu=usuarios.id_usuario where pedido.usu=:id_usuario");
        $stmt->setFetchMode(PDO::FETCH_ASSOC);

        $stmt->bindParam(':id_usuario', $id_usuario);
        $stmt->execute();
        $productos= array();

        return $stmt->fetchAll();
    }

    public function getPedidoById($id){
        $stmt= $this->db_con->prepare("Select ProdPedido.cantidad,Producto.nombre, pedido.* from Pedido inner join ProdPedido on ProdPedido.id_pedido=pedido.id_pedido inner join producto on producto.id_producto=prodpedido.id_producto where pedido.id_pedido=$id");
        
        $stmt->setFetchMode(PDO::FETCH_ASSOC);

        $stmt->execute();

        return $stmt->fetchAll();        
    }

    function obtenerHoraActual() {
        date_default_timezone_set('Europe/Madrid');
        $fecha = date('Y-m-d');
        return $fecha;
    }

    public function insertPedido($usu){

        $stmt= $this->db_con->prepare ("Insert into Pedido (fecha, usu) values (:fecha, :usu)");      
        $fecha=$this->obtenerHoraActual();

        $stmt->bindParam(':fecha', $fecha);
        $stmt->bindParam(':usu', $usu);

        try{
            $stmt->execute();
        } catch (PDOException $e){
            echo $e->getMessage();
        }

        $lastid= $this->db_con->lastInsertId();
        return $lastid; 
    }

    public function guardarProdPedido($id_producto, $lastid){

        foreach ($_SESSION['carrito'] as $id_producto){
            $stmt= $this->db_con->prepare ("Insert into ProdPedido (id_producto, id_pedido) values (:prod, :pedi)");
            $stmt->bindParam(':prod', $id_producto);
            $stmt->bindParam(':pedi', $lastid);
        }
            try{
                $stmt->execute();
            } catch (PDOException $e){
                echo "ERROR AL REALIZAR EL PEDIDO";
            }
    }

    public function borrarpedi($id){
        $stmt= $this->db_con->prepare ("Delete from ProdPedido where id_pedido=$id");
        $stmt->execute();
        $stmt= $this->db_con->prepare ("Delete from Pedido where id_pedido=$id");
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute();
        return $stmt->fetch();       
    }
}
?>