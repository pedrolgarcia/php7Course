<?php
    //date_default_timezone_set('America/Sao_Paulo'); Se der hora errada
    setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8", "portuguese"); //LC_ALL muda toda a configuração de localização para pt

    echo ucwords(strftime("%A %B %G %T")); //Formata uma hora/data local de acordo com a configuração do idioma    

?>