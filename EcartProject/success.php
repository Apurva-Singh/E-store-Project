<?php 
session_start();
if(!(isset($_SESSION['naam']))){
    header('location:index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--jQuery library-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript-->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta charset="UTF-8">
    <title>Success</title>
    <link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar bar"></span>
                    <span class="icon-bar bar"></span>
                    <span class="icon-bar bar"></span>
                </button>
                <a href="home.php" class="navbar-brand" style="margin-left: 40px;">E-Store</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                     <li class="active"><a href="settings.php"><span class="glyphicon glyphicon-cog"></span>  Settings </a> </li>
                    <li class="active"><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span>  Logout </a> </li>
                </ul>

            </div>
        </div>
    </nav>
<div class="container-fluid" style="margin:auto;margin-top:200px;text-align: center;">
<div class="jumbotron" style="margin:auto; ">
    <p>Your order is confirmed. Thank you for shopping with us.Your order will be delivered shortly.</p>
   
</div>
    <hr>
    
    <p style="font-size:20px;">Order more items <a href="home.php"> here. </a></p>
</div>
</body>
</html>