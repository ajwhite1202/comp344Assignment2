
<head>
     <title>COMP344:Create an Account </title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</head>

<body>
    <div id="login-overlay" class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
              <h4 class="modal-title" id="myModalLabel">Login to <b>COMP344</b></h4>
          </div>
          <div class="modal-body">
              <div class="row">
                  <div class="col-xs-6">
                      <div class="well">
                        <h1>Login</h1>
                          <form id="loginForm" method="POST">
                              <div class="form-group">
                                  <label for="username" class="control-label">Email</label>
                                  <input type="text" class="form-control" name="inputEmail" value="" required="" title="Please enter your username" placeholder="Email Address">
                                  <span class="help-block"></span>
                              </div>
                              <div class="form-group">
                                  <label for="password" class="control-label">Password</label>
                                  <input type="password" class="form-control" name="inputCurrentPassword" placeholder="password" value="" required="" title="Please enter your password">
                                  <span class="help-block"><a href="">Forgot your password?</a></span>
                              </div>
                              <button type="submit" value="login" name="submit" class="btn btn-success btn-block">Login</button>
                          </form>
                      </div>
                  </div>
                  <div class="col-xs-6">
                      <p class="lead"><h3>Don't have an account?</h3></p>
                        <span style="font-size:15em;" class="glyphicon glyphicon-user col-md-offset-2"></span>
                      <p><a href="CreateAccount.php" class="btn btn-primary btn-block">Register</a></p>
                  </div>
              </div>
          </div>
      </div>

  </div>
<script type="text/javascript">

</script>
<footer>
<?php include("includes/footer.html"); ?>

</footer>