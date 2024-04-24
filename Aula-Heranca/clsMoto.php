<?php

include_once ("clsVeículo.php");

class Moto extends Veículo
{
    public $cilindradas, $partidaEletrica;

    public function __construct($marcaMoto, $modeloMoto, $cilindradas, $pE)
    {
        parent::__construct($marcaMoto, $modeloMoto);
        $this->cilindradas = $cilindradas;
        $this->partidaEletrica = $pE;


    }



    public function ligar()
    {
        parent::ligar();
        echo "<br>Moto Ligado";


    }

}