<?php

    session_start();
    
    $username = $_SESSION['username'];

    if(!$username) {
        header('Location: login.html');
    } else {
        header('Location: intermediate.php');
    }

?>