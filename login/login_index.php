  <?php
      include_once('../include/inrlink.php');
    ?>
  <script>
    $(window).load(function(){
    //  console.clear();
    })
  </script>
<html>
<body>
  <?php
      include_once('../include/loginheader.php');
  
  ?> 
      <div class="container row">
        <div class="col l12 m12 s12">&nbsp;</div>

        <div class="col l3 m3 s12">&nbsp;</div>
        
        <form action="" method="POST" name="loginform" class="col l6 m6 s12">
          <div class="input-field">
                <input id="login" type="email" name="user" required>
                <label for="username">Username</label>
              </div>

              <div class="input-field">
                <input id="password" type="password" name="password" required><!-- pattern="[A-Za-z$_/-0-9]+" required-->
                <label for="password">Password</label>
              </div>
             <div class="col l12 m12 s12">
        <br><br>
        <center>
          <button type="submit"  name="action" class="btn waves waves-effect waves-light loginbtn">Submit</button><br><br>
              <h6><a class="register" data-value="register.php" href="#">Don't Have account? Register Here.</a></h6>
        </center>
      </div>
          </form>

          <div class="col l3 m3 s12">&nbsp;</div>
      </div>
  
</body>
</html>