<?php
$nome = $POST["TXTnOME"];

if(strlen( $nome ) == 0 ){
    header("Location:../cidades.phph?nomeVazio");
}else{
    require_once('model/cidade.php');
    $novaCid = new Cidade();
    $novaCid->inserir["$nome"];
    

}