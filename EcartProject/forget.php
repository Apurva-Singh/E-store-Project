<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--jQuery library-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript-->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<title>Reset Password  </title>
	
</head>
<body>
<div class="container">

    <h2 class="text-center" style="text-align: center;color: turquoise;">Provide e-mail to receive password</h2>
<hr>
	<?php 
        
        
		if(isset($_POST['sendmail'])) {
                    
                 $con= mysqli_connect('localhost','root','','e-store','3308');
                 
                         $uemail=$_POST['email'];  
                          $result = mysqli_query($con,"SELECT email, password FROM Users WHERE email = '".$uemail."'");
                             
      if(mysqli_num_rows($result) > 0 )
        { 
                       function getToken($length){
                        $token = "";
                        $codeAlphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
                        $codeAlphabet.= "abcdefghijklmnopqrstuvwxyz";
                        $codeAlphabet.= "0123456789";
                        $max = strlen($codeAlphabet);

                       for ($i=0; $i < $length; $i++) {
                           $token .= $codeAlphabet[random_int(0, $max-1)];
                       }

                       return $token;
                   }
                   $npass = getToken(10);
                $newpass= md5($npass);
                    
			require 'PHPMailerAutoload.php';
			require 'credential.php';

			$mail = new PHPMailer;

			// $mail->SMTPDebug = 4;                               // Enable verbose debug output

			$mail->isSMTP();                                      // Set mailer to use SMTP
			$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
			$mail->SMTPAuth = true;                               // Enable SMTP authentication
			$mail->Username = EMAIL;                 // SMTP username
			$mail->Password = PASS;                           // SMTP password
			$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
			$mail->Port = 25;                                    // TCP port to connect to

			$mail->setFrom(EMAIL, 'E-Store');
			$mail->addAddress($_POST['email']);     // Add a recipient

			$mail->addReplyTo(EMAIL);
			// print_r($_FILES['file']); exit;
			
			$mail->isHTML(true);                                  // Set email format to HTML

			$mail->Subject = 'Forget Password';
			$mail->Body    = '<div style="border:2px solid blue;"><br>Your new password is     <b>'.$npass.'</b></div>';
			$mail->AltBody = '<div style="border:2px solid blue;">Your new password is<b>in bold!</b></div>';

			if(!$mail->send()) {
			    echo 'Message could not be sent.';
			    echo 'Mailer Error: ' . $mail->ErrorInfo;
			} else {
			    echo "Message has been sent";
                         $query= "UPDATE users SET password= '".$newpass."' WHERE email = '".$uemail."'";
                         $setpass= mysqli_query($con,$query);
                            
			}
                }
                else
        {
            echo 'The email provided is incorrect!';
        }
                        }
                 
	 ?>
<div class="container-fluid" style="margin:auto;margin-top:200px;text-align: center;">
<div class="jumbotron" style="margin:auto; ">
<div class="row">
    <div class="col-md-9 col-md-offset-2">
        <form method="post" action="">
        	<div class="row">
                <div class="col-sm-9 form-group">
                    <br>
                    <h2>Email:</h2><br><br>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"><br><br>
                </div>
            </div>
    </div>
        
         
    <div class="container">
        <button type="submit" name="sendmail" class="btn btn-lg btn-success " style="float:left">Send</button>
    </div>    
        </form>
	</div>
</div>
</div>
</body>
</html>
