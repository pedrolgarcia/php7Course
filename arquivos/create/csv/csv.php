<?php

    /*CSV (Comma-Separated Values) é um formato simples de armazenamento, que agrupa as informações de arquivos de texto 
    em planilhas, para as trocas de dados com um banco de dados ou uma planilha entre aplicativos. 
    Cada linha em um texto CSV representa uma linha em uma planilha. Cada célula é geralmente separada por vírgula 
    ou um outro caractere, como tabulador. */

    require_once("config.php");

    $sql = new SQL();
    $res = $sql->select("SELECT * FROM tb_usuarios ORDER BY deslogin");

    $headers = array();

    foreach ($res[0] as $key => $value) {
        array_push($headers, ucfirst($key)); //Pegando o nome das colunas
    }

    $file = fopen("usuarios.csv", "w+"); //Criando o arquivo csv
    fwrite($file, implode(",", $headers) . "\r\n"); //implode separa os items de um array (separador, array)

    foreach ($res as $row) { //Percorre as linhas
        $data = array();
        foreach ($row as $value) { //Percorre as colunas
            array_push($data, $value);
        }
        fwrite($file, implode(",", $data) . "\r\n");
    }

    fclose($file);
    
?>