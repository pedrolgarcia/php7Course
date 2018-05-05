<?php

    //Laço de repetição

    for($i = 0; $i <= 1000; $i+=5){ //0 Condição inicial até 1000 condição final, incrementando 5.
        if($i > 200 && $i <800) continue; //Pula para a próxima iteração.
        if($i === 900) break; //Sai do laço.
        echo $i . "<br>";
    }

    echo "<select>";
    for($i = date("Y"); $i >= date("Y") - 100; $i--){
        echo '<option value="'.$i.'">'.$i.'</option>'; 
    }
    echo "</select>";

?>