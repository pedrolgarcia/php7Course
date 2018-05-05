<?php

    //PHP é uma lingugem fracamente tipada, ou seja, não é necessário declarar o tipo
    //Criando variáveis ($)
    //Tipos básicos (string, inteiro, flutuante e booleano)
    $var1 = "Curso PHP"; //String
    $var2 = 10; //Inteiro
    $var3 = 10.1; //Float
    $var4 = true; //Bool
    $var5 = "Udemy";
    $var6 = $var1 . " " . $var5; //Concatenação


    echo $var1; //Mostrará a variável
    echo "<br>";

    unset($var1); //Comando para eliminar a variável da memória.

    echo $var1; //Vai dar um notice pois a variável foi eliminada.
    echo "<br>";

    if(isset($var1)){ //isset = está definido ou não?
        echo $var1; //Apenas printará se existir.
    }

    ///////////////////////////////////////////////////////////////////////////////
    //Tipos compostos (array e objetos)
    $frutas = array("Uva", "Morango", "Melão");

    var_dump($frutas); //var_dump além do conteúdo, mostra todos os detalhes da variável.
    echo "<br>";
    
    $nascimento = new DateTime(); //new instancia um objeto.

    var_dump($nascimento);
    echo "<br>";
    ///////////////////////////////////////////////////////////////////////////////
    //Tipos especiais (resource e null)

    $arquivo = fopen("variaveis.php", "r");

    var_dump($arquivo);
    echo "<br>";

    $nulo = NULL; //Ausência de valor, não existe na memória.
    $vazio = ""; //Foi iniciada, sem informação mas existe na memória.

?>