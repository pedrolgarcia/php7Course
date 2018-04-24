<?php

    $pessoas = array(
        "nome" => "Pedro",
        "idade" => 19
    );

    foreach ($pessoas as &$value) {

        if (gettype($value) === 'integer'){
            $value += 10;
        }

        echo $value . "<br>";
    }

    print_r($pessoas);
?>