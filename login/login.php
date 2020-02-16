
<?php 
	include_once('conn.php');
	
	// รับค่า email, password
	$email = $_POST["email"];
	$password = $_POST["password"];

	// คำสั่ง sql ที่ใช้ในการ Login
	$sql = "SELECT * FROM student WHERE  email = '$email' AND password = '$password'";
	$result = mysqli_query($con,$sql);
	
	if($result->num_rows > 0){
		echo "login successfully" ;
	}else{
		echo "User not found";
	}
?>