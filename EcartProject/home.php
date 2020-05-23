<?php 
session_start();
if(!(isset($_SESSION['naam']))){
    header('location:index.php');
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
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="index.css">
                                                                                        
</head>

    <body >
<?php 
include 'homenav.php' ?>
        
         <div class="container" style="margin:100px auto 0px auto">
    <div class="row text-center">
        <div class="col-md-4 col-sm-6" >
            <div class="panel panel-default" style="border-bottom:none;">
                <div class="panel-heading" style="text-align: left">Mobile 1</div>
            <a href="#" class="thumbnail"><img src="m1.jpg" alt="camera" class="img-responsive" style="height:161px;">
            
                <div class="caption">
             
                <p>Free Watch, 4GB RAM, 16GB Internal RAM,Rs.90,000 </p>
                <button type="button" class="btn btn-primary btn-block">Add To Cart!</button>
        </div>
            
                 </a>
            </div>
        </div>
    <div class="col-md-4 col-sm-6">
         <div class="panel panel-default" style="border-bottom:none;">
                <div class="panel-heading" style="text-align: left">Mobile 2</div>
            <a href="#" class="thumbnail"><img src="m2.jpg" alt="camera" class="img-responsive" style="height:161px;">
            <div class="caption">
                
                <p>Sensitive touch,4GB RAM, 16GB Internal RAM,Rs.40,000</p>
                <button type="button" class="btn btn-primary btn-block">Add To Cart!</button>
        </div>
                 </a>
         </div>
    </div>
        <div class="col-md-4 col-sm-6">
             <div class="panel panel-default" style="border-bottom:none;">
                <div class="panel-heading" style="text-align: left">Mobile 3</div>
            <a href="#" class="thumbnail"><img src="m3.jpg" alt="camera" class="img-responsive" style="height:161px;">
            <div class="caption">
                <p>HD Resolution,4GB RAM, 16GB Internal RAM,Rs.50,000</p>
                <button type="button" class="btn btn-primary btn-block">Add To Cart!</button>
        </div>
                 </a>
             </div>
    </div>
    </div>
            
            <div class="row text-center">
                <div class="col-md-4 col-sm-6">
            <div class="panel panel-default" style="border-bottom:none;">
                <div class="panel-heading" style="text-align: left">Mobile 4</div>
                <a href="#" class="thumbnail"><img src="m4.jpg" alt="phone" class="img-responsive" style="height:161px;">
            <div class="caption">
             
                <p>Big Screen, 4GB RAM, 16GB Internal RAM,Rs.60,000 </p>
                <button type="button" class="btn btn-primary btn-block">Add To Cart!</button>
        </div>
                 </a>
            </div>
        </div>
    <div class="col-md-4 col-sm-6">
         <div class="panel panel-default" style="border-bottom:none;">
                <div class="panel-heading" style="text-align: left">Mobile 5</div>
            <a href="#" class="thumbnail"><img src="m5.jpg" alt="phone" class="img-responsive" style="height:161px;">
            <div class="caption">
                
                <p>Big Screen, 4GB RAM, 32GB Internal RAM,Rs.60,000</p>
                <button type="button" class="btn btn-primary btn-block">Add To Cart!</button>
        </div>
                 </a>
         </div>
    </div>
        <div class="col-md-4 col-sm-6">
             <div class="panel panel-default" style="border-bottom:none;">
                <div class="panel-heading" style="text-align: left">Mobile 6</div>
            <a href="#" class="thumbnail"><img src="m6.jpg" alt="phone" class="img-responsive" style="height:161px;">
            <div class="caption">
                <p>Free airpods, 4GB RAM, 16GB Internal RAM,Rs.90,000</p>
                <button type="button" class="btn btn-primary btn-block">Add To Cart!</button>
        </div>
                 </a>
             </div>
    </div>
    </div>
        </div>
    </body>
</html>

