<?php

function save(
    $Name,
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
    $con,
    $UserInsert
) {
    $UserInsert = "INSERT INTO `users` (`Full Name`, `Relative Name`, `Mobile Number`, `Age`, `Caste`, `Gender`, `Farmer Type`, `State`, `District`, `Village`, `Pincode`, `Account Number`, `Bank Name`, `IFSC`) VALUES ('$Name', '$relative', '$mobile', '$age', '$caste', '$gender','$type', '$state', '$dist', '$village', '$pin', '$acnumber', '$bankname', '$ifsc')";
    $query_run = mysqli_query($con, $UserInsert);
    if ($query_run) {
        echo 'Data Inserted Successfully';
    }
}
