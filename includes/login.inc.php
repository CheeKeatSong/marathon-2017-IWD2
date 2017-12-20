<?php
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
 ?>
