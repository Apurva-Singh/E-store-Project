<?php

session_start();
if(!(isset($_SESSION['naam']))){
    header('location:index.php');
}
else{
$con= mysqli_connect('localhost','root','','e-store','3308');
$msg ="";
if(isset($_POST['submit'])){
$oldpass=$_POST['oldpassword'];
    $mail= $_SESSION['naam'];
    $oldpass = mysqli_real_escape_string($con,$oldpass);
    $oldpass=md5($oldpass);
    $newpass= $_POST['newpassword'];
    $newpass = mysqli_real_escape_string($con,$newpass );
    $newpass=md5($newpass);
    $repass= $_POST['retypepassword'];
    $repass= mysqli_real_escape_string($con,$repass );
    $repass=md5($repass);
    $sql=mysqli_query($con,"SELECT password FROM users where password='$oldpass' && email='$mail'");
    $num=mysqli_fetch_array($sql);
    if($num>0)
    {
    if($newpass == $repass){
       $update= mysqli_query($con, "UPDATE users SET password= '".$newpass."' WHERE email = '".$mail."'");   
       
              if (!$update) {
    printf("Error: %s\n", mysqli_error($con));
    exit();
}
        else
        { 
            $msg= "Password Updated";
            header("location:home.php");
      
        }
    
    }
    else{
     echo "Password does not match.Please retype the same password.";
}}
else{
    echo "Old Password does not match.";
}
    }
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
    <title>Update Password</title>
    <link rel="stylesheet" type="text/css" href="index.css">
 
</head>

    <body >
<?php 
include 'homenav.php' ?>
        <div class="container" style="margin-top:100px;"> 
            <div class="row">
                <div class="col-md-8 col-sm-12" style="float:center;">
        <form method="post" action=" ">
            
                <h3>Change Password</h3>
                <div class="form-group">
                    <input type="password" class="form-control"  placeholder="Old Password" name="oldpassword" required = "true">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control"  placeholder="New Password" name="newpassword" required = "true">
                </div>
        <div class="form-group">
                    <input type="password" class="form-control"  placeholder="Re-type NewPassword" name="retypepassword" required = "true">
                </div>
        <button type="submit" name="submit" class="btn btn-primary" style="float:left;">Change Password</button><br>
        </form>        
        </div>
            </div>
        </div>
    </body>
</html>

<?php 
echo $msg;
?>