<html>
<head>
  <title></title>
  <?php require_once '../php/styles.php'; ?>
  <style>

  </style>
</head>
<body>
<?php require '../php/nav.php'; ?>

<div class="container content">
    <div id="login-overlay" class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
              <h4 class="modal-title" id="myModalLabel">Login to <b>SURS</b></h4>
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
                                  <input type="password" class="form-control" name="inputCurrentPassword" placeholder="Password" value="" required="" title="Please enter your password">
                                  <span class="help-block"><a href="PasswordResetEmail.php">Forgot your password?</a></span>
                              </div>
                              <button type="submit" value="login" name="submit" class="btn btn-primary btn-block">Login</button>
                          </form>
                      </div>
                  </div>
                  <div class="col-xs-6">
                      <p class="lead"><h3>Don't have an account?</h3></p>
                        <span style="font-size:15em;" class="glyphicon glyphicon-user col-md-offset-2"></span>
                      <p><a class="btn btn-info btn-block" href="CreateAccount.php">Register</a></p>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
<?php require '../php/footer.php'; ?>
</body>
</html>
