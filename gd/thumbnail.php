<?php

    header("Content-type: image/jpeg");

    $file = "wallpaper.jpg";
    $newWidth = 256; //Novo tamanho
    $newHeight = 256;

    list($oldWidth, $oldHeight) = getimagesize($file); //Pegando tamanho antigo

    $newImage = imagecreatetruecolor($newWidth, $newHeight);
    $oldImage = imagecreatefromjpeg($file);

    imagecopyresampled($newImage, $oldImage, 0, 0, 0, 0, $newWidth, $newHeight, $oldWidth, $oldHeight);//Copia a imagem de origem para a nova
    //(imagem destino, imagem de origem, eixos x e y destino, x e y origem, largula e altura destino, origem )
    imagejpeg($newImage);
    imagedestroy($oldImage);
    imagedestroy($newImage);
?>