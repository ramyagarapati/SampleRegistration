<?php
$uname = $_POST["username"];
$pswd = $_POST["password1"];
$mail = $_POST["email"];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "userdb";
try{
	$conn = new mysqli($servername, $username, $password, $dbname);
	if($conn->connect_error){
		die("connection failed:". $conn->connect_error);
	}

	$sql = "INSERT INTO user (UserName, Password, Email) VALUES ('$uname' , '$pswd', '$mail')";

	if($conn->query($sql) === TRUE){
		echo "account created successfully.";
		sleep(1);
		header('location: login.php');
	}
	else{
		echo "failed to create account";
	}
}
catch(Exception $e){
	echo $e;
}
finally{
	$conn->close();
}
?>