<?php

date_default_timezone_set("America/Sao_Paulo");
//Array do dia da semana
$semana = array(
    "Domingo",
    "segunda Feira",
    "Terça Feira",
    "Quarta Feira",
    "Quinta Feira",
    "Sexta Feira",
    "Sabado"
    );

    $meses = array("", "Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho",
    "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro");

 $dia_da_semana = Date("w");
$dia = Date("d");
 $mes = Date("n");
 $ano = Date("Y");
  echo "Bom dia! Hoje é " . $semana[$dia_da_semana] . ", "
 . $dia . " de " . $meses[$mes] . " de " . $ano . ".";
 echo "<br>";
 

 echo "<br> DATA EM INGLÊS: <br>";
 echo "<br>";
echo" Good Morning! Today is " . date('D') . ", "
. date ('d ') . " of" . date ('M') . " of " . date('Y') .  " .";

    

