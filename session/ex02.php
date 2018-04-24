<?php

    //session_start();
    require_once "config.php";

    session_unset($_SESSION["nome"]); //Apaga a variável mas mantém a mesma sessão
    session_destroy(); //Finaliza a sessão

    echo $_SESSION["nome"];

?>