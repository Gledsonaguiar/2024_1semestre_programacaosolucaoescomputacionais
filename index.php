<?php
$x = 5;
$y = 5.0;
print("A soma é: ");
echo( $x + $y );
if($x == $y){
    echo("<br> os valores das variaveis sao iguais!");
}else{
    echo("<br> os valores das variaveis sao diferentes!");
}

if( $x === $y){
    echo("<br>as variaveis sao identicas!"); //fuaq some os numeros pares de 1 a 100 e apresente o resultado ao usuario

 }
else{
    echo("<br>as variaveis nao sao identicas!");
}

switch( $x ){
    case $y:
        echo("<br> $x e igual $y ");
        break;
    case 1:
        echo("<br> valor e: 1");
        break;
    default:
        echo("<br>valor default");

}
?>

<hr>

<?php

for($i = 1; $i <= 11; $i++){
    echo($i . "<br>");

}
     echo("<br>");
for($i = 11; $i < 21 ; $i +=2){
     echo($i . "<br>" );
        }

     echo("<br>");
for($i = 100; $i < 0; $i = -=2){
            echo($i . "<br>");

        }

        ?>

        <hr>
 //fuaq some os numeros pares de 1 a 100 e apresente o resultado ao usuario

<?php

        echo("<br>");
        $soma = 0;
        for($i = 0; $i <=100 ; $i++){
            if($i %2 == 0){
            $soma += $i ;
            }    
        }

        ?>

        <hr>

<?php
// fazer algoritimo usando for para calcular fatorial de 5!

echo("<br>fatorial");
$fatorial = 1;
for($i = 2; $i <= 5; $i++){
    $fatorial = $fatorial * $fatorial;

}
echo("<br>" o fatorial de 5 e: $fatorial);

?>

<hr>


?>


        

            


