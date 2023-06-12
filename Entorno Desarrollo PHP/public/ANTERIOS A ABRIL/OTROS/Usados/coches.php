<?php

class Coche {
    public $color;
    public $potencia;
    public $marca;
    function VelocMax (){
        return $this->$potencia*1.5;
    }
}

?>