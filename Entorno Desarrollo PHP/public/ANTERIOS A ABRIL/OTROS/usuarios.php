<?php
class Usuario {
    public $nombre;
    public $contraseña;

    public function __construct($nombre,$contraseña)
    {
        $this->nombre=$nombre;
        $this->contraseña=$contraseña;
    }
}
?>