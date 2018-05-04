<?php

    //Percorre array e coleções
    $meses = array(
        "Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho",
        "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro");
        
    foreach ($meses as $key => $value) {
        echo "Index " . $key . "<br>";
        echo $value . "<br><br>";
    }
?>  