<?php

    //Biblioteca Graphic Desing(GD) para processamento de imagens
    header("Content-Type: image/png"); //Definindo tipo de arquivo

    $image = imagecreate(256, 256); //Criando tela (largura, altura)
    //Criando paleta de cores. (imagem, red, green, blue)
    $black = imagecolorallocate($image, 0, 0, 0); //Primeira cor é o fundo
    $red = imagecolorallocate($image, 255, 0, 0); 
    imagestring($image, 5, 60, 120, "Curso PHP 7", $red); //Escreve na tela (imagem, tam font(1-5), eixo x(margem esquerda), eixo y(margem topo), texto, cor)
    imagepng($image); //Renderiza o que você desenhou
?>