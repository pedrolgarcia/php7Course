<?php

    //Escopo de variáveis: SUPERGLOBAL >>> GLOBAL >>> LOCAL

    $nome = "Pedro";

    function teste1(){
        global $nome; //Dizemos aqui que a variável que será usada nesta função é a que foi definida lá fora.
        echo $nome; //Vai mostrar "Pedro".
    }

    function teste2(){
        echo $nome; //Vai dar um "undefined" pois a variável não foi definida.
    }

    teste1();
    teste2();
?>