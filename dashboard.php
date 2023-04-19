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
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
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
                                    <input type="text" class="form-control" id="OwnersName" name="OwnersName" required>
                                </label>
                                <label for="vehiclenumber">Vehicle Number
                                    <input type="text" class="form-control" id="vehicleNumber" name="vehicle_number"
                                        oninput="this.value = this.value.toUpperCase();"
                                        pattern="[A-Z]{2}\d{2}[A-Z]{2}\d{4}" required>
                                </label>
                            </div>
                            <div class="form-group">
                                <input class="form-check-input" type="radio" name="vehicle_type" id="two_wheeler"
                                    value="two_wheeler" required>
                                <label class="form-check-label" for="two_wheeler">Two Wheeler</label>
                                <input class="form-check-input" type="radio" name="vehicle_type" id="four_wheeler"
                                    value="four_wheeler" required>
                                <label class="form-check-label" for="four_wheeler">Four Wheeler</label>
                            </div>
                            <div class="form-group">
                                <label for="location">Select a location:</label>
                                <select name="location" id="location">

                                    placeholder="Enter location" required>
                                    <option value="">-- Select an Location --</option>
                                    <option value="">Zone 1 Lot 1</option>
                                    <option value="">Zone 1 Lot 2</option>
                                    <option value="">Zone 1 Lot 3</option>
                                    <option value="">Zone 2 Lot 1</option>
                                    <option value="">Zone 2 Lot 2</option>
                                    <option value="">Zone 2 Lot 3</option>
                                    <option value="">Zone 3 Lot 1</option>
                                    <option value="">Zone 3 Lot 2</option>
                                    <option value="">Zone 3 Lot 3</option>

                                </select>
                                </label>
                                <label for="">
                                    <input type="hidden" class="form-control" id="date" name="exit_time">
                                </label>
                                <label for="date">Date
                                    <input type="date" class="form-control" id="date" name="date" required>
                                </label>
                            </div>
                            <div class="form-group">
                                <label for="permit">Do You have Permit
                                    <select type="dropdown" class="form-control" id="permit" name="permit" required>
                                        <option>--select--</option>
                                        <option>Yes</option>
                                        <option>No</option>
                                    </select>
                                </label>
                            </div>
                            <button type="submit" class="btn btn-primary" name="submit" required>Issue Parking</button>
                            <button type="reset" class="btn btn-primary">Cancel</button>
                        </form>

                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title">Send Message
                        </h3>
                        <details>Send messages or post your queries here.</details>
                    </div>
                    <div class="panel-body">
                        <form method="post" action="" class="form-horizontal">
                            <div class="form-group">
                                <label for="name" class="col-sm-2 control-label">Name:</label>
                                <div class="col-sm-10">
                                    <input type="text" name="name" id="name" class="form-control" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email" class="col-sm-2 control-label">Email:</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="subject" class="col-sm-2 control-label">Subject:</label>
                                <div class="col-sm-10">
                                    <select name="subject" id="subject" class="form-control" required>
                                        <option value="">-- Select an Issue --</option>
                                        <option value="System Issues">System Issues</option>
                                        <option value="Parking Issues">Parking Issues</option>
                                        <option value="Holiday">Holiday</option>
                                        <option value="Personal reason">Personal Reason</option>
                                        <option value="Others">Others</option>

                                    </select>
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
                                    <button type="submit" class="btn btn-primary" name="sendmsg" required>Send
                                        Message</button>
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
                        <th>Name</th>
                        <th>Issued</th>
                        <th>Vehicle Type</th>
                        <th>Vehicle Number</th>
                        <th>Location</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Anu</td>
                        <td>03-03-2023</td>
                        <td>Bike</td>
                        <td>MP 09 4567</td>
                        <td>indore</td>
                    </tr>

                </tbody>

            </table>
        </div>
    </div>
    <hr class="my-hr">
    <?php include('footer.php') ?>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.4/dist/sweetalert2.all.min.js"></script>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>

</html>