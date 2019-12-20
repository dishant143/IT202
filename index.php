<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Login</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

</head>
<body style="margin-top: 10%;">
<div class="login-box" style="width: 360px; padding:15px; margin: 0 auto; border: 1px solid #ddd;">
  
  <div class="login-box-body">
    
      <h3 class="text-center">Login</h3>

            <?php 
               // Error Message if Login detail wrong.
              if(isset($_SESSION['error']))
                {  ?>
                  <div class="alert alert-danger alert-dismissible">
                <?php echo $_SESSION['error']; ?>
              </div>
            <?php } 
                  unset($_SESSION['error']);
            ?>

            <!-- Success Message -->
            <?php 
              if(isset($_SESSION['success'])) 
                {  ?>
                  <div class="alert alert-success alert-dismissible">
                    <?php echo $_SESSION['success']; ?>
                  </div>
            <?php } 
                    unset($_SESSION['success']);
            ?>


            <!-- Logout Message When User Logout -->
            <?php 
              if(isset($_SESSION['logoutmsg'])) 
                {  ?>
                  <div class="alert alert-success alert-dismissible">
                    <?php echo $_SESSION['logoutmsg']; ?>
                  </div>
            <?php } 
                    unset($_SESSION['logoutmsg']);
            ?>


    <form action="login-script.php" method="post">
      <div class="form-group has-feedback">
        <input type="email" name="email" class="form-control" placeholder="Email" >
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="password" class="form-control" placeholder="Password" >
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        
        <div class="col-xs-4 pull-right">
            <button type="submit" name="login" class="btn btn-success btn-block">Login</button>
        </div>
      </div>
    </form>

    
    <br>
    <a href="Estates-Registration-Layout.php" class="btn btn-success btn-block">Register Now</a><p></p>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

</body>
</html>
