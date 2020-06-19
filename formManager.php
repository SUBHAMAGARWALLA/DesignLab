<?php
include('db.php');
include('farmer.php');

if (isset($_POST['register'])) {
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $username = $_POST['username'];
  $state = $_POST['state'];
  $district = $_POST['district'];
  $pincode = $_POST['pincode'];
  $password = $_POST['password'];
  $verifypassword = $_POST['verifypassword'];
  
  // Make sure the submitted registration values are not empty.
  if (empty($firstname) || empty($lastname) || empty($username) || empty($state) || empty($district) || empty($pincode) || empty($password) || empty($verifypassword)) {
    // One or more values are empty.
    exit('Please complete the registration form');
  } elseif(strcmp($password, $verifypassword) !== 0) {
    //password and verify password are different
    exit('Password and Verify password mismatch');
  } else {
    save($firstname, $lastname, $username, $state, $district, $pincode, $password, $verifypassword, $con);
  }
}
