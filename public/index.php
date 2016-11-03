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

  <div id="index" class="jumbotron">
    <h1>COMP344</h1>
    <br><br>
    <h2>"SURS"</h2>
    <br>
    <p>Sub User Registration Subsystem</p>
    <br><br><br><br><br>
  </div>

  <br><br><br>
  <div class="row">
      <h2>Password Reset Pages (For reference, get rid of this section later.)</h2>

    <div class="col-md-4">
    <p><a href="PasswordResetEmail.php">Password Reset (Email)</a></p>
    <p><a href="PasswordResetQuestions.php">Password Reset (Questions)</a></p>
    <p><a href="PasswordResetPassword.php">Password Reset (Password)</a></p>
    <p><a href="success.php">Successful Registration</a></p>
    <p><a href="successPassword.php">Successful password reset</a></p>
    <p><a href="failPassword.php">Failed password reset</a></p>

  </div>
</div>


<?php require '../php/footer.php'; ?>
</body>
</html>
