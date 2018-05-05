<?php
    /*Javascript Objetco Notation, facilita a troca de dados, a interoperabilidade entre sistemas, como o XML faz, 
    porém de uma maneira mais econômica em relação a sintaxe.*/

    include "funcoes.php";
    
    echo json_encode($pessoas); //Gera código json a partir de um array

    $json = '[{"nome":"Pedro","idade":19},{"nome":"Beto","idade":50}]';
    $data = json_decode($json, true); //Gera um array a partir de um código json

    var_dump($data); //Mostra o array gerado

?>