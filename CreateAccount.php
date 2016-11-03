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
	<div class="container">
    	<h1 class="well col-lg-8 col-lg-offset-2">Create an Account</h1>
		<div class="col-lg-8 well col-lg-offset-2">
			<div class="row">
            <form>
                <div class="col-md-12">
           	        <div class="row">
       	                <div class="col-md-12 form-group">
                            <label>Full Name</label>
                            <input type="text" placeholder="Full name" class="form-control">
                        </div>
                        <div class="col-md-12 form-group">
                            <label>Email</label>
                            <input type="text" placeholder="Email" class="form-control">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Password</label>
                            <input type="text" placeholder="Password" class="form-control">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Confirm Password</label>
                            <input type="text" placeholder="Confirm password" class="form-control">
                        </div>                          
                    </div>

                    <div class="form-group">
                        <label for="SecretQuestion1">Secret Question 1</label>
                            <select class="form-control" name="secretquestionlistopt">
                                <option>What is your mother's maiden name?</option>
                                <option>What is your favourite subject at school?</option>
                                <option>What is the name of your first pet?</option>
                                <option>What was the name of the hospital you were born in?</option>
                            </select>
                    </div>  
                    <div class="form-group">
                    	<label for="SecretQuestion1Answer">Answer</label>
                    	<div>
                        	<input type="text" class="form-control" name="Answer1" placeholder="Secret Answer 1">
                    	</div>
		           </div>     		

                    <div class="form-group">
                        <label for="SecretQuestion2">Secret Question 2</label>
                            <select class="form-control" name="secretquestionlistopt">
                                <option>What is your mother's maiden name?</option>
                                <option>What is your favourite subject at school?</option>
                                <option>What is the name of your first pet?</option>
                                <option>What was the name of the hospital you were born in?</option>
                            </select>
                    </div>
                    <div class="form-group">
                    	<label for="SecretQuestion2Answer">Answer</label>
                    	<div>
                        	<input type="text" class="form-control col-md-12" name="Answer2" placeholder="Secret Answer 2">
                    	</div>
               	    </div> 
                    <div class="col-md-12 text-center"> 
                    <p>By registering, you agree that you've read and accepted our User Agreement,</p><p> you're at least 18 years old, and you consent to our Privacy Policy. </p>
                    </div>
                    <button type="button" class="btn btn-lg btn-primary btn-block">Register</button>        
                    <br></br>
                    <p class="text-center">Already have an account? <a href="login.php">Login<a/></p>
                </div>
             </div>  
            </form> 
    	</div>
	</div>
</div>
<?php require '../php/footer.php'; ?>
</body>
</html>
