<?php

    //Criando uma imagem a partir de outra
    $image = imagecreatefromjpeg("certificado.jpg"); //Carregando uma imagem

    $titleColor = imagecolorallocate($image, 0, 0, 0);
    $gray = imagecolorallocate($image, 100, 100, 100);
    imagestring($image, 5, 450, 150, "CERTIFICADO", $titleColor);
    imagestring($image, 5, 440, 350, "Divanei Aparecido", $titleColor);
    imagestring($image, 3, 440, 370, utf8_decode("Concluído em ") . date("d/m/Y"), $titleColor);

    header("Content-type: image/jpeg");
    imagejpeg($image, "certificado-" . date("Y-m-d") . ".jpg", 10); //Podemos passar outro parâmetro para ele salvar o arquivo em vez de mostra na tela
              //(imagem, caminho, qualidade)
    imagedestroy($image);

?>