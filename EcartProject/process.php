<?php
session_start();
 $con= mysqli_connect('localhost','root','','e-store','3308');
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
if(isset($_POST['submit'])){
    
    if(empty($_POST['email']) || empty($_POST['password']))
    {
    
    header("location:index.php?Empty= Please Enter email and password.");
    }
    else{
     
        $uemail=$_POST['email'];
        $upassword=$_POST['password'];
          $uemail= mysqli_real_escape_string($con,$uemail);
         $upassword= mysqli_real_escape_string($con,$upassword);
        $upassword=md5($upassword);
        
    $result = mysqli_query($con,"SELECT email, password FROM Users WHERE email = '".$uemail."' AND  password = '".$upassword."'");
           if (!$result) {
    printf("Error: %s\n", mysqli_error($con));
    exit();
}
/* while($row = mysqli_fetch_array($result)) {
    echo"1";
    echo $row['fieldname']; 
} */
    
        
      if(mysqli_num_rows($result) > 0 )
        { 
            $_SESSION["logged_in"] = true; 
            $_SESSION["naam"] = $uemail; 
            header("location:home.php");
      
        }
        else
        {
            echo 'The username or password are incorrect!';
        }
   
  
    }
}
else{
    echo "not working";
}

?>