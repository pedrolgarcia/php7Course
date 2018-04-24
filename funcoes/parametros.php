<?php

    function hello($texto = "Mundo", $periodo = "Bom dia"){ //Parâmetros sem valor padrão, sempre a esquerda
        return "Hello $texto! $periodo<br>";
    }

    echo hello("world");
    echo hello("Pedro", "Boa noite");
    echo hello("PHP");

    function getArgs(){
        $argumentos = func_get_args(); //Se forem passados parâmetros, guarde-os em um array.
        return $argumentos; 
    }

    var_dump(getArgs("Pedro", "19"));

?>