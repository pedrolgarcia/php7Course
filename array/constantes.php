<?php 

    define("SERVIDOR", "127.0.0.1"); //Definindo uma constante ("nome", "valor")
    define("BANCO_DE_DADOS", [ //Novidade PHP 7, array constante
        "127.0.0.1",
        "root", 
        "password",
        "test"
    ], true); //True para case insensitive, vazio para sensitive (padrão boas práticas)

    echo SERVIDOR;
    echo "<br>";
    print_r(BANCO_DE_DADOS);
    echo "<br>";

    //Constantes pré-definidas
    echo PHP_VERSION; //Versão do PHP instalada
    echo "<br>";
    echo DIRECTORY_SEPARATOR; //Barra de diretório

?>