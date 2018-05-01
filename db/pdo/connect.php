<?php

    //PDO trabalha de uma forma mais abstrata e genérica em relação ao tipo de banco utilizado além de possuir mais recursos
                    
    //$conn = new PDO("mysql:dbname=phpudemy;host=localhost", "root", ""); Conectando ao MySQL
                    //DSN = Data Source Name (dados de conexão)
    $conn = new PDO("sqlsrv:Database=phpudemy;server=localhost\SQLEXPRESS;ConnectionPooling=0", "sa", "root"); //Conectando ao SQLServer
    //ConnectionPooling 1 mantém a conexão aberta e 0 encerra a conexão após uma execução
    $stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY deslogin");
    $stmt->execute();
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC); //Já pega todas as linhas da query, não precisa de while 

    foreach ($results as $row) { //Resultado do fetchAll
        foreach ($row as $key => $value) {
            echo "<strong>" . $key . ":</strong>" . $value . "<br>";
        }
        echo "=========================================================<br>";
    }
    
    //var_dump($results);

?>