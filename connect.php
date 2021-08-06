<?php

	$operation = $_POST['input-group'];

	//Database connection
	$conn = new mysqli('localhost','root','','webtech');
	if($conn->connect_error){
		die('Connection Failed :'.$conn->connect_error);
	}else{
		if($operation=="register"){
			$register_name = $_POST['register-name'];
			$register_email = $_POST['register-email'];
			$register_password = $_POST['register-password'];
			$sql = "insert into credentials(name,email,password) values('".$register_name."','".$register_email."','".$register_password."')";
			$result = $conn->query($sql);
			echo '<script>alert("Register Successfull")</script>'; 
		}elseif ($operation=="login") {
			$login_email = $_POST['login-email'];
			$login_password = $_POST['login-password'];
			$sql = "insert into logins(email) values('".$login_email."')";
			$result = $conn->query($sql);
			print($sql);
			$sql = "select * from credentials where email= '".$login_email."'";
			$result = $conn->query($sql);
			if($result->num_rows>0) {
				$sql = "select * from credentials where email='".$login_email."' AND  password='".$login_password."'";
				$result = $conn->query($sql);

				if($result->num_rows>0){
					echo '<script>alert("Login Successfull")</script>';
					$sql = "select * from credentials where email='".$login_email."' AND  password='".$login_password."' AND type='admin'";
					$result = $conn->query($sql);

					if($result->num_rows>0)
						header('Location: Admin.html');
					else
						header('Location: Home.html');

				}else{
					echo '<script>alert("Invalid Password")</script>';
				}
				
			}else{
				echo '<script>alert("Invalid Email")</script>';
			}
		}
		$conn->close();
	}
?>
