<?php

    $conn = new PDO("mysql:dbname=phpudemy;host=localhost", "root", "");

    $conn->beginTransaction(); //Inicia uma transação
    $stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = ?");

    $id = 3;

    $stmt->execute(array($id)); //Outra forma de passa o parâmetro so stmt (?)

    //$conn->rollback(); Cancela os comandos executados
    $conn->commit(); //Confirma os comandos 

    echo "Deletado com sucesso";

?>