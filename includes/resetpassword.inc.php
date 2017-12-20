<?php
include 'dbh.inc.php';
session_start();

$email = $_GET['email'];
$code = $_GET['code'];
$newcode = rand(12345,123456);
$query = "SELECT * FROM users WHERE email='$email';";
$result = mysqli_query($conn,$query);
while($row = mysqli_fetch_assoc($result)){
	$dbcode = $row['forgotpwcode'];
}

if($dbcode != $code){
	echo"Sorry code did not match";
} else{
	$query1 = "UPDATE users SET forgotpwcode = '$newcode' WHERE email = '$email';";
	$result1 =mysqli_query($conn,$query1);
	if(!mysqli_query($conn,$query)){
		echo"failed";
	}else{
		$_SESSION['user_email'] = $email;
		header("Location: ../reset-pw.php");
	}

}
