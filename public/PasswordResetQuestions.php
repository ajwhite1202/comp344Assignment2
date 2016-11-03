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
            <h3 class="text-center"> Please answer the following questions to reset your password</h3>
            <br></br>
        <form>
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12 form-group">
                        <label>Secret Question 1</label>
                        <input type="text" name="answer1" placeholder="Answer" class="form-control">
                    </div>       
                    <div class="col-md-12 form-group">
                        <label>Secret Question 2</label>
                        <input type="text" name="answer2" placeholder="Answer" class="form-control">
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
