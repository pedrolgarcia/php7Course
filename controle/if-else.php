<?php

    $suaIdade = 40;

    $crianca = 12;
    $maior = 18;
    $idoso = 65;

    if($suaIdade < $crianca){ 
        echo "Criança";
    } else if($suaIdade < $maior){
        echo "Adolescente";
    } else if($suaIdade < $idoso){
        echo "Adulto";
    } else {
        echo "Idoso";
    }

    echo "<br>";
    echo ($suaIdade < $maior) ? "Menor de idade" : "Maior de idade"; //Operador Ternário (para condição simples)

?>