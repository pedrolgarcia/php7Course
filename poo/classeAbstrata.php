<?php

    /*Classe que não pode ser instanciada e seus atributos e métodos só podem ser acessados através de uma classe filha
      Uma classe herda apenas de 1 classe abstrata, mas pode implementar várias interfaces.
      Na interface você ainda precisa definir o método na classe que implementa, na c. abstrata é só usar*/
    interface Veiculo {

        public function acelerar($velocidade);
        public function frear($velocidade);
        public function trocarMarcha($marcha);
    }

    abstract class Automovel implements Veiculo { //É um automóvel mas nunca só um automóvel

        public function acelerar($velocidade){ 
            echo "O veículo acelerou até " . $velocidade . " Km/h<br>";
        }

        public function frear($velocidade){
            echo "O veículo frenou até " . $velocidade . " Km/h<br>";
        }

        public function trocarMarcha($marcha){
            echo "O veículo engatou a marcha " . $marcha;
        }
    }

    class DelRey extends Automovel {

        public function empurrar(){
            
        }
    }

    //$carro = new Automovel(); Não se pode instanciar uma classe abstrata
    $carro = new DelRey();

    $carro->acelerar(200);

?>