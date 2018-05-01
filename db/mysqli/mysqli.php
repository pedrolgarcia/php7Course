<?php

    $conn = new mysqli("127.0.0.1", "root", "", "phpudemy"); //Conectando ao banco (server, user, password, db)

    if($conn->connect_error){ //Testando se ocorreu algum erro na conxão
        echo "Error: " . $conn->connect_error; 
    }

    //Inserir dados
    //Prepara uma declaração (statment) SQL. E fica disponível para executar várias vezes
    $stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (?, ?)"); 
    
    $stmt->bind_param("ss", $login, $senha); //Passa os parâmetros (?) e seus respectivos tipos
                                               //s=string, i=inteiro, d=double
    $login = "user"; 
    $senha = "123456";
    $stmt->execute();

    $login = "root"; //Executando de novo o mesmo statment (stmt)
    $senha = "!@#$";
    $stmt->execute();

    //Consultar dados
    //Query envia um comando direto ao banco sem preparar e executar
    $res = $conn->query("SELECT * FROM tb_usuarios ORDER BY deslogin"); 
    $data = array();

    while ($row = $res->fetch_assoc()){ //Vai verificando se existe alguma linha no resultado da query e guardando em row
        //var_dump($row);
        array_push($data, $row);
    }

    echo json_encode($data);

?>