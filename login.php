<?php

    include('db.php');
    include('security.php');

    if (isset($_POST['login'])) {
        
        $username = $_POST['username'];
        $password = $_POST['password'];

        $query = "SELECT username FROM `users` WHERE `username` = '$username' AND `password` = '$password'";

        $result = mysqli_query($con, $query);

        if ($result) {

            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

            if($row > 0) {
                session_regenerate_id();
                $_SESSION['username'] = $username;
                header('Location: intermediate.php');
            }

        } else {
            header('Location: register.html');
        }

    }

?>