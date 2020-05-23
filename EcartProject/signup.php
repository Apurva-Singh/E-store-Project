<?php
    $error=null;
   
if(isset($_POST['submit'])){
    //getting data
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $phone=$_POST['phone'];
    $city=$_POST['city'];
    $address=$_POST['address'];
   
    // $regex_email= "/^[_a-z0-9-]+(\.[_a-z00-9-]+(\.[a-z0-9-]*(\.[a-z]{2,3})$/";
     
  
         $con= mysqli_connect('localhost','root','','e-store','3308');
         
         $name= mysqli_real_escape_string($con,$name);
          $email= mysqli_real_escape_string($con,$email);
         $password= mysqli_real_escape_string($con,$password);
          $phone= mysqli_real_escape_string($con,$phone);
           $city= mysqli_real_escape_string($con,$city);
          $address= mysqli_real_escape_string($con,$address);
             $password=md5($password);
         $query= 'select * from users where name="$name" and email="$email" ';
         $select_query= mysqli_query($con, $query);
         if(mysqli_num_rows($select_query)===0){
             $user_registration_query = "insert into users(name,email,password,phone,city,address) values ('$name','$email', '$password', '$phone','$city','$address')";
             $user_registration_submit = mysqli_query($con, $user_registration_query) or die(mysqli_error($con));
             echo "<br>"
             . "<br>"
                     . "<br>";
             include 'registered.php';
         }
         else{
             $error .= "<p>ALready Registered</p>";         }
     }
?>
<!DOCTYPE html>

<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--jQuery library-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript-->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta charset="UTF-8">
    <title>Signup</title>
    <link rel="stylesheet" type="text/css" href="index.css">
 
</head>

    <body >
        <?php
        include 'navbar.php';
        ?>
        
        <div class="row container" style="margin:130px auto 0px 150px">
           
            <div class="col-md-6 col-sm-6">
                    <img src="signup.jpg" height="361px" width="461px">
                </div>
             
                <div class="col-md-6 col-sm-6">
                    <h3>Sign Up</h3>
                    <form method="post" action=" ">
                               <div class="form-group" >
            
              <input type="text" class="form-control"  placeholder="Name" name="name" required = "true">
             
        </div>
                <div class="form-group">
                    
                                    <input type="email" class="form-control"  placeholder="Email" name="email" required = "true"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
                          
                </div>
                <div class="form-group" >
                    <input type="password" class="form-control"  placeholder="Password" name="password" required = "true"   pattern=".{6,}" title="Six or more characters">
               
                </div>
                <div class="form-group">
                    
                    <input type="tel" class="form-control"  placeholder="Contact" name="phone" maxlength="10" required = "true" pattern="[0-9]{10}$">
                   </div>
               <div class="form-group">
                    
                    <input type="text" class="form-control"  placeholder="City" name="city" required = "true">
                </div>
               <div class="form-group">
                    
                    <input type="text" class="form-control"  placeholder="address" name="address" required = "true">
                </div>
                    
                    <button type="submit" name="submit" class="btn btn-primary" style="float:right;">Sign Up</button><br>
                </form>
                </div>
            </div>
        <div class="footer" style="margin-top: 59px;padding-top: 2px;">
        <?php include 'footer.php' ?>
        </div>
        <?php 
        echo $error;
        ?>
    </body>
</html>