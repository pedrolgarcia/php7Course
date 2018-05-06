<?php

    require_once 'vendor/autoload.php';

    use \Slim\Slim;

    $app = new Slim();

    //Criando rotas
    $app->get("/", function(){
        echo json_encode(array(
            "data"=>date("Y-m-d H:i:s")
        ));
    });

    $app->get('/hello/:name', function ($name) {
        echo "Hello, " . $name;
    });
    $app->run();

?>