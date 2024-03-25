<?php
//Trabalhando com arrays(lista)
$numeros = array(1, 2, 3, 4, 5, 6, 7, 8, 9);

$num = [1, 2, 3, 4, 5, 6, 7, 8, 9];

$semana = array("segunda", "terça", "quarta", "quinta", "sexta", "sabado", "domingo");

echo $semana[0];
echo"<br>";
//funcoes embutidas
echo count($numeros);
echo "<br>";
echo sizeof($semana);

//Data
date_default_timezone_set("America/Sao_Paulo");
$hoje = date("d/m/Y - H:i:s "); 
echo"<br>";
echo "Hoje é $hoje";





?>