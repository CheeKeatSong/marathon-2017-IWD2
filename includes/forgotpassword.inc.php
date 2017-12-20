<?php
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
