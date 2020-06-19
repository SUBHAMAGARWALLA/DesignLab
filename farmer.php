<?php

function save(
    $firstname, $lastname, $username, $state, $district, $pincode, $password, $verifypassword, $con
) {
    $userInsert = "INSERT INTO `users` ('firstname', 'lastname', 'username', 'state', 'district', 'pincode', 'password', 'verifypassword') VALUES ('$firstname', '$lastname', '$username', '$state', '$district', '$pincode', '$password', '$verifypassword')";
    $query_run = mysqli_query($con, $userInsert);
    if ($query_run) {
        echo 'Data Inserted Successfully';
        header('Location: intermediate.html');
    }
}
