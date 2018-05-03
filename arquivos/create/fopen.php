<?php

    $file = fopen("log.txt", "a+"); //Abrindo um arquivo 
    //(caminho, o que deseja fazer(w = write e zera o conteúdo, a = write e mantém, r = ler, + = crie se não existir))
    //$file agora é um resource, ou seja, uma referência a um arquivo externo
    fwrite($file, date("Y-m-d H:i:s" . "\r\n")); //Escrevendo no arquivo (resource, conteúdo)
    fclose($file); //Fechando um arquivo

    echo "Arquivo criado com sucesso!";

?>  