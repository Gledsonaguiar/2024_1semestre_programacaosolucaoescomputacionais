<?php
echo "laço de repetição FOR <br> <br>";

$frutas = array("maça","banana","morango","uva", "abacaxi", "pera",
"mamao", "melao", "melancia", "jaca", "fruta do conde", "jaboticaba",
"caju", "laranja", "bergamota");

$size = count($frutas); //conta quantas frutas tem

//imprimir o meu array na tela

for ($i = 0; $i < $size; $i++){
    echo $frutas[$i] . "<br>";

}
