<?php 

    //Quando possui só uma dimensão é chamado de vetor
    $frutas = array("Laranja", "Abacaxi", "Melancia"); //Todo array se inicia em 0
                                                        
    //Array bidimensional (matriz)
    $carros[0][0] = "GM"; 
    $carros[0][1] = "Cobalt";
    $carros[0][2] = "Onix";
    $carros[0][3] = "Camaro";

    $carros[1][0] = "Ford";
    $carros[1][1] = "Fiesta";
    $carros[1][2] = "Fusion";
    $carros[1][3] = "Eco Sport";

    print_r($frutas); //Comando para mostrar array detalhado.

    echo "<br>";
    echo $carros[0][3];
    echo "<br>";
    echo end($carros[1]); //end retorna o último elemento do array

?>