<?php
    $db_host = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "marathon_db";

    $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

    // Connection error checking with error code
    if(!$conn){
    	die("Connection failure: ".mysqli_connect_error());
    } else{
    	echo "success";
    }
?>
