<?php
	$email = $_POST['email'];
	$password = $_POST['pswd'];
	$conn = mysqli_connect('localhost','root','','login');
	if(isset($email)){
		$sql = "select * from signlog where email='$email' AND password='$password' ";
		$r = mysqli_query($conn,$sql);

		if (mysqli_num_rows($r)==1) {
			echo "<h1> SUCCESS </h1>";
		}
		else
		{
			echo "Wrong DETAILED";
			exit();
		}
	}
?>