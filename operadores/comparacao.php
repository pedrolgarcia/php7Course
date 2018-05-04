<?php

    $a = 30;
    $b = 55;
    $c = NULL;

    var_dump($a > $b); //Maior
    echo "<br>";
    var_dump($a < $b); //Menor
    echo "<br>";
    var_dump($a == $b); //Igual (valor)
    echo "<br>";
    var_dump($a === $b); //Idêntico (valor e tipo)
    echo "<br>";
    var_dump($a != $b); //Diferente
    echo "<br>";
    var_dump($a !== $b); //Não idêntico
    echo "<br>";
    var_dump($a <=> $b); //SpaceShip (se $a for maior retorna 1, $b for maior retorna -1 e se forem iguais retorna 0)
    echo "<br>";
    echo $c ?? $a ?? $b; //Null Coalescing (mostre $c. Se for nulo, mostre $a. Se for nulo, mostre $b). Mostra $a(30)
?>