<?php
include('db.php');

if(isset($_POST['Register']))

{
 $Name = $_POST['full'];
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
if (empty($Name) || empty($relative) || empty($mobile) || empty($age) || empty($caste) || empty($gender) || empty($type) || empty($state) || empty($dist) || empty($village) || empty($pin) || empty($acnumber) || empty($bankname) || empty($ifsc)){
	// One or more values are empty.
  exit('Please complete the registration form');
}else{


    $UserInsert = "INSERT INTO `users` (`Full Name`, `Relative Name`, `Mobile Number`, `Age`, `Caste`, `Gender`, `Farmer Type`, `State`, `District`, `Village`, `Pincode`, `Account Number`, `Bank Name`, `IFSC`) VALUES ('$Name', '$relative', '$mobile', '$age', '$caste', '$gender','$type', '$state', '$dist', '$village', '$pin', '$acnumber', '$bankname', '$ifsc')";
    $query_run = mysqli_query($con,$UserInsert);
      if($query_run){ 
       echo 'Data Inserted Successfully';
      }
    }
 }
?>