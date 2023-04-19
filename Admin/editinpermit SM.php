<!DOCTYPE html>
<html lang="en">

<head>
    <title>Edit Permit details</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="stylesheet" href="./Style.css">
</head>

<body>
<?php
  include 'header.php';
  ?>
    <div class="container">

        <div class="row">
            <div class="alert alert-danger alert-dismissible">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Warning</strong>Editing may occur in severe loss make changes carefully !!!
            </div>
            <div class="col-md-6">
                <form id="myForm" class="form-horizontal">
                    <div class="form-group">
                        <label for="name" class="col-sm-3 control-label">Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="date" class="col-sm-3 control-label">Date</label>
                        <div class="col-sm-9">
                            <input type="date" class="form-control" id="date" name="date">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="apartmentAddress" class="col-sm-3 control-label">Apartment Address</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="apartmentAddress" name="apartmentAddress"
                                placeholder="Enter apartment address">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-6">
                <form id="myForm" class="form-horizontal">
                    <div class="form-group">
                        <label for="capacity" class="col-sm-3 control-label">Capacity</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="capacity" name="capacity"
                                placeholder="Enter capacity">
                        </div>
                    </div>

                    <div id="vehicleNumber" class="form-group">
                        <label for="number" class="col-sm-3 control-label">Vehicle Number</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="number" name="number"
                                placeholder="Enter vehicle number">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="location" class="col-sm-3 control-label">Location</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="location" name="location"
                                placeholder="Enter location">
                        </div>
                    </div>
                    <div class="form-group ">
                        <div class="col-sm-9 text-right">
                            <button type="submit" class="btn btn-primary">Save Changes</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>

    </div>
    <hr class="my-hr">
    <?php
    include 'footer.php';
    ?>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>

</body>

</html>