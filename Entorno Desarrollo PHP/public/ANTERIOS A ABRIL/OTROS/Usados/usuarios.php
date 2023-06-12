<?php
class Usuario{
    public $nombre;
    public $email;
    public $contraseña;
    public $educacion;
    public $nacionalidad;
    public $idioma;
    public $web;

    public function __construct($nombre,$email,$contraseña,$educacion,$nacionalidad,$idioma,$web);
    {
        $this->nombre=$nombre;
        $this->email=$email;
        $this->contraseña=$contraseña;
        $this->educacion=$educacion;
        $this->nacionalidad=$nacionalidad;
        $this->idioma=$idioma;
        $this->web=$web;
    }
}
?>