<?php
    /*Arquivo onde se econtrará todas as configurações do seu sistema (banco de dados, tratamento de erros, região
    e idioma, constantes. 
    Presente na maioria dos sistemas criados.*/

    /*Uma sessão é iniciada sempre que um usuário entra no site e permanece enquanto ele estiver online ou quando 
    for finalizada. Cria-se um arquivo temporário na pasta tmp do usuário e do servidor que se interligam. 
    OBS:Caso o nível de segurança do browser esteja muito alto, o browser não permite a criação deste tmp, 
    logo session não funcionará.
    Iniciamos utilizando o session_start ou até automaticamente nas configurações do php.ini*/
    
    session_start(); //Criando uma sessão ou continuando uma existente

?>  