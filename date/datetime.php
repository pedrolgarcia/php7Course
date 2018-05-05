<?php

    $dt = new DateTime(); //Pega a data e hora atual através de uma classe.
    $periodo = new DateInterval("P15D"); //Somando 15 dias a data.
    echo $dt->format("d/m/Y H:i:s");
    echo "<br>";
    
    $dt->add($periodo);
    echo $dt->format("d/m/Y H:i:s");    

?>