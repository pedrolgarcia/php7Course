<?php

    $images = scandir("images"); //Lê todos os arquivos do diretório "images"
    $data = array();

    foreach ($images as $img) {

        if(!in_array($img, array(".", ".."))){ //in_array faz uma busca dentro de um array, se não tiver o . e o .. ele entra no if
            $filename = "images" . DIRECTORY_SEPARATOR . $img; //Define o diretório do arquivo

            $info = pathinfo($filename); //Pega as informações do arquivo 
            $info["size"] = filesize($filename); //Tamanho do arquivo
            $info["modified"] = date("d/m/Y H:i:s", filemtime($filename)); //Data de modificação
            $info["url"] = "http://localhost:8080/phpUdemy/arquivos/dir/" . str_replace("\\", "/", $filename);

            array_push($data, $info);
        }

    }

    echo json_encode($data);

?>