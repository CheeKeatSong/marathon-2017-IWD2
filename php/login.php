<?php
    if(isset($_POST['login']))
    {
        session_start();
        include('conn.php');

        //SQL inject prevention
        $email      = mysqli_real_escape_string($conn,$_POST['email']);
        $password   = mysqli_real_escape_string($conn,$_POST['password']);
        $s_password = md5($password);

        $query = mysqli_query( $conn,"SELECT * FROM `useracc` WHERE email='$email' && password='$s_password'" );
        
        if ( mysqli_num_rows($query) == 0 )
        {
            header('location:../login.php?msg=email+or+password+not+correct');
        }
        else
        {
            $row = mysqli_fetch_assoc( $query );
            $_SESSION['user_session'] = $row['uid'];
            $_SESSION['email_address'] = $row['email'];
            $_SESSION['fname'] = $row['fname'];
                        
            header('location:../index.php?msg=Login+successful!'); 
        }
    }
    else
    {
        header('location:../index.php');
    }
?>
