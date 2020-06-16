<?php
$servername = "localhost";
$username = "root";
$password = "";
$DATABASE_NAME = "designlab";
// Try and connect using the info above.
$con = mysqli_connect($servername, $username, $password, $DATABASE_NAME);
if ( mysqli_connect_errno() ) {
	// If there is an error with the connection, stop the script and display the error.
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}

?>