<?php

    $file = fopen("teste.txt", "w+");
    fclose($file);

    unlink("teste.txt"); //Excluindo o arquivo criado
    echo "Arquivo removido com sucesso!";
?>