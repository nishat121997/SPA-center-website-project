<?php

$msg = "";
if(isset($_POST['submit'])){
	

	$host = "localhost";
	$user = "root";
	$pass = "";
	$database = "admin";

	$conn = mysqli_connect($host,$user,$pass,$database);


	if($conn){
		//echo "Database connected successfully";
	}else{
		die("Got Error : ". mysqli_connect_error());
	}


	$name = $_POST['name'];
	$email = $_POST['email'];
	$mobile = $_POST['mobile'];
	$service = $_POST['service'];
	$bdate = $_POST['bdate'];
	$btime = $_POST['btime'];
	$message = $_POST['message'];

	$sql = "INSERT INTO booking"."(name,email,mobile,service,bdate,btime,message) "."VALUES ('$name','$email','$mobile','$service','$bdate','$btime','$message')";


	if(mysqli_query($conn,$sql)){
		
			$msg = "Booking is successfully done";
		//echo $msg;
	}else{
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

}























?>