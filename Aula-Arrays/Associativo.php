<?php

//array associativo

$produtos = array(
    "EL1241" => "Celular Sansung M23", 
    "COZ0345" => "COOKTOP DE INDUÇÃO - 110",
    "MO5423" => "sofa 3 lugares cinza",
    "PAN7845" => "Jogo de panelas tramontina");

    $produtos = array($produtos, $produto);
    $produtos = array($produto);
    
    eco $produtos['EL1241'];



    echo "<br><br> DATA COMPLETA COM ASSOCIATIVO";
    echo "<br>";

    
    
    $semana = array(
        'sun' => 'Domingo',
        'Mon' => 'Segunda Feira',
        'Tue' => 'Terça Feira',
        'Wed' => 'Quarta Feira',
        'thu' => 'Quinta Feira',
        'Fri' => 'Sexta Feira',
        'Sat'=> 'Sabado'
    );
    $s = date('D');
    $s = date('d');
    $s = date('Y');
    $s = date('M');

    echo "Bom dia!";
    echo "<br>";
    echo " Hoje é ";
    echo $semana[$s];
    echo " " ; $semana . " de ";
    

    

