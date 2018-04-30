<?php

    require_once("config.php");

    use Cliente\Cadastro; //Usa um namespace definido

    $cad = new Cadastro();
    $cad->setNome("Pedro");
    $cad->setEmail("pedrolopes.info@gmail.com");
    $cad->setSenha("123456");

    echo $cad . "<br>";
    $cad->registrarVenda();

?>