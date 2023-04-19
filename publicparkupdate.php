<?php
include 'action.php';
include 'auth.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Update Public Parking</title>
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

    $id = $_GET['id'];

    $showquery = "SELECT * FROM public_park WHERE id=$id";
    $showdata = mysqli_query($conn, $showquery);
    $arrdata = mysqli_fetch_assoc($showdata);
    ?>
    <div class="container ">
        <h2>Update Public Parking</h2>
        <div class="col-md-6">
            <form action="" method="POST">
                <input type="hidden" name="id" value="<?php echo $arrdata['id']; ?>">
                <div class="form-group">
                    <label for="name">Full Name:</label>
                    <input type="text" class="form-control" id="name" name="name"
                        value="<?php echo $arrdata['name']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="vehiclenumber">Vehicle Number:</label>
                    <input type="text" class="form-control" id="vehiclenumber" name="vehicleno"
                        value="<?php echo $arrdata['vehicleno']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" name="email"
                        value="<?php echo $arrdata['email']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="flat-no">Location:</label>
                    <input type="text" class="form-control" id="flat-no" name="location"
                        value="<?php echo $arrdata['location']; ?> " required>
                </div>


                <!-- include hidden input field for ID -->



                <button type="submit" class="btn btn-primary" name="updatepublicsubmit">Done</button>
                <button type="cancel" class="btn btn-danger">Cancel</button>
            </form>
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