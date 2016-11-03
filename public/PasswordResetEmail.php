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
    <h1 class="well col-md-8 col-md-offset-2 text-center">Reset Your Password</h1>
    <div class="col-md-8 well col-md-offset-2">
        <div class="row">
            <form>
            <div class="col-md-12">
                <div class="row">
                     <div class="col-md-12 form-group">
                         <label>Enter your email address:</label>
                             <input type="text" placeholder="Email" class="form-control">
                    </div>                          
                     <button type="submit" class="btn btn-lg btn-primary btn-block">Submit</button>       
                    <br></br>
                </div>
            </div>
            </form> 
        </div>
    </div>
</div>
<?php require '../php/footer.php'; ?>
</body>
</html>
