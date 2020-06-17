<?php

function save(
    $name,
    $relative,
    $mobile,
    $age,
    $caste,
    $gender,
    $type,
    $state,
    $dist,
    $village,
    $pin,
    $acnumber,
    $bankname,
    $ifsc,
    $con
) {
    $userInsert = "INSERT INTO `users` (`Full Name`, `Relative Name`, `Mobile Number`, `Age`, `Caste`, `Gender`, `Farmer Type`, `State`, `District`, `Village`, `Pincode`, `Account Number`, `Bank Name`, `IFSC`) VALUES ('$name', '$relative', '$mobile', '$age', '$caste', '$gender','$type', '$state', '$dist', '$village', '$pin', '$acnumber', '$bankname', '$ifsc')";
    $query_run = mysqli_query($con, $userInsert);
    if ($query_run) {
        echo 'Data Inserted Successfully';
    }
}
