<?php

include_once ("clsVeículo.php");

class Carro extends Veículo
{
    public $portas;

    public function __construct($marcaCarro, $modeloCarro, $portas)
    {
        parent::__construct($marcaCarro, $modeloCarro);
        $this->portas = $portas;

    }



    public function ligar()
    {
        parent::ligar();
        echo "<br>Carro Ligado";

    }

}