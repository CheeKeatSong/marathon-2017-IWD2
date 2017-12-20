<?php

include 'dbh.inc.php';

$email = $_GET['email'];
$code = $_GET['code'];
$query = "SELECT * FROM users WHERE email='$email';";
$result = mysqli_query($conn,$query);
while($row = mysqli_fetch_assoc($result)){
	$dbcode = $row['confirmcode'];
}

if($dbcode != $code){
	echo"Sorry code did not match";
} else{
	$query1 = "UPDATE users SET verified='1' WHERE email = '$email';";
	$result1 = mysqli_query($conn,$query1);
	$query2 = "UPDATE users SET confirmcode = '0' WHERE email = '$email';";
	$result2 = mysqli_query($conn,$query2);
	header("Location: ../login.php");

}
