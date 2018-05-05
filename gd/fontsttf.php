<?php

    //Criando imagem com fontes ttf
    $image = imagecreatefromjpeg("certificado.jpg"); 

    $titleColor = imagecolorallocate($image, 0, 0, 0);
    $gray = imagecolorallocate($image, 100, 100, 100);
    //imagettftext(imagem, tam font(1-...), angulo, eixo x(margem esquerda), eixo y(margem topo), cor, caminho da fonte, texto)
    imagettftext($image, 32, 0, 320, 250, $titleColor, "fonts".DIRECTORY_SEPARATOR."Bevan"
                    .DIRECTORY_SEPARATOR."Bevan-Regular.ttf", "CERTIFICADO");
    imagettftext($image, 32, 0, 340, 350, $titleColor, "fonts".DIRECTORY_SEPARATOR."Playball"
                    .DIRECTORY_SEPARATOR."Playball-Regular.ttf", "Divanei Aparecido");
    imagestring($image, 3, 410, 370, utf8_decode("Concluído em ") . date("d/m/Y"), $titleColor);

    header("Content-type: image/jpeg");
    imagejpeg($image);
    imagedestroy($image);   

?>