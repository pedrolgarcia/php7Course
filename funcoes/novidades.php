<?php

    //Novidades do PHP 7 em relação a funções
    
    /*Declaração de tipos escalares
    Quando não sabemos quantos parâmetros serão definidos, usamos essa estrutura.
    Todos os parâmetros passados serão gravados no array $valores. 
    Devem ser do tipo que foi definido.
    Funciona como o func_get_args*/
    function soma(int ...$valores):string{ //Quando queremos definir o tipo de retorno, definimos depois do (). 
    
        return array_sum($valores); //Soma todos os valores de um array.
    }

    echo var_dump(soma(2, 2)); //Mostrará o tipo string pois definimos o tipo de retorno
    echo "<br>";
    echo soma(25, 33);
    echo "<br>";
    echo soma(1.5, 3.2); //Mostra 4 pois converte para o tipo definido (int)
    echo "<br>";

?>