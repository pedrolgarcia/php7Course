<?php
    session_id('mgtiokb90orh497r5io2trc0qe'); //Recuperando uma session, antes do start informe o ID desejado

    require_once "config.php";

    echo session_id(); //Retorna o ID da session que foi iniciada. 
    
    session_regenerate_id(); //Gera outro ID de session, evitar session hijacking (sequestro de sessão)
    var_dump($_SESSION);

?>