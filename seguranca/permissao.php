<?php

    $pasta = "arquivos";
    //Permissões de pasta (segundo parâmetro mkdir)
    //0 = sem permissão; 1 = permissão de execução; 2 = gravação; 3 = execução e gravação; 4 = leitura
    //5 = leitura e execução; 6 = leitura e gravação; 7 = leitura, execução e gravação 
    //Primeiro dígito é para quem criou o diretório (proprietário), o segundo é para um grupo, e o terceiro é para os usuários do seu site
    $permissao = "0775";
    
    if(!is_dir($pasta)){
        mkdir($pasta, $permissao);
        //chmod(); Muda a permissão de uma pasta já existente
        echo "Diretório criado com sucesso.";
    }

?>