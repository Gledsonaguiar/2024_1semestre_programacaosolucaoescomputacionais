<?php

class Veículo
{
    public $id, $marca, $modelo;
    public $velocidade;

    public function __construct($marca, $model)
    {
        $this->id = null;
        $this->marca = $marca;
        $this->modelo = $model;
        $this->velocidade = 0;
    }

    public function ligar()
    {
        echo "Veículo ligado!";
        echo "<br>Modelo: " . $this->modelo;
    }

    public function acelerar($velocidade)
    {
        if ($velocidade > 0) {
            $this->velocidade += $velocidade;
            // $this -> velocidade = this -> velocidade + $velocidade;
        }
        return $this->velocidade;
    }
    public function frear($velocidade)
    {
        if ($velocidade > 0) {
            if ($velocidade <= $this->velocidade) {
                $this->velocidade -= $velocidade;
            } else {
                $this->$velocidade = 0;
            }
        }

        return $this->velocidade;

    }
}