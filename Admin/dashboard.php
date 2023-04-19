<!DOCTYPE html>
<html lang="en">
<?php
include('action.php');
include('auth.php');

?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags must come first in the head; any other head content must come after these tags -->
    <title>Dashboard</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <link rel="stylesheet" href="./Style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <style>
        .panel-heading {
            background-color: #f5f5f5;
        }

        .panel-title {
            color: #223776;
        }

        .panel-body {
            padding: 20px;
        }

        .btn-primary {
            background-color: #05437a;
        }

        .btn-primary:hover,
        .btn-primary:focus,
        .btn-primary:active,
        .btn-primary.active,
        .open .dropdown-toggle.btn-primary {
            background-color: #286090;
            border-color: #204d74;
        }
    </style>
</head>

<body>
    <?php include('header.php') ?>
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">Total Capacity</div>
                    <div class="panel-body">
                        <?php ?>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="panel panel-success">
                    <div class="panel-heading">Available Parking Slots</div>
                    <div class="panel-body">
                        <?php ?>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="panel panel-danger">
                    <div class="panel-heading">Occupied Parking</div>
                    <div class="panel-body">
                        <?php ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title">Overview</h3>
                    </div>
                    <div class="panel-body">
                        <p>Total Parking Spaces: 100</p>
                        <p>Available Spaces: 25</p>
                        <p>Occupancy Rate: 75%</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title">Usage Reporting</h3>
                    </div>
                    <div class="panel-body">
                        <p>Peak Usage Times: 12:00 pm - 2:00 pm</p>
                        <p>Most Frequently Used Parking Area: Lot A</p>
                        <p>Average Occupancy Rate: 70%</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title">Add Parking
                        </h3>
                        <details>Entry of vehicles will proceed from this form and data will be stored at two/four
                            wheeler tabs , ask for permit if yes then issue parking if no then give them public parking
                            by charging 1 day fees and give entry after temporary public permit.
                        </details>
                    </div>
                    <div class="panel-body">
                        <form method="POST">
                            <div class="form-group">
                                <label for="OwnersName">Owners Name
                                    <input type="text" class="form-control" id="OwnersName" name="Owner_name">
                                </label>
                                <label for="vehiclenumber">Vehicle Number
                                    <input type="text" class="form-control" id="vehicleNumber" name="vehicleno">
                                </label>
                            </div>
                            <div class="form-group">
                                <input class="form-check-input" type="radio" name="vehicle_type" id="two_wheeler"
                                    value="two_wheeler">
                                <label class="form-check-label" for="two_wheeler">Two Wheeler</label>
                                <input class="form-check-input" type="radio" name="vehicle_type" id="four_wheeler"
                                    value="four_wheeler">
                                <label class="form-check-label" for="four_wheeler">Four Wheeler</label>
                            </div>
                            <div class="form-group">
                                <label for="location">Location:
                                    <input type="text" class="form-control" id="location" name="location"
                                        placeholder="Enter location">
                                </label>
                                <label for="date">Date
                                    <input type="date" class="form-control" id="date" name="datetime">
                                </label>
                            </div>
                            <div class="form-group">
                                <label for="permit">Do You have Permit
                                    <select type="dropdown" class="form-control" id="permit" name="permit">
                                        <option>--select--</option>
                                        <option>Yes</option>
                                        <option>No</option>
                                    </select>
                                </label>
                            </div>
                            <button type="submit" class="btn btn-primary" name="addparkingsubmit">Issue Parking</button>
                            <button type="reset" class="btn btn-primary">Cancel</button>
                        </form>

                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title">Send Message
                        </h3>   </div>
                        <div class="panel-body">
                            <form method="post" action="inbox.php" class="form-horizontal">
                                <div class="form-group">
                                    <label for="subject" class="col-sm-2 control-label">Subject:</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="subject" id="subject" class="form-control" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="message" class="col-sm-2 control-label">Message:</label>
                                    <div class="col-sm-10">
                                        <textarea name="message" id="message" class="form-control" rows="5"
                                            required></textarea>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button type="submit" class="btn btn-primary" name="sendmsg">Send Message</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                 
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <h3>Recent Details</h3>
        <div class="table-container" style="height: 200px; overflow-y: auto;">
            <table class="table">
                <thead style="position: sticky; top:0; color:white;" class="bg-primary">
                    <tr>
                        <th>Id</th>
                        <th>Owner Name</th>
                        <th>Vehicle Number</th>
                        <th>Vehicle Type</th>
                        <th>Location</th>
                        <th>Date</th>
                        <th>Permitted</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <td><?php echo $row['id'];?></td>
                    <td><?php echo $row['Owner_name'];?></td>
                    <td><?php echo $row['vehicleno'];?></td>                            
                    <td><?php echo $row['vehicle_type'];?></td>
                    <td><?php echo $row['location'];?></td>
                    <td><?php echo $row['datetime'];?></td>
                    <td><?php echo $row['permit'];?></td>
                    </tr>

                </tbody>

            </table>
        </div>
    </div>

    <hr class="my-hr">
    <?php include('footer.php') ?>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>

</html>