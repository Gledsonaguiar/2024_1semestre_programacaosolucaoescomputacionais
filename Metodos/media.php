<?php
//calculo da media
$nota1 = 7.8;
$nota2 = 8;
$nota3 = 6.7;
$nota4 = 9;

function media($a1, $a2, $a3, $a4){
$media  = ($a1 + $a2 + $a3 + $a4) / 4;

echo "Média final: $media";
}

function media2($a1, $a2, $a3, $a4){
    $notas = array($a1, $a2, $a3, $a4);
    $soma = array_sum($notas);
    $media = $soma / sizeof($notas);
    echo "Média final: $media";
}

//chamada do metodo
    media($nota1, $nota2, $nota3, $nota4);
