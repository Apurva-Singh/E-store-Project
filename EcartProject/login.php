
        
<div class="modal fade" id="loginmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Login</h5>
       <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>-->
      </div>
      <div class="modal-body">
        <p> don't have an account? <a href="signup.php">Register</a></p>
      
        
        
        <?php
       if(@$_GET['invalid']==true)
       {
           ?>
        
        <div class="alert-light text-danger text-center mt-3 py-3"> <?php echo $_GET['invalid'] ?> </div>
       <?php
        }
       ?>
        <form method="post" action="process.php">
              <div class="form-group">
                  <input type="email" class="form-control" name="email" placeholder="Email">
              </div>
              <div class="form-group">
                  <input type="password" class="form-control" name="password" placeholder="Password">
              </div>
            <button type="submit" class="btn btn-primary" name="submit">Login</button><br>
          </form>
          <br>
           <?php
       if(@$_GET['Empty']==true)
       {
           ?>
        
        <div class="alert-light text-danger text-center mt-3 py-3"> <?php echo $_GET['Empty'] ?> </div>
       <?php
        }
       ?>
          <a href="forget.php" >Forget Password?</a>
      </div>

    </div>
  </div>
</div>

