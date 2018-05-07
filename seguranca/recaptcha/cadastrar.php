<?php

    $email = $_POST["inputEmail"];

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);    
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array(  //Define os campos que serão enviados
        "secret"=>"6Le1jFcUAAAAAL-yrEfgfADcEt2KKya5Y5VEgmqX",
        "response"=>$_POST['g-recaptcha-response'],
        "remoteip"=>$_SERVER["REMOTE_ADDR"] //Pega o ip do usuário
    ))); 
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); //Espera retorno
    
    $recaptcha = json_decode(curl_exec($ch), true);
    curl_close($ch);
    if($recaptcha['success']){ //Verifica se completou o captcha
        echo "OK: " . $_POST['inputEmail'];
    }else{
        header("Location: index.html");
    }

?>