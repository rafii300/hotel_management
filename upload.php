<?php
 include 'db.php';

 if(isset($_POST["submit"])){
	$title = $_POST["title"];
	$fname = $_POST["fname"];
	$lname = $_POST["lname"];
	$email = $_POST["email"];
	$password = $_POST["password"];
	$nationality = $_POST["nation"];
	$country = $_POST["country"];
	$phone = $_POST["phone"];
    

	$sql = "INSERT INTO user (title,fname,lname,email,password,nationality,country,phone) VALUES ('$title','$fname','$lname','$email','$password','$nationality','$country','$phone')";

	if(mysqli_query($con,$sql)){
		echo "Data Uploaded Succesfully";
		header('Location: login.php?Signed_Up_Successful');
	}
	else{
		echo "Error!";
	}
 }
?>