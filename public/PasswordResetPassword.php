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
   <h1 class="well col-md-8 col-md-offset-2 text-center">Change Your Password</h1>
    <div class="col-md-8 well col-md-offset-2">
        <div class="row">
            <form>
            <div class="col-md-12">
                 <div class="row">
                    <div class="col-md-12 form-group">
                        <label>Current Password</label>
                        <input type="text" name="currentpassword" placeholder="Current Password" class="form-control">
                    </div>       
                    <div class="col-md-12 form-group">
                        <label>New Password</label>
                        <input type="text" name="newpassword" placeholder="New Password" class="form-control">
                    </div>  
                        <div class="col-md-12 form-group">
                        <label>Re-enter Password</label>
                        <input type="text" name="verifyNewPassword" placeholder="Confirm Password" class="form-control">
                    </div>                      
                    <button type="submit" class="btn btn-lg btn-primary btn-block">Submit</button>       
                    <br></br>
                </div>
                </form> 
            </div>
        </div>
    </div>
</div>
<?php require '../php/footer.php'; ?>
</body>
</html>
