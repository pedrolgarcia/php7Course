<?php

    $condicao = true;

    while($condicao){
        $numero = rand(1, 10);

        if($numero === 3){
            echo "TRÊÊS";
            $condicao = false;
            continue;
        }   

        echo $numero . " ";

    }

    /*do {
        Executa pelo menos uma vez.
    } while ();*/ 

?>