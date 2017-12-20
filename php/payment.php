<?php 
session_start();

    include( "conn.php" );

    if( isset($_POST['payment']) )
    {
        if(isset($_SESSION['category']) AND ($_SESSION['email_address']) AND ($_SESSION['fname'])) 
        {
            $category = $_SESSION['category'];
            $email = $_SESSION['email_address'];
            $fname = $_SESSION['fname'];
            $tagNo = rand(123,1234);

            //-- Check duplication based on email --//
            $query = mysqli_query( $conn,"SELECT * FROM `tracking` WHERE email='$email'" );

            if( mysqli_num_rows($query) )
            {
                header('location:../registration-section-3.php?msg=ticket+already+purchased');
            } 
            else 
            {
                $query="INSERT INTO `tracking` ( category, fname, email, tagNo) VALUES ('$category','$fname','$email','$tagNo');";

                if( mysqli_query( $conn,$query ) )
                {
                    header('location:../index.php?msg=Payment+successfully.');
                }
                else
                {
                    $status = "Payment failed!";
                    header('location:../registration-section-3.php?msg=Payment+failed.+Please+try+again+later.');
                }
            }
        } 
    }

?>