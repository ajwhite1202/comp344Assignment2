<html>
<head> 
<title> Address Book </title>
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
            <h1>Address Book</h1>
    </div>

<div class="container col-md-offset-2 col-md-12">
    <div class="row col-md-8">
    <div class="panel panel-default ">
      <div class="panel-heading"><h3>Primary Address</h3><span class="glyphicon glyphicon-edit"></span></div>
      <div class="panel-body">
        <p>Full Name</p>
        <p>Street No. Street Name</p>
        <p>Suburb, State, Post code</p>
        <p>Contact Number</p>
        <p data-placement="top" data-toggle="tooltip" title="Delete">
            <button class="btn btn-danger btn-md col-md-offset-10" data-title="Delete" data-toggle="modal" data-target="#delete" >Delete<span class="glyphicon glyphicon-trash"></span>
            </button>
        </p>
      </div>
    </div>
    </div>
</div>
<div class="container col-md-offset-2 col-md-12">
    <div class="row col-md-8">
    <div class="panel panel-default">
      <div class="panel-body">
        <p>Full Name</p>
        <p>Street No. Street Name</p>
        <p>Suburb, State, Post code</p>
        <p>Contact Number</p>
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
            <h2>Edit Address</h2>
    </div>
    <form class="form-horizontal">
         <div class="form-group">
            <label for="fullName" class="control-label col-md-2">Name</label>
            <div class="col-md-8">
                <input type="text" class="form-control" name="fullName" placeholder="$name">
            </div>
        </div>
        <div class="form-group">
            <label for="StreetNumber" class="control-label col-md-2">Street Number</label>
            <div class="col-md-8">
                <input type="text" class="form-control" name="StreetNumber" placeholder="$street number">
            </div>
        </div>
         <div class="form-group">
            <label for="StreetName" class="control-label col-md-2">Street Name</label>
            <div class="col-md-8">
                <input type="text" class="form-control" name="StreetName" placeholder="$street name">
            </div>
        </div>
        <div class="form-group">
            <label for="Suburb" class="control-label col-md-2">Suburb</label>
            <div class="col-md-8">
                <input type="text" class="form-control" name="Suburb" placeholder="$Suburb">
            </div>
        </div>
        <div class="form-group">
                <label for="State" class="control-label col-md-2">State</label>
                   <div class="col-md-8">
                    <select class="form-control" name="State">
                        <option>NSW</option>
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
            <label for="PostCode" class="control-label col-md-2">PostCode</label>
            <div class="col-md-8">
                <input type="text" class="form-control" name="PostCode" placeholder="$PostCode">
            </div>
        </div>
        <div class="form-group">
            <label for="Country" class="control-label col-md-2">Country</label>
            <div class="col-md-8">
                <input type="text" class="form-control" name="Country" placeholder="$Country">
            </div>
        </div>
        <div class="form-group">
            <label for="ContactNumber" class="control-label col-md-2">Contact Number</label>
            <div class="col-md-8">
                <input type="text" class="form-control" name="ContactNumber" placeholder="$Contact Number">
            </div>
        </div>
        <div class="form-group">
                <span class="col-md-offset-2">Make this address Primary</span>
                <input type="checkbox" class="custom-control-input">
        </div>      
        <div class="form-group">
            <div class="col-md-offset-2 col-md-8">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
        </div>
    </body>
<?php include("includes/footer.html"); ?>
</html>
