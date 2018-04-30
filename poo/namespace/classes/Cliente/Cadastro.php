<?php
    
    namespace Cliente; //Organiza seu código em espaços diferentes quando temos classes com o mesmo nome

    class Cadastro extends \Cadastro{

        public function registrarVenda(){

            echo "Foi registrada uma venda para o cliente " . $this->getNome();

        }

    }

?>