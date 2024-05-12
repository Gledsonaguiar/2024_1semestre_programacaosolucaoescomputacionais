<?php
//método que recebe parãmetro e tem ertorno

function somar( $x , $y){
    return $x + $y;


}
//método que NÃO recebe parãmetro e NAÃO tem ertorno
function imprimirMeuNome(){
    echo "Gledson Aguiar dos Santos <br>";

}

function getPI(){
    return 3.14;

}
//Método que recebe parâmetro e NÃO retorno

function imprimirareacirculo($raio){
    $area = getPI() *($raio * $raio);
    echo "<br>Area do circulo com raio $raio é: " .$area;
}

imprimirMeuNome();
if(isset($_GET["x"])){
    $v1 = $_GET["x"];
}else{


$v1 = 0;
}

if(isset($_GET["y"]))
$v2 = $_GET["y"];

else
$v2 = 0;

isset($_GET["r"]) ?  $Raio = $_GET["r"] : $Raio = 0;

$resultado = somar( $v1 , $v2 );
//$result = somar( 5,1 ; 10,0);

echo "<br>Resultado: " .$resultado;
echo "<hr> Valor do PI: " .getPI();
imprimirAreaCirculo( $Raio );
imprimirAreaCirculo( 10 );




