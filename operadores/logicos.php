<?php

    $res = (10 + 5) / 2 > 5 && 10 + 5 < 3; //&& = AND = E - As duas condições devem ser verdadeiras
    var_dump($res); 
    echo "<br>";

    $res = (10 + 5) / 2 > 5 || 10 + 5 < 3; //|| = OR = OU - Pelo menos uma condição deve ser verdadeira
    var_dump($res); 
    echo "<br>";

    $res = (10 + 5) / 2 > 5 xor 10 + 5 < 3; //XOR = OU EXCLUSIVO - Uma condição deve ser verdadeira, mas nunca ambas
    var_dump($res); 
    echo "<br>";

    $res = !(10 + 5) / 2 > 5; //! = NAO - Condição não é verdadeira
    var_dump($res); 
?>