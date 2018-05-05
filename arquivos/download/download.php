<?php

    $link = "https://logodownload.org/wp-content/uploads/2014/09/google-logo-1.png";
    $content = file_get_contents($link); //Pega o conteúdo do arquivo do link
    $parse = parse_url($link); //Interpreta uma URL e retorna seus componentes

    $basename = basename($parse["path"]); //Retorna só o nome do arquivo 

    $file = fopen($basename, "w+");
    fwrite($file, $content);
    fclose($file);

?>

<img src="<?=$basename?>"></img>