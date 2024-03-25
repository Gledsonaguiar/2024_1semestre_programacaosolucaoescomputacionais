<?php
    echo " Maior e menor de idade <br>";
    $i = 1;

    do{
        echo "<br>" . $i;
        //condicional
        if($i < 18){
            echo  " = Menor de idade";

        }else{
            echo " = Maior de idade"; 
        }
    }

    $i++;

         

    while($i < 22);{

    }
?>