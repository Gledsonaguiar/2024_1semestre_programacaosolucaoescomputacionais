<?php
class Bicicleta
{
    private $id;
    private $marca;
    private $cor;

    public function __construct()
    {



    }
    //metodos getter e setter
    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getMarca()
    {
        return $this->marca;
    }

    public function setMarca($marca)
    {
        $this->marca = $marca;
    }

    public function getCor()
    {
        return $this->cor;
    }

    public function setCor($cor)
    {
        $this->cor = $cor;
    }


    public function andar()
    {
        echo "<br>Bicicleta Andando";
    }

    public function frear()
    {
        echo "<br>Bicicleta Parada";



    }

}