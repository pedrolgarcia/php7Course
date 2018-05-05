<?php

    error_reporting(E_ALL & ~E_NOTICE); //Define o que você quer que apareça. No caso, todos os erros e nenhum(~) notice

    $nome = $_GET["nome"]; //Se não passar o parâmetro, vai dar um notice

    echo $nome; 

?>