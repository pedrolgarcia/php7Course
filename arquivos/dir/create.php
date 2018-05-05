<?php
    //Manipulando pastas e diretórios
    $name = "images"; //Nome do diretório

    if(!is_dir($name)){ //Verifica se o diretório não (!) existe
        mkdir($name); //Criar um diretório
        echo "Diretório <strong>$name</strong> criado com sucesso!";
    }else{
        rmdir($name); //Remove um diretório
        echo "O diretório <strong>$name</strong> já existe. Foi removido!";
    }

?>