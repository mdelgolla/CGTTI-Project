<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cgtti";

$uname = $_POST['username'];
$pw = $_POST['password'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$squery1 = mysqli_query($conn, "SELECT pw FROM officer WHERE uname = '$uname' ");
$userData = mysqli_fetch_array($squery1, MYSQL_ASSOC);
$squery2 = mysqli_query($conn, "SELECT * FROM officer WHERE pw = '$pw' ");
$pwData = mysqli_fetch_array($squery2, MYSQL_ASSOC);


if (mysqli_num_rows($squery1)>0) {
	if (mysqli_num_rows($squery2)>0) {
		if($userData["pw"] == $pw ){
			echo("login successfull");
		}
	}
	else{
		echo("Invalid password");
	}
}
else{
	echo("login failed");
}

$conn->close();
?>

