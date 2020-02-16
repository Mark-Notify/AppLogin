<?php 
	include_once('conn.php');

	// รับค่า name, email, password
	$name = $_POST["name"];
	$email = $_POST["email"];
	$password =$_POST["password"];

	// คำสั่ง sql ที่ใช้ในการสมัครสมาชิก (เพิ่มข้อมูลลงฐานข้อมูล)
	$sql = "INSERT INTO student(name,email,password) VALUES ('$name','$email','$password')";
	$result = mysqli_query( $con,$sql );
	
	if($result) {
		echo "registered successfully";
	}
	else {
		echo "some error occured";
	}
?>