<?php

    $nome = "pedro lopes";

    echo strtoupper($nome) . "<br>"; //Converte a string para maiúsculo
    echo strtolower($nome) . "<br>"; //Converte a string para minúsculo
    echo ucfirst($nome) . "<br>"; //Converte a primeira letra para maiúsculo
    echo ucwords($nome) . "<br>"; //Converte a primeira letra de cada palavra para maiúsculo
    $nome2 = str_replace("o", "0", $nome); //Substitui uma string contida em uma variável por outra
    $nome2 = str_replace("e", "3", $nome);
    echo $nome2 . "<br>"; //Mostra "p3dr0 l0p3s"
    echo strpos($nome, "l") . "<br>"; //Retorna a posição em que se encontra a string 
    echo substr($nome, 0, strpos($nome, "l")) . "<br>"; //Retorna a string que está contida entre as posições indicadas
    echo strlen($nome); //Retorna a quantidade de caracteres na string
?>