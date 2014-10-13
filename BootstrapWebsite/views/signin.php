<!DOCTYPE html>
<html class="full" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>CreativeCode+</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">
  </head>
<?php
// show potential errors / feedback (from login object)
if (isset($login)) {
    if ($login->errors) {
        foreach ($login->errors as $error) {
            echo $error;
        }
    }
    if ($login->messages) {
        foreach ($login->messages as $message) {
            echo $message;
        }
    }
}
?>
  <body>
    <div class="container">
        <a class="btn btn-default btn-primary" type="button" href="index.php">Return</a>
        
      <form class="form-signin" role="form" method="post" action="index.php" name="loginform">
        <h2 class="form-signin-heading">To access admin, enter details:</h2>
          
        <!-- <input type="email" class="form-control" placeholder="Email address" required autofocus>
        <input type="password" class="form-control" placeholder="Password" required> -->
        
        <input id="login_input_username" class="login_input" type="text" name="user_name" required />
        <input id="login_input_password" class="login_input" type="password" name="user_password" autocomplete="off" required />
          
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <!-- <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button> -->
        <input class="btn btn-lg btn-primary btn-block" type="submit"  name="login" value="Log in" />
      </form>

    </div> <!-- /container -->
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>