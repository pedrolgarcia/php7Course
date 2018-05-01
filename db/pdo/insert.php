<?php

    $conn = new PDO("mysql:dbname=phpudemy;host=localhost", "root", "");

    $stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (:LOGIN, :PASSWORD)");

    $login = "pedro";
    $password = "1234567890";
    //Passando parâmetro por um identificador (:)
    $stmt->bindParam(":LOGIN", $login);
    $stmt->bindParam(":PASSWORD", $password);

    $stmt->execute();

    echo "Inserido com sucesso";

?>