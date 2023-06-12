<?php
// Prepare
$stmt = $dbh->prepare("INSERT INTO Clientes (nombre, ciudad) VALUES (?, ?)");
// Bind
$nombre = "Peter";
$ciudad = "Madrid";
$stmt->bindParam(1, $nombre);
$stmt->bindParam(2, $ciudad);
// Excecute
$stmt->execute();
// Bind
$nombre = "Martha";
$ciudad = "Cáceres";
$stmt->bindParam(1, $nombre);
$stmt->bindParam(2, $ciudad);
// Execute
$stmt->execute();
// Prepare
$stmt = $dbh->prepare("INSERT INTO Clientes (nombre, ciudad) VALUES (:nombre, :ciudad)");
// Bind
$nombre = "Charles";
$ciudad = "Valladolid";
$stmt->bindParam(':nombre', $nombre);
$stmt->bindParam(':ciudad', $ciudad);
// Excecute
$stmt->execute();
// Bind
$nombre = "Anne";
$ciudad = "Lugo";
$stmt->bindParam(':nombre', $nombre);
$stmt->bindParam(':ciudad', $ciudad);
// Execute
$stmt->execute();



// Prepare:
$stmt = $dbh->prepare("INSERT INTO Clientes (nombre, ciudad) VALUES (:nombre, :ciudad)");
$nombre = "Luis";
$ciudad = "Barcelona";
// Bind y execute:
if($stmt->execute(array(':nombre'=>$nombre, ':ciudad'=>$ciudad))) {
    echo "Se ha creado el nuevo registro!";
}

// clase
class Clientes
{
    public $nombre;
    public $ciudad;
    public function __construct($nombre, $ciudad){
        $this->nombre = $nombre;
        $this->ciudad = $ciudad;
    }
    // ....Código de la clase....
}
$cliente = new Clientes("Jennifer", "Málaga");
$stmt = $dbh->prepare("INSERT INTO Clientes (nombre, ciudad) VALUES (:nombre, :ciudad)");
if($stmt->execute((array) $cliente)){
    echo "Se ha creado un nuevo registro!";
};
?>