<?php 
	include_once('conn.php');

	// รับค่า name, email, password
	if (!empty($_POST["name"]) || !empty($_POST["email"]) || !empty($_POST["password"])) {
		$name = $_POST["name"];
		$email = $_POST["email"];
		$password =$_POST["password"];

		// คำสั่ง sql ที่ใช้ในการสมัครสมาชิก (เพิ่มข้อมูลลงฐานข้อมูล)
		$sql = "INSERT INTO student(name,email,password) VALUES ('$name','$email','$password')";
		$result = mysqli_query( $con,$sql );
		
		if($result) {
			echo "Register Successfully";
		}
		else {
			echo "some error occured";
		}
	}
	
?>