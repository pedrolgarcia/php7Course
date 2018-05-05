<?php

  /*Arquivo de texto de pequeno tamanho gravado na máquina do usuário onde armazenamos informações a serem
  reaproveitadas como os dados de autenticação do usuário que, quando volta, não precisa logar de novo*/

    $data = array(
      "empresa"=>"Hcode Treinamentos"
    );

    setcookie("NOME_DO_COOKIE", json_encode($data), time() + 3600); //Criando um cookie (chave, conteúdo, tempo de expiração(timestamp))  

    echo "OK";
?>