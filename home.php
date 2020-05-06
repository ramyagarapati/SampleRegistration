<?php

$mail = $_POST['mail'];
$pswd = $_POST['password'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "userdb";

$conn = new mysqli($servername, $username, $password, $dbname);
	if($conn->connect_error){
		die("connection failed:". $conn->connect_error);
	}
	
$sql = "SELECT * FROM user WHERE Email = '$mail' and Password = '$pswd' ";
 $result = $conn->query($sql);
 
 
 if($result -> num_rows >= 1){
	 while ($show_data= $result->fetch_assoc()) {
		 echo "<br>  mail : " . $show_data['Email']."<br>";
		  echo "<br>  UserName : " . $show_data['UserName']."<br>";
	 }

  }

?>  
	