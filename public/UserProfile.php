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
    <div class="modal-content col-md-12">
            <div class="container">
            <h1>Account Information</h1>
            </div>
            <form class="form-horizontal col-md-offset-2">
               <div class="form-group">
                    <label for="fullName" class="control-label col-md-2">Full name</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" name="fullName" placeholder="Full Name">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail" class="control-label col-md-2">Email</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" name="inputEmail" placeholder="Email">
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="control-label col-md-2">Password</label>
                    <div class="col-md-6">
                        <input type="password" class="form-control" name="password" placeholder="Password">
                    <a href="PasswordResetEmail.php">
                      <span data-placement="top" data-toggle="tooltip" title="Edit">
                        <div data-title="Edit" data-toggle="modal" data-target="#edit">
                        Change Password<span class="glyphicon glyphicon-edit"></span>
                        </div>
                      </span>                    
                    </a>                    
                    </div>

                </div>

                <div class="container">
                    <h3>Registration Address</h3>
                </div>
               <div class="form-group">
                    <label for="streetNo" class="control-label col-md-2">Street No.</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" name="streetNo" placeholder="Street Number">
                    </div>
                </div>
                <div class="form-group">
                    <label for="streetName" class="control-label col-md-2">Street Name</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" name="streetName" placeholder="Street Name">
                    </div>
                </div>
                <div class="form-group">
                    <label for="suburb" class="control-label col-md-2">Suburb</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" name="suburb" placeholder="Suburb">
                    </div>
                </div>        
                <div class="form-group">
                    <label for="state" class="control-label col-md-2">State</label>
                       <div class="col-md-6">
                        <select class="form-control" name="state">
                            <option>NSW</option>
                            <option>VIC</option>
                            <option>WA</option>
                            <option>QLD</option>
                            <option>NT</option>
                            <option>SA</option>
                            <option>ACT</option>
                            <option>TAS</option>
                         </select>
                        </div>
                </div>
                <div class="form-group">
                    <label for="PostCode" class="control-label col-md-2">Postcode</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" name="Postcode" placeholder="PostCode">
                    </div>
                </div>  
                <div class="form-group">
                    <label for="Country" class="control-label col-md-2">Country</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" name="Country" placeholder="Country">
                    </div>
                </div>  
                <div class="form-group">
                    <label for="contactNo" class="control-label col-md-2">Contact Number</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" name="contactNo" placeholder="Contact Number">
                    </div>
                </div>  

                <div class="form-group">
                    <label for="SecretQuestion1" class="control-label col-md-2">Secret Question 1</label>
                       <div class="col-md-6">
                        <select class="form-control" name="secretquestionlistopt">
                            <option>What is your mother's maiden name?</option>
                            <option>What is your favourite subject at school?</option>
                            <option>What is the name of your first pet?</option>
                            <option>What was the name of the hospital you were born in?</option>
                         </select>
                        </div>
                </div>
                <div class="form-group">
                    <label for="SecretQuestion1Answer" class="control-label col-md-2">Answer</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" name="Answer1" placeholder="Secret Answer 1">
                    </div>
                </div>        
               <div class="form-group">
                    <label for="SecretQuestion2" class="control-label col-md-2">Secret Question 2</label>
                       <div class="col-md-6">
                        <select class="form-control" name="secretquestionlistopt">
                            <option>What is your mother's maiden name?</option>
                            <option>What is your favourite subject at school?</option>
                            <option>What is the name of your first pet?</option>
                            <option>What was the name of the hospital you were born in?</option>
                         </select>
                        </div>
                </div>
                <div class="form-group">
                    <label for="SecretQuestion2Answer" class="control-label col-md-2">Answer</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" name="Answer2" placeholder="Secret Answer 2">
                    </div>
                </div>                                       
                <div class="form-group">
                    <div class="col-md-offset-2 col-md-6">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php require '../php/footer.php'; ?>
</body>
</html>
