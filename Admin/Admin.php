<?php
include 'action.php';
include 'auth.php';
// Close database connection
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Admin</title>

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
    <?php ?>
    <div class="container">
        <div class="row">

            <div class="col-sm-4">
                <h2>My Profile</h2>
                <div class="list-group">
                    <a href="#" class="list-group-item active">Overview</a>
                    <a href="editprofile.php" class="list-group-item">Edit Profile</a>
                    <a href="locationdetails.php" class="list-group-item">Location Details</a>
                </div>

            </div>

            <div class="col-sm-4">
                <h2>Message</h2>
                <div class="list-group">
                    <a href="#" class="list-group-item active">Sent</a>
                    <a href="#" class="list-group-item">Inbox</a>
                    <a href="#" class="list-group-item">Draft</a>
                </div>

            </div>
            <div class="col-sm-4">
                <h2>Information</h2>
                <div class="list-group">
                    <a href="#" class="list-group-item ">Issues</a>
                    <a href="registration .php" class="list-group-item active">Add Staff</a>
                    <a href="manage.php" class="list-group-item">Staff Details</a>
                </div>

            </div>
            
        </div>
    </div>
   
    <hr class="my-hr">
    <div class="container">
        <div class="row">
           
         <div class="col-sm-12">
                <h2>Overview</h2>
                <div class="well">
                    Name: 
                    <?php echo $row['name'];?><br>
                    Email:
                    <?php echo $row['email'];?><br>
                    Phone:
                    <?php echo $row['phone'];?><br>
                    Address:
                    <?php echo $row['address'];?><br>
                </div>
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