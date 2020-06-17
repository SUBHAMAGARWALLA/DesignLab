<?php
include('db.php');
include('farmer.php');

if (isset($_POST['Register'])) {
  $name = $_POST['full'];
  $relative = $_POST['relative'];
  $mobile = $_POST['mobile'];
  $age = $_POST['age'];
  $caste = $_POST['caste'];
  $gender = $_POST['gender'];
  $type = $_POST['type'];
  $state = $_POST['state'];
  $dist = $_POST['district'];
  $village = $_POST['village'];
  $pin = $_POST['pin'];
  $acnumber = $_POST['acnumber'];
  $bankname = $_POST['bankname'];
  $ifsc = $_POST['ifsc'];
  // Make sure the submitted registration values are not empty.
  if (empty($name) || empty($relative) || empty($mobile) || empty($age) || empty($caste) || empty($gender) || empty($type) || empty($state) || empty($dist) || empty($village) || empty($pin) || empty($acnumber) || empty($bankname) || empty($ifsc)) {
    // One or more values are empty.
    exit('Please complete the registration form');
  } else {
    save($name, $relative, $mobile, $age, $caste, $gender, $type, $state, $dist, $village, $pin, $acnumber, $bankname, $ifsc, $con);
  }
}
