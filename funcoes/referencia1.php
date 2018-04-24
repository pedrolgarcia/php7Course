<?php

    $a = 10;

    function ref(&$a){ //& significa referência a variável passada como parâmetro.
        $a += 50;

        return $a;
    }

    echo ref($a) . "<br>"; //Agora o resultado da função altera também o valor da variável definida fora
    echo $a; //Sem o & mostraria 10 pois a variável só mudaria dentro da função
    
?>