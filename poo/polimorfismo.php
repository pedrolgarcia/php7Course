<?php

    /*Polimorfismo = várias formas
      É quando métodos com mesmo nome em classes diferentes (herdadas), tem comportamentos diferentes*/

    abstract class Animal {
        
        public function falar(){
            return "Som";
        }

        public function mover(){
            return "Anda";
        }
    }

    class Cachorro extends Animal {

        public function falar(){
            return "Late";
        }
    }

    class Gato extends Animal {
        
        public function falar(){
            return "Mia";
        }
    }
    
    class Passaro extends Animal {

        public function falar(){
            return "Canta";
        }

        public function mover(){
            return "Voa e " . parent::mover(); //Chama o método da classe pai
        }
    }

    $pluto = new Cachorro();

    echo $pluto->falar() . "<br>"; //Ocorreu polimorfismo
    echo $pluto->mover() . "<br>"; //Herdou de Animal
    echo "------------------------------<br>";

    $garfield = new Gato();
    echo $garfield->falar() . "<br>";
    echo $garfield->mover() . "<br>";
    echo "------------------------------<br>";

    $ave = new Passaro();
    echo $ave->falar() . "<br>"; 
    echo $ave->mover() . "<br>";
?>