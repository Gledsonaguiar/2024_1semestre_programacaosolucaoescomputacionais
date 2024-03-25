<?php

    $carros = array ("Doblo", "Opala", "Renegade", "celta");
    

    foreach($carros as $car){
        print($car .  ", ");
        
        

    }
    echo"<br><br>";
    echo " Meu caro: $carros[3] <hr>";    
    
    print_r( $carros);
    echo "<hr>";
    var_dump($carros);

    $carros[0] = "Uno";
    echo "<hr";
    print_r( $carros);
    


