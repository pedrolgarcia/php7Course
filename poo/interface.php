<?php

    /*Interface é uma espácie de contrato, onde é definido um padrão para quem implementa
    Deve apresentar apenas os métodos e parâmetros, e qual o tipo de modificador de acesso. Não o que eles fazem.
    A classe que implementar deve conter todos os métodos descritos na interface, senão não roda o código.
    Uma classe pode implementar várias interfaces.*/

    interface Veiculo {

        public function acelerar($velocidade);
        public function frear($velocidade);
        public function trocarMarcha($marcha);
    }

    class Civic implements Veiculo { //Implementando uma interface

        public function acelerar($velocidade){ //Deve conter o mesmo nivel de acesso, mesmo nome e mesma quantidade de parâmetros
            echo "O veículo acelerou até " . $velocidade . " Km/h<br>";
        }

        public function frear($velocidade){
            echo "O veículo frenou até " . $velocidade . " Km/h<br>";
        }

        public function trocarMarcha($marcha){
            echo "O veículo engatou a marcha " . $marcha;
        }
    }

    $carro = new Civic;

    $carro->acelerar(1);
    $carro->frear(1);
    $carro->trocarMarcha(1);

?>