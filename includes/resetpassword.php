<?php
include 'includes/dbh.inc.php';

function createUser($conn){
if(isset($_POST['createUser'])){
		$username = mysqli_real_escape_string($conn,$_POST['name']);
		$email = mysqli_real_escape_string($conn,$_POST['email']);
		$number = mysqli_real_escape_string($conn,$_POST['number']);
		$password = mysqli_real_escape_string($conn,$_POST['password']);

			//Error handlers
		//Check for empty fields
		if (empty($username) || empty($email) || empty($number) || empty($password)) {
			$msg = "Fields are empty!";


		} else {
			//Check if the input characters are valid
			if (!preg_match("/^[0-9a-zA-z]*$/", $username)) {
				$msg = "Invalid characters in username";


			} else {
				//Check if email is valid
				if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
					$msg = "Email address is invalid";


				} else {
					$sql = "SELECT * FROM users WHERE username = '$username'";
					$result = mysqli_query($conn, $sql);
					$resultCheck = mysqli_num_rows($result);

					if ($resultCheck > 0) {
						echo"username is taken";

					} else {
						//Securing the password
						$hashedPwd = password_hash($password, PASSWORD_DEFAULT);
						//Insert the user into the db
						$confirmcode = rand(12345,123456);
						$forgotpwcode = rand(12345,123456);
						$to = $email;
						$subject = "Activation";
						$message =

						"<html>
						<head>
							<title></title>
						</head>
						<body>
						<p>Dear $username, thanks for registering! Please click on the link below to activate your account <br> <a href='localhost/Final Version/includes/verify-email.inc.php?email=$email&code=$confirmcode'>Click here</a>;
						</body>
						</html>";
						$headers = "MIME-Version: 1.0" . "\r \n";
						$headers .= "Content-type:text/html;charset=UTF-8" . "\r \n";
						$headers .= 'From: <homely yummies@gmail.com>';
						$headers .= 'Cc: ruoethren.p@gmail.com';
						$mail = mail($to, $subject, $message,$headers);
						if(!$mail)
						{
							echo"Fail to register";

						} else{

							$sql = "INSERT INTO users (username,email,number,pwd,confirmcode,forgotpwcode) VALUES ('$username','$email','$number','$hashedPwd','$confirmcode','$forgotpwcode');";
							mysqli_query($conn, $sql);
							echo '<div class="success">Your account has been created! Please open your email to activate your account</div>';
						}


					}
				}
			}
		}


	}
}

function loginUser($conn){
	if(isset($_POST['userLogin'])){
	$email = mysqli_real_escape_string($conn,$_POST['email']);
	$password = mysqli_real_escape_string($conn,$_POST['password']);

		//Error handlers
		//Check if inputs are empty
		if (empty($email) || empty($password)) {
			echo"Password is invalid";

		} else {
			$sql = "SELECT * FROM users WHERE email ='$email'";
			$result = mysqli_query($conn,$sql);
			$resultCheck = mysqli_num_rows($result);

			if($resultCheck < 1){
				echo "Account does not exist!";
			} else{
				if($row = mysqli_fetch_assoc($result)){
					if($row['verified'] != 1){
						echo "Please verify your account first!";
					} else{
						$hashedPwdCheck = password_verify($password, $row['pwd']);
						if($hashedPwdCheck == false){
							echo "Password is invalid";
						} elseif($hashedPwdCheck == true) {
							$_SESSION['u_id'] = $row['username'];
                            $_SESSION['u_address'] = $row['address'];
							//$_SESSION['status'];
							header("Location: index.php");
							exit();
						}
					}
				}
			}
		}

	}
}

function forgotPassword($conn){
	$msg;
	if(isset($_POST['forgotPassword'])){
		$email = mysqli_real_escape_string($conn,$_POST['fp-email']);

		if(empty($email)){
			$msg = "Fields are empty";
			echo $msg;
		} else {
			$sql = "SELECT * FROM users where email = '$email';";
			$result = mysqli_query($conn,$sql);
			$resultCheck = mysqli_num_rows($result);
			if($resultCheck < 1){
				$msg = "User does not exists";
				echo $msg;
			} else{
					while($row = mysqli_fetch_assoc($result)){
						$forgotpwcode = $row['forgotpwcode'];
						$username = $row['username'];
						$to = $email;
						$subject = "Activation";
						$message =

						"<html>
						<head>
							<title></title>
						</head>
						<body>
						<p>Dear $username, Please click on the link below to reset your password <br> <a href='localhost/Final Version(2)/includes/resetpassword.inc.php?email=$email&code=$forgotpwcode'>Click here</a>;
						</body>
						</html>";
						$headers = "MIME-Version: 1.0" . "\r \n";
						$headers .= "Content-type:text/html;charset=UTF-8" . "\r \n";
						$headers .= 'From: <homely yummies@gmail.com>';
						$mail = mail($to, $subject, $message,$headers);
						if(!$mail){
							$msg = "Failed to send email";
							echo $msg;
						} else{
							$msg = "Instructions has been sent to your email.";
							echo $msg;
						}
					}
			}
		}
	}
}

function resetPassword($conn){
	if(isset($_POST['resetPassword'])){
		$email = mysqli_real_escape_string($conn,$_POST['email']);
		$newPassword = mysqli_real_escape_string($conn,$_POST['new-password']);
		$hashedPwd = password_hash($newPassword, PASSWORD_DEFAULT);

		$sql = "UPDATE users SET pwd = '$hashedPwd' WHERE email = '$email';";
		$result = mysqli_query($conn,$sql);
		if(!$result){
			echo "failed";
		} else {
			header("Location: login.php");
		}

	}
}
