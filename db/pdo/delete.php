<?php

    $conn = new PDO("mysql:dbname=phpudemy;host=localhost", "root", "");

    $stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = :ID");

    $id = 1;

    $stmt->bindParam(":ID", $id);
    $stmt->execute();

    echo "Deletado com sucesso";

?>