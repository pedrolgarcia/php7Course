<?php
    //Ações que são definidas para serem executadas em determinadas situações
    class Endereco {

        private $logradouro;
        private $numero;
        private $cidade;

        public function __construct($logradouro, $numero, $cidade){ //Executado quando a classe é instanciada
            $this->logradouro = $logradouro;
            $this->numero = $numero;
            $this->cidade = $cidade;
        }
        
        public function __destruct(){ //Executado quando o objeto é destruído (fim da execução ou se der unset)
            var_dump("DESTRUIR");
        }
        
        public function __toString(){ //Executado quando queremos converter para string ou damos um echo por exemplo
            return $this->logradouro . ", " . $this->numero . ", " . $this->cidade;
        }
    }

    $end = new Endereco("Rua Itirapina", "115", "Rio de Janeiro"); //Instanciando a classe, executa o construtor

    //var_dump($end);
    //echo "<br>";

    echo $end;
    echo "<br>";

    unset($end); //Destruindo um objeto, executao o destrutor
    
?>