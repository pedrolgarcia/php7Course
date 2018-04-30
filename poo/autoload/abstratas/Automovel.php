<?php

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

?>