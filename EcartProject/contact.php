<!DOCTYPE html>

<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--jQuery library-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript-->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta charset="UTF-8">
    <title>COntact Us</title>
    <link rel="stylesheet" type="text/css" href="index.css">
    <style>
        p{
            font-size: 15px;
        }
    </style>
</head>

    <body >
        <?php
        include 'navbar.php';
        ?>
          <div class="row container" style="margin:70px auto 0px auto">
        <div class="col-md-8 col-sm-6" >
            <h3> Live Support </h3><br>
            <h4>24 hours| 7 days a week|365 days an year Live Technical Support</h4>
            <p>If there is any querry regarding any product, feel free to contact anytime.Lorem ipsum dolor sit amet. Eos cumque 
                quod voluptatibus commodi rem repellat illum ut illum aperiam. 
                Sit nisi voluptates qui dolorum doloribus est veniam galisum vel
                omnis distinctio vel dolorum accusantium. Non iusto rerum vel </p>
        </div>
              <div class="col-md-4 col-sm-6">
                  <img src="contact.png" alt="service"
              </div>
          </div>
    </div>
              
         <div class="row container" style="margin:70px auto 0px auto">
        <div class="col-md-7 col-sm-6" >
            <h3>CONTACT US</h3>
            <form>
                    <div class="form-group">
            <label for='name'>Name</label>
              <input type="text" class="form-control"  placeholder="" name="name" required = "true">
            
        </div>
                <div class="form-group">
                    <label for="email">Email</label>
                                    <input type="email" class="form-control"  placeholder="Email" name="e-mail" required = "true">
                                </div>
                <div class="form-group">
                    <label for="msg">Message</label><br>
                    
                    <textarea id="msg" rows="4" cols="92">
                        
                    </textarea>
                                     </div>
                <div class="form-group">
                     <button type="submit" name="submit" class="btn btn-primary">Submit</button><br>
        </div>
           
        </div>
             <div class="col-md-5 col-sm-6" >
                  <h3>Company Information</h3>
                  <p> 500 Lorem Ipsum Dolor Slit</p>
                  <p>22-56-2-9 Sit Amet,Lorem</p>
                  <p>USA</p>
                  <p>Phone:(00)0000 00 00</p>
                  <p>Fax:(000) 0000 00 00 0</p>
                  <p>Email:info@gmail.com</p>
                  
              </div>
              
         </div>

         
          <?php include 'footer.php' ?>
    </body>
</html>