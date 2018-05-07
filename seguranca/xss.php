<form method="post">
    <input type="text" name="busca">
    <button type="submit">Enviar</button>
</form>

<?php
    //Injeção de comandos HTML via post
    if(isset($_POST['busca'])){
        //Defesa
        //echo strip_tags($_POST['busca'], "<strong><a>"); //Remove todas as tags, pode escolher deixa alguma(segundo parametro)
        //OU
        echo htmlentities($_POST['busca']);//Converte as tags em string e não executa
    }

?>