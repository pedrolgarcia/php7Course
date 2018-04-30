<?php

    $conn = new mysqli("127.0.0.1", "root", "", "phpudemy");

    if($conn->connect_error){
        echo "Error: " . $conn->connect_error;
    }

?>