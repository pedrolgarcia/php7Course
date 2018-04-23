<?php

    //REQUIRE obriga que o arquivo exista e que esteja funcionando corretamente, ou vai gerar um erro FATAL.
    //INCLUDE tenta funcionar e possui mais recursos (include_path). Include dinâmico, péssima prática.
    include "ex01.php";
    //require "ex01.php";
    //include_once e require_once  Chama o arquivo apenas uma vez. Não permite chamar de novo
    //A partir do PHP 7, erro fatal não interrompe a execução e pode ser tratado como exceção
     

    echo somar(10, 5);

?>