<?php

    if(isset($_COOKIE["NOME_DO_COOKIE"])){ //Superglobal pega todos os cookies existentes na máquina
        $obj = json_decode($_COOKIE["NOME_DO_COOKIE"]); //Convertendo json para objeto

        echo $obj->empresa;
    }

?>