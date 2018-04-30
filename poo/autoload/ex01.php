<?php
    
    //Autoload é uma função que é executada automaticamente assim que a classe é instanciada e carrega essa classe

    function __autoload($nomeClasse){ 
        var_dump($nomeClasse);
        require_once("$nomeClasse.php"); //Carrega a classe e as suas heranças
    }

    //require_once("DelRey.php"); Não é mais necessário
    $carro = new DelRey;
    $carro->acelerar(100);

?>