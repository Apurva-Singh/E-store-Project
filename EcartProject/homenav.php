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
                            <li class="active"><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span>  Cart </a> </li>
                            <li class="active"><a href="settings.php"><span class="glyphicon glyphicon-user"></span>  Settings </a> </li>                                                       
                            <li class="active"><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span>  Logout</a> </li>
                            
                        </ul>
                    </div>

                </div>
        </nav>