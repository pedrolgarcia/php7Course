<?php

    function trataNome($name){
        if(!$name){
            throw new Exception("Nenhum nome foi informado", 1);
            
        }

        echo ucfirst($name) . "<br>";
    }

    try{
        trataNome("Pedro");
        trataNome("");
    } catch(Exception $e){
        echo $e->getMessage();
    } finally{ //Sempre executa independente do try ou catch
        echo "<br>Executou o TRY!";
    }

?>