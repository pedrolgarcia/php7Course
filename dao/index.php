<?php
    
    require_once("config.php");

    $user = new Usuario();

    $user->loadById(4);

    echo $user;

    /*$sql = new SQL();
    $res = $sql->select("SELECT * FROM tb_usuarios");
    //var_dump($res);
    echo json_encode($res);*/

?>