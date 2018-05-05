<?php

    $var = (int)$_GET["a"]; //Pega valores passados de um formulário, pela URL - Sempre será uma string.
                            //URL é dividida em URI's, onde os parâmetros são separados por um '?'.

    var_dump($var);

    $ip = $_SERVER["REMOTE_ADDR"]; //Retorna o IP da máquina que está acessando.
    $var2 = $_SERVER["SCRIPT_NAME"]; //Retorna o caminho atual do usuário. Importante para sistemas de log. 

    echo "<br>" . $ip . "<br>";
    echo $var2;

?>