<?php
     
    //Biblioteca que permite a integração com API's atrevés da URL
    $cep = "21370490";
    $link = "https://viacep.com.br/ws/$cep/json/"; //Link do webservice que queremos consumir

    $ch = curl_init($link); //Inicia o curl
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); //Dizendo que espera um retorno (1)
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0); //Não valida se o SSL está registrado em um órgão (0) (https)
    $response = curl_exec($ch); //Executa o curl, retorna um json
    curl_close($ch);

    $data = json_decode($response, true); //Passando o retorno em json para um array (true)
    print_r($data);

?>