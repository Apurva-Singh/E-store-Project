
<nav class="navbar navbar-default navbar-fixed-top">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar">
                            <span class="iconbar"></span>
                            <span class="iconbar"></span>
                            <span class="iconbar"></span>
                        </button>
                        <?php if(!(isset( $_SESSION['naam']))){ ?>
                        <a href="index.php" class="navbar-brand" style="margin-left: 20px;">E-Store</a>
                        <?php }
                        
                        else{ ?>
                        <a href="home.php" class="navbar-brand" style="margin-left: 20px;">E-Store</a>
                        
                            
                      <?php  } ?>

                        
                    </div>
                    <div class="collapse navbar-collapse" id="mynavbar">
                        <ul class="nav navbar-nav navbar-right">
                           
                            <li class="active"><a href="signup.php"><span class="glyphicon glyphicon-user"></span>  SignUp </a> </li>                         
                            <li class="active"> <a href="#" data-toggle="modal" data-target="#loginmodal"><span class="glyphicon glyphicon-log-in"></span>   Login</a></li>
                            <li class="active"><a href="about.php"><span class="glyphicon glyphicon-th-list"></span>  About Us</a> </li>
                            <li class="active"><a href="contact.php"><span class="glyphicon glyphicon-phone"></span>  Contact Us </a> </li>
                        </ul>
                    </div>

                </div>
        </nav>


<?php include 'login.php'; ?>
<?php
         
       if(@$_GET['Empty']==true)
       {
           ?>
        
        <div class="alert-light text-danger text-center mt-3 py-3"> <?php echo $_GET['Empty'] ?> </div>
       <?php
        }
       ?>
