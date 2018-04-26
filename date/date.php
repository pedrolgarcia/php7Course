<?php

    echo date("d/m/Y h:i:s", -10); //Retorna a data e hora atual. 
                              //Y = ano com 4 dígitos, y = 2 dígitos  
                              //H = formato 24 horas, h = formato 12 horas
                              //i = minutos
    echo "<br>";

    echo time(); //Quantidade de segundos desde 01/01/1970 (timestamp).
                 //Pode passar como parâmetro no date() para exibir uma data.
    echo "<br>";

    $ts = strtotime("+1 week 4 hours 2 seconds"); //String para timestamp
    //$ts = strtotime("now"); Aceita expressões, (+1 day, +1 week 4 hours 2 seconds)

    echo date("l, d/m/Y", $ts);

?>