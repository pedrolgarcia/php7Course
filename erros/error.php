<?php
    //Trantando erros em tempo de execução (fatalerror)
    function error_handler($code, $message, $file, $line){ // Função para tratar o erro. Parâmetros esperados na mesma ordem
        echo json_encode(array(
            "code"=>$code,
            "message"=>$message,
            "line"=>$line,
            "file"=>$file
        ));
    }

    set_error_handler("error_handler"); //Sempre que der erro chama a função do parâmetro

    $d = 100 / 0; //Forçando um erro. Impossível dividir um número por zero

?>