<?php
  include 'action.php';
  include 'auth.php';                                

  ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Visitor update</title>

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
<body>

<?php
include 'header.php';
$id = $_GET['id'];

$showquery = "SELECT * FROM visitor_ft WHERE id=$id";
$showdata = mysqli_query($conn, $showquery);
$arrdata = mysqli_fetch_assoc($showdata);
?>

<div class="container">
    <h2>Update Visitor Detail</h2>
    <div class="col-md-6">
        <form id="myForm" action="" method="POST">
            <input type="hidden" name="id" value="<?php echo $arrdata['id']; ?>">
            <div class="form-group">
                <label for="vehicleNumber">Vehicle Number
                    <input type="text" class="form-control" id="vehicleno" name="vehicleno" value="<?php echo $arrdata['vehicleno']; ?>">
                </label>
            </div>

            <div class="form-group">
                <label for="vehicleType">Vehicle Type</label>
                <div class="radio">
                    <label><input type="radio" name="optionsRadio" value="Car" <?php if($arrdata['optionsRadio'] == "Car") { echo "checked"; }?>> Car</label>
                    <label><input type="radio" name="optionsRadio" value="Bike" <?php if($arrdata['optionsRadio'] == "Bike") { echo "checked"; }?>> Bike</label>
                </div>
            </div>

            <div class="form-group">
                <label for="location">Location</label>
                <input type="text" class="form-control" id="location" name="location" value="<?php echo $arrdata['location']; ?>">
            </div>

            <div class="form-group">
                <label for="paymentType">Payment Type</label>
                <select class="form-control" id="paymentType" name="payment">
                    <option value="select">Select</option>
                    <option value="cash" <?php if($arrdata['payment'] == "cash") { echo "selected"; }?>>Cash</option>
                    <option value="UPI" <?php if($arrdata['payment'] == "UPI") { echo "selected"; }?>>UPI</option>
                </select>
            </div>

            <button type="submit" name="updatevisitorsubmit" class="btn btn-primary">Done</button>
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