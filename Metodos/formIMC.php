<?php
//Receber as variaveis pelo post
$peso = $_POST['peso'];
$altura = $_POST['altura'];

//declarar o metodo
function calculoIMC($peso, $altura){
    $imc = $peso / ($altura * $altura);
    echo "O seu IMC é $imc";
}


function resultado($imc){
    if($imc >= 25){
    echo "Acima do peso.";
    }else{

    echo calculoIMC($imc);
}
}