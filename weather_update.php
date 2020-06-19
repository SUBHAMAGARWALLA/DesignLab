<?php

include('db.php');

session_start();

$username = $_SESSION['username'];

$query = "SELECT `pincode` FROM `users` WHERE `username` = '$username'";

$query_run = mysqli_query($con, $query);

if(mysqli_num_rows($query_run) > 0) {




    while($row = mysqli_fetch_assoc($query_run)) {
        $pin = $row['pincode'];
        $country="IN"; //Two digit country code
        $url="http://api.openweathermap.org/data/2.5/weather?zip=".$pin.",".$country."&units=metric&cnt=7&lang=en&appid=88bb27b76fea833ed2b1772e953626d0";
        echo "<font color=purple font face='courier' size='8pt'>Weather Condition is:<br><br>";
        echo "<strong><font color=Indigo font face='courier' size='6pt'>$pin</strong><br>";
        echo "<body style='background-color:Azure'>";
        $json=file_get_contents($url);
        $data=json_decode($json,true);
        echo "Temperature:";
        echo $data['main']['temp']."<br>";
        echo "Weather:";
        echo $data['weather'][0]['main']."<br><br><br>";
    }
    
}


?>