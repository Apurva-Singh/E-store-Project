
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
    <title>Cart</title>
    <link rel="stylesheet" type="text/css" href="index.css">
 
</head>

    <body >
    <?php 
    include 'homenav.php' ?>
      <div class="container" style="width:50%;margin:auto;margin-top: 200px; font-size:20px;">
  <div class="table-responsive">
    <table class="table">
        <thead>
        <tr><th>Item Number</th>
        <th> Item Name</th>
        <th> Price</th>
        <th> </th>
        </tr>
</thead>
        <tbody>
        <tr class="active">
            <td></td>
            <td>Total</td>
            <td></td>
            <td> <a href="success.php"><button type="button" class="btn btn-primary btn-block">Confirm Order</button></a> </td>
        </tr>
        </tbody>
    </table>
</div>
</div>

    </body>
</html>