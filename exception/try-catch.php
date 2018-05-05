<?php

    //Possíveis erros que podem ocorrer no código e temos que tratar
    try{ //Tente um código
        throw new Exception("Houve um erro", 400); //throw força uma exception ("mensagem", identificador)
    } catch(Exception $e){
        echo json_encode(array(
            "message"=>$e->getMessage(), //Mensagem do erro
            "line"=>$e->getLine(), //Linha do código que deu erro
            "file"=>$e->getFile(), //Arquivo que deu erro
            "code"=>$e->getCode() //Código do erro
        ));
    }

?>