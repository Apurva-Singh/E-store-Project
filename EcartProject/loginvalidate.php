<?php
    $error=null;
    
    
   $con= mysqli_connect('localhost','root','','e-store','3308');
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $email = mysqli_real_escape_string($con,$_POST['email']);
      $password = mysqli_real_escape_string($con,$_POST['password']); 
      
      $sql = "SELECT id FROM admin WHERE email = '$email' and password = '$password'";
      $result = mysqli_query($con,$sql);
     
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if(mysqli_num_rows($result) == 1) {
         session_register("email");
         $_SESSION['login_user'] = $email;
         echo "w";
         header("location: home.php");
      }else {
         $error = "Your Login Name or Password is invalid";
         echo"error";
      }
   }

    
    
    
    
    
    ?>