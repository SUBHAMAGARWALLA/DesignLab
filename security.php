<?php

    session_start();
    include('db.php');
    $username = $_SESSION['username'];

    if(!$username) {
        header('Location: login.html');
    } else {
        header('Location: intermediate.php');
    }

?>