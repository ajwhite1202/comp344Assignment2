<html>
<head> 
<title> Payment Methods </title>
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
<?php include("includes/header.html"); ?>
<?php include("includes/sidebar.html"); ?>
<div class="modal-content col-md-8">
    <div class="container">
            <h1>Payment Methods</h1>
    </div>

<div class="container col-md-offset-2 col-md-12">
    <div class="row col-md-6">
    <div class="panel panel-default ">
      <div class="panel-heading"><h3>Primary Card</h3><span class="glyphicon glyphicon-edit"></span></div>
      <div class="panel-body">
        <p>First Name Last Name</p>
        <p>Card Number</p>
        <p>Expiry Date</p>
        <p data-placement="top" data-toggle="tooltip" title="Delete">
            <button class="btn btn-danger btn-md col-md-offset-10" data-title="Delete" data-toggle="modal" data-target="#delete" >Delete<span class="glyphicon glyphicon-trash"></span>
            </button>
        </p>
      </div>
    </div>
    </div>
</div>
<div class="container col-md-offset-2 col-md-12">
    <div class="row col-md-6">
    <div class="panel panel-default">
      <div class="panel-body">
        <p>First Name Last Name</p>
        <p>Card Number</p>
        <p>Expiry Date</p>
        <p data-placement="top" data-toggle="tooltip" title="Delete">
            <button class="btn btn-danger btn-md col-md-offset-10" data-title="Delete" data-toggle="modal" data-target="#delete" >Delete<span class="glyphicon glyphicon-trash"></span>
            </button>
        </p>
      </div>
    </div>
    </div>
</div>
<div class="container col-md-12">
    <div class="container">
            <h2>Edit Card</h2>
    </div>
    
    <form class="form-horizontal">
        <div class="form-group">
            <label for="cardName" class="control-label col-md-2">Type of Card</label>
            <label class="MasterCard"><input type="radio" name="toggle"><span>MasterCard</span></label>
            <label class="Visa"><input type="radio" name="toggle"><span>Visa</span></label>
            <label class="Amex"><input type="radio" name="toggle"><span>Amex</span></label>
        </div>        
        <div class="form-group">
            <label for="cardName" class="control-label col-md-2">Name on Card</label>
            <div class="col-md-6">
                <input type="text" class="form-control" id="cardName" placeholder="Please enter the name on your card">
            </div>
        </div>
        <div class="form-group">
            <label for="cardNum" class="control-label col-md-2">Card Number</label>
            <div class="col-md-6">
                <input type="text" class="form-control" id="cardNum" placeholder="Please enter your card number">
            </div>
        </div>
      <div class="form-group">
        <label class="col-md-2 control-label" for="expiry-month">Expiration Date</label>
            <div class="col-md-3">
              <select class="form-control col-sm-2" name="expiry-month" id="expiry-month">
                <option>Month</option>
                <option value="01">Jan (01)</option>
                <option value="02">Feb (02)</option>
                <option value="03">Mar (03)</option>
                <option value="04">Apr (04)</option>
                <option value="05">May (05)</option>
                <option value="06">June (06)</option>
                <option value="07">July (07)</option>
                <option value="08">Aug (08)</option>
                <option value="09">Sep (09)</option>
                <option value="10">Oct (10)</option>
                <option value="11">Nov (11)</option>
                <option value="12">Dec (12)</option>
              </select>
            </div>
            <div class="col-md-2">
              <select class="form-control" name="expiry-year">
                <option value="16">2016</option>
                <option value="17">2017</option>
                <option value="18">2018</option>
                <option value="19">2019</option>
                <option value="20">2020</option>
                <option value="21">2021</option>
                <option value="22">2022</option>
                <option value="23">2023</option>
              </select>
            </div>
        </div>
        <div class="form-group">
                <span class="col-md-offset-2">Make this card Primary</span>
                <input type="checkbox" class="custom-control-input">
        </div>                                              
        <div class="form-group">
            <div class="col-md-offset-2 col-md-6">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
    </body>
<?php include("includes/footer.html"); ?>
</html>
