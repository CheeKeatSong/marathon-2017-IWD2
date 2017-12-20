<?php
    include( "conn.php" );
    session_start();

    if( isset($_POST['reg']) )
    {
        $fname        = $_POST['fname'];
        $lname        = $_POST['lname'];
        $idno         = $_POST['idno'];
        $age          = $_POST['age'];
        $email        = $_POST['email'];
        $finding      = $_POST['finding'];
        $password     = $_POST['password'];
        $s_password   = md5($password);

        //-- Check duplication based on email --//
        $query = mysqli_query( $conn,"SELECT * FROM `useracc` WHERE email='$email'" );

        if( mysqli_num_rows($query) )
        {
            header('location:../registration-section-2.php?msg="account-already-exist"');
        }
        else
        {
            $query="INSERT INTO `useracc` (password, fname, lname, idno, age, email, finding) VALUES ('$s_password','$fname','$lname','$idno','$age','$email','$finding')";

            if( mysqli_query($conn,$query) )
            {
                $status = "Registeration Success";
                echo $status;
                
                //Perform login after success registration
                $query = mysqli_query( $conn,"SELECT * FROM `useracc` WHERE email='$email' && password='$s_password'" );
        
                if ( mysqli_num_rows($query) == 0 )
                {
                    header('location:../registration-section-2.php?msg=error');
                }
                else
                {
                    $row = mysqli_fetch_assoc( $query );
                    $_SESSION['user_session']  = $row['uid'];
                    $_SESSION['email_address'] = $row['email'];
                    $_SESSION['fname'] = $row['fname'];

                    header('location:../registration-section-3.php?msg=success'); 
                }
            }
            else
            {
                $status = "Registeration failed!";
                echo $status;
                header('location:../registration-section-2.php?msg="Registeration failed!"');
            }
        }
    }
?>
