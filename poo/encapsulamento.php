<?php

    //Encapsulamento é proteger e controlar quem acessa um atributo ou método e a forma como isso ocorre 

    class Pessoa {
        //Modificadores de acesso 
        //Níveis de proteção: (+protegido)private >>> protected >>> public(-protegido)
        public $nome = "Pedro Lopes Garcia"; //Pode ser acessado por todas as classe
        protected $idade = 19; //Só pode ser acessado por quem está dentro da classe e quem herda dela
        private $senha = "123456"; //Só pode ser acessado por quem está dentro da classe

        public function exibir(){
            echo $this->nome . "<br>";
            echo $this->idade . "<br>";
            echo $this->senha . "<br>";
        }
    }

    class Programador extends Pessoa {

        public function exibir(){
            echo get_class($this) . "<br>"; //Retorna a classe do objeto passado no parâmetro ($this = Programador)
            echo $this->nome . "<br>";
            echo $this->idade . "<br>";
            echo $this->senha . "<br>";
        }
    }

    $p1 = new Pessoa;  
    
    echo $p1->nome; //Pode acessar public 
    echo "<br>";
    //echo $p1->idade; Não pode acessar pois é protected, fatal error

    $p1->exibir(); //O método é public logo ele pode acessar todos os atributos dentro da classe

    $p2 = new Programador; 

    $p2->exibir(); /*Chama o método da classe Programador e não de Pessoa. Ele acessa o nome e idade pois tem
                   permissão, porém não consegue acessar a senha pois é privado.*/

?>