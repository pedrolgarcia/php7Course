<?php

    $filename = "logo.png";

    $base64 = base64_encode(file_get_contents($filename)); //Lê todo o arquivo, vai retornar binário por ser uma imagem
              //Converte o binário em string
    $fileinfo = new finfo(FILEINFO_MIME_TYPE); 
    $mimetype = $fileinfo->file($filename); //Pega o tipo de arquivo

    $base64encode =  "data:" . $mimetype . ";base64," . $base64; //Padrão de execução do base64
?>
<a href="<?=$base64encode?>" target="_blank">Link para imagem</a>
<img src="<?=$base64encode?>">