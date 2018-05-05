<?php

    class Pessoa { //Criando uma classe

        public $nome; //Atributo

        public function falar(){ //Método
            return "Meu nome é " . $this->nome;
        }

    }

    $p1 = new Pessoa; //Objeto (instanciando uma classe)
    $p1->nome = "Pedro"; //Acesssando um atributo (público)
    echo $p1->falar(); //Chamando um método (público )
?>