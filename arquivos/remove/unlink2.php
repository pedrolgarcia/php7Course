<?php

    if(!is_dir("images")){
        mkdir("images");
    }
    
    foreach (scandir("images") as $item) { //Apagando todos os arquivos de um diretório
        if(!in_array($item, array(".",".."))){
            unlink("images/" . $item); 
        }
    }
    
    echo "OK";

?>