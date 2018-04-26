<?php

    //Função anônima
    //Não possui nome nem return

    $fn = function($a){ //Atribuir uma função a uma variável
        var_dump($a);
    };

    function teste($callback){ //Passa função como parâmetro
        //Processo lento
        $callback();
    }

    teste(function(){
        echo "Terminou!<br>";
    });

    $fn("Oi");

?>