<?php
    
    require_once("config.php");

    //Carrega um usuário buscando pelo id
    /*$user = new Usuario();
    $user->loadById(4);
    echo $user;*/

    //Carrega uma lista de todos os usuários
    /*$list = Usuario::getList(); //Método estático
    echo json_encode($list);*/

    //Carrega uma lista de usuários buscando pelo login
    /*$listL = Usuario::search("jo"); Todos os usuários que contém "jo" no nome
    echo json_encode($listL);*/

    //Carrega um usuário usando um login e uma senha 
    /*$user = new Usuario();
    $user->login("pedro", "123456");
    echo $user;*/

    //Insere um novo usuário
    /*$aluno = new Usuario("aluno", "@lun0");
    $aluno->insert();
    echo $aluno;*/

    //Alterando um usuário
    /*$user = new Usuario();
    $user->loadById(8);
    $user->update("professor", "!@#$%");
    echo $user;*/

    //Deletando um usuário
    $user = new Usuario();
    $user->loadById(8);
    $user->delete();
    echo $user;

?>