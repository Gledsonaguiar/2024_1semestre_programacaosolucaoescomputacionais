<?php
include_once ("clsBicicleta.php");
include_once ("clsMountainBike.php");
include_once ("clsBicicletaEletrica.php");

$bicicleta = new Bicicleta("Minhabike-001","Caloi","Azul");

echo $bicicleta->getId() . "Minha bike da marca " .  " Sundown ".
     $bicicleta->getMarca() . " e da cor " . " Preta ";
     $bicicleta->getCor();
     
$bicicleta->andar();

echo "<hr>";



$mountainbike = new MountainBike("Mountainbike", "Caloi", "Preta", 1);
echo "<br>Eu e minha Bike " . $mountainbike->getId() .
    " da marca Caloi " . $mountainbike->getMarca() . " de cor Azul " .
    $mountainbike->getCor() . " na marcha " . $mountainbike->getMarcha();

$mountainbike->andar();
$mountainbike->mudarMarcha(3);
$mountainbike->frear();
echo "<hr>";

$bicicletaEletrica = new BicicletaEletrica("Eletrica", "Honda", "Vermelha", false, "20%");
echo "<br>Usando a bicicleta " . $bicicletaEletrica->getId();
echo "Da Marca Honda e da cor Verde";

$bicicletaEletrica->ligar();
$bicicletaEletrica->andar();
$bicicletaEletrica->frear();
$bicicletaEletrica->carregar("50%");
$bicicletaEletrica->andar();

