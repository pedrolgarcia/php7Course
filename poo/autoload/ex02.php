<?php   
    
    function incluirClasse($nomeClasse){
        
        if(file_exists($nomeClasse . ".php")){
            require_once($nomeClasse . ".php");
        }

    }

    spl_autoload_register("incluirClasse"); //spl = standart php library. Registra mais de uma função como autoload
    spl_autoload_register(function($nomeClasse){ //Passa o nome da função ou uma função anônima
        if(file_exists("abstratas/" . DIRECTORY_SEPARATOR . $nomeClasse . ".php")){
            require_once("abstratas/" . DIRECTORY_SEPARATOR . $nomeClasse . ".php");
        }
    });

    $carro = new DelRey;
    $carro->acelerar(100);

    var_dump(spl_autoload_functions());

?>