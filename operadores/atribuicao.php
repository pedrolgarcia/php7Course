<?php

    $nome = "Pedro"; //= Atribui um valor a uma variável.
    echo $nome . " Lopes<br>"; //. Concatena duas strings. 

    $nome .= " Lopes"; //Atribui ao valor que a variável já tinha, mais um valor.
    echo $nome . "<br>"; //Mostra "Pedro Lopes".
    
    $valor = 0;
    $valor += 100; //+= Soma um valor ao que já tinha na variável.
    $valor -= 50; //-= Subtrai um valor ao que já tinha.
    $valor *= .9; //*= Multiplica um valor ao que já tinha. 90% do valor.

    echo $valor; //Mostra 45.

?>