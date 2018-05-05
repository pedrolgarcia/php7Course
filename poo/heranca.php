<?php

    //Herança é quando uma classe (filha) herda todas os atributos e métodos de outra classe (pai)

    class Documento {

        private $numero;

        public function getNumero(){
            return $this->numero;
        }

        public function setNumero($numero){
            $this->numero = $numero;
        }
    }

    class CPF extends Documento { //CPF herdando de Documento
        
        public function validar():bool{
            //$num = $this->numero; //Tentando acessar o atributo mas ele é privado, se fosse protected daria certo
            $num = $this->getNumero(); //Acessando o método público de Documento
            return true;
        }
    }

    $doc = new CPF();
    $doc->setNumero("123456789-10");

    var_dump($doc->validar());
    echo "<br>";
    echo $doc->getNumero();

?>