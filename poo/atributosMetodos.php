<?php

    class Carro {

        private $modelo;
        private $motor;
        private $ano;

        //Getters e Setters são métodos para acessar os atributos de uma classe formando um encapsulamento
        public function getModelo(){
            return $this->modelo;
        }

        public function setModelo($modelo){
            $this->modelo = $modelo;
        }

        public function getMotor():float{
            return $this->motor;
        }

        public function setMotor($motor){
            $this->motor = $motor;
        }

        public function getAno():int{
            return $this->ano;
        }

        public function setAno($ano){
            $this->ano = $ano;
        }

        public function exibir(){
            return array("modelo"=>$this->getModelo(), "motor"=>$this->getMotor(), "ano"=>$this->getAno());
        }
    }

    $c1 = new Carro;
    $c1->setModelo("Onix"); //Acessando e mudando o valor de um atributo privado
    $c1->setMotor("1.8");
    $c1->setAno("2018");

    var_dump($c1->exibir());

?>