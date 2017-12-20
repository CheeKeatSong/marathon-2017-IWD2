<?php
    include "dbh.inc.php" ;

if(isset($_POST['reg'])){
		$firstName = mysqli_real_escape_string($conn,$_POST['fname']);
          $lastName = mysqli_real_escape_string($conn,$_POST['lname']);
          $identificationNo = mysqli_real_escape_string($conn,$_POST['idno']);
          $age = mysqli_real_escape_string($conn,$_POST['age']);
		$email = mysqli_real_escape_string($conn,$_POST['email']);
		$password = mysqli_real_escape_string($conn,$_POST['password']);
          $finding = mysqli_real_escape_string($conn,$_POST['finding']);

			//Error handlers
		//Check for empty fields
		if (empty($firstName) || empty($lastName) || empty($identificationNo) || empty($age) || empty($email) || empty($password)) {
			$msg = "Fields are empty!";


		} else {
			//Check if the input characters are valid
			if (!preg_match("/^[0-9a-zA-z]*$/", $firstName)) {
				$msg = "Invalid characters";


			} else {
				//Check if email is valid
				if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
					$msg = "Email address is invalid";


				} else {
					$sql = "SELECT * FROM useracc WHERE email = '$email'";
					$result = mysqli_query($conn, $sql);
					$resultCheck = mysqli_num_rows($result);

					if ($resultCheck > 0) {
						echo"This email is already registered";

					} else {
						//Securing the password
						$hashedPwd = password_hash($password, PASSWORD_DEFAULT);
						//Insert the user into the db
						$confirmcode = rand(12345,123456);
						$forgotpwcode = rand(12345,123456);
                              $sql = "INSERT INTO useracc (fname,lname,idno,age,email,password,finding,confirmcode,forgetpwcode) VALUES ('$firstName','$lastName','$identificationNo','$age','$email','$hashedPwd',''$finding','$confirmcode','$forgotpwcode');";
                              mysqli_query($conn, $sql);
                              echo '<div class="success">Your account has been created! Please open your email to activate your account</div>';
						// $to = $email;
						// $subject = "Activation";
						// $message =
                              //
						// "<html>
						// <head>
						// 	<title></title>
						// </head>
						// <body>
						// <p>Dear $username, thanks for registering! Please click on the link below to activate your account <br> <a href='localhost/Final Version/includes/verify-email.inc.php?email=$email&code=$confirmcode'>Click here</a>;
						// </body>
						// </html>";
						// $headers = "MIME-Version: 1.0" . "\r \n";
						// $headers .= "Content-type:text/html;charset=UTF-8" . "\r \n";
						// $headers .= 'From: <homely yummies@gmail.com>';
						// $headers .= 'Cc: ruoethren.p@gmail.com';
						// $mail = mail($to, $subject, $message,$headers);
						// if(!$mail)
						// {
						// 	echo"Fail to register";
                              //
						// } else{
                              //
						// 	$sql = "INSERT INTO users (username,email,number,pwd,confirmcode,forgotpwcode) VALUES ('$username','$email','$number','$hashedPwd','$confirmcode','$forgotpwcode');";
						// 	mysqli_query($conn, $sql);
						// 	echo '<div class="success">Your account has been created! Please open your email to activate your account</div>';
						// }


					}
				}
			}
		}


	}
