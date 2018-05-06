<?php

    //SQL injection 

    $id = isset($_GET["id"])?$_GET["id"]:4;

    //Defesa
    if(!is_numeric($id) || strlen($id) > 5){ //Verificar se é numérico ou se a string passa de determinado tamanho por exemplo
        exit("Pegamos você!");
    }

    $conn = mysqli_connect("localhost", "root", "", "phpudemy");
    $sql = "SELECT * FROM tb_usuarios WHERE idusuario = $id"; //Passando a variável dinamicamente por get sem tratar
                                                              //Permite passar um comando sql pela url
    $exec = mysqli_query($conn, $sql);

    while($res = mysqli_fetch_object($exec)){
        var_dump($res);
    }

?>