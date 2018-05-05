<?php

    //Criamos funções com function + nome + (parâmetros){}.
    function hello(){
        //echo "Hello world!"; Se fosse só isso seria uma subrotina.
        return "Hello world!"; //Retorna um valor para ter uma maior abstração e reutilização. 
    }

    function salario(){
        return 954.00;
    }

    echo hello();
    echo "<br>";
    echo "Você ganha 3 salários mínimos: ". (salario() * 3);

?>