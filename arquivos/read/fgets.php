<?php

    //fgets x fread
    //fgets lê cada linha do arquivo e o fread precisa saber quantos bytes você quer ler do arquivo

    $filename = "usuarios.csv";

    if(file_exists($filename)){

        $file = fopen($filename, "r"); //Não precisa de + pois já verificou que ele existe
        $headers = explode(",", fgets($file)); //Lendo a primeira linha do arquivo. explode apaga o separador de um array
        $data = array();

        while ($row = fgets($file)){
            $rowData = explode(",", $row);
            $linha = array();

            for($i = 0; $i < count($headers); $i++){
                $linha[$headers[$i]] = $rowData[$i];
            }
            array_push($data, $linha);
        }

        fclose($file);

        echo json_encode($data);
    }

?>