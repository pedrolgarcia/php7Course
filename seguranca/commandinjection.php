<?php

    //Command injection quando o hacker descobre que uma página está executando comandos de sistema operacional e injeta
    //comandos e invade o servidor podendo derrubar seu site

    if($_SERVER["REQUEST_METHOD"] === "POST"){ //Verifica os dados vieram via post
        //$cmd = $_POST["cmd"]; //O hacker injeta o comando via post
        //Defesa
        $cmd = escapeshellcmd($_POST["cmd"]); //Verifica se parece um comando e joga um ^ anulando o comando
        echo "<pre>";
        $comando = system($cmd, $retorno);
        echo "</pre>";
    }
    

?>

<form method="post">
    <input type="text" name="cmd">
    <button type="submit">Enviar</button>
</form>