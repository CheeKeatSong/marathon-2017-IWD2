<!-- TODO: Database connection login -->
<?php
    $db_host = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "marathon_db";

    $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
    
    // Connection error checking with error code
    if ( mysqli_connect_errno() ) 
    {
        die("Connection to database failed! " . mysqli_connect_error());
    }
?>  