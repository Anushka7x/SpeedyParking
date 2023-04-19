<?php
include 'action.php';
include ('auth.php') ?>

<?php
if (isset($_POST['delete'])) {
    // Get the id of the row to be deleted
    $id = $_POST['id'];
    // Create SQL query to delete the row
    $sql = "DELETE FROM apartment_rentals WHERE id = $id";

    // Execute the query
    if (mysqli_query($conn, $sql)) {
        header("Location: $_SERVER[PHP_SELF]");
    } else {
        echo "Error deleting row: " . mysqli_error($conn);
    }
}

// Retrieve data from database
$query = "SELECT * FROM apartment_rentals";
$result = mysqli_query($conn, $query);


// total counts of permit
$sql = "SELECT COUNT(*) FROM apartment_rentals";
$result = mysqli_query($conn, $sql);

// Check if the query was successful
if (!$result) {
    die("Error: " . mysqli_error($conn));
}

// Fetch the result
$count = mysqli_fetch_array($result)[0];


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Appartments Parking Permit</title>

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
    <?php include('header.php') ?>


    <div class="container">
        <div class="row">
            <h3>Add Apartments Permit</h3>
            <details>"Vehicle permits will be issued from this platform for a tenure of 3 months. At the end of this
                period, the permit will need to be renewed. If an owner fails to renew their permit, they will be
                charged a penalty fee.The permitted vehicle will stored below with expiry date respectively."
            </details>
            <form method="POST" action="" class="form-horizontal">
                <div class="col-md-2">
                    <div class="panel panel-primary">
                        <div class="panel-heading">Total Capacity</div>
                        <div class="panel-body">
                            <?php echo $count; ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">

                    <div class="form-group">
                        <label for="name" class="col-sm-3 control-label">Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="name" placeholder="Enter your name" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="end_Date" class="col-sm-3 control-label">End Date</label>
                        <div class="col-sm-9">
                            <input type="date" name="endDate" class="form-control" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="apartment_address" class="col-sm-3 control-label">Apartment Address</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="apartmentaddress"
                                placeholder="Enter apartment address" required>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="form-group">
                        <label for="capacity" class="col-sm-3 control-label">Capacity</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" name="capacity" placeholder="Enter capacity" required>
                        </div>
                    </div>

                    <div id="vehicleNumber" class="form-group">
                        <label for="vehicle_number" class="col-sm-3 control-label">Vehicle Number</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="vehiclenumber"
                                placeholder="Enter vehicle number" oninput="this.value = this.value.toUpperCase();" pattern="[A-Z]{2}\d{2}[A-Z]{2}\d{4}" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="location" class="col-sm-3 control-label">Location</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="location" placeholder="Enter location" required>
                        </div>
                    </div>
                    <div class="form-group ">
                        <div class="col-sm-9 text-right">
                            <button type="submit" name="insert" class="btn btn-primary" required>Submit</button>
                        </div>
                    </div>
                </div>

            </form>
        </div>
    </div>
    <hr class="my-hr">

    <div class="container">
        
                <?php
                //retrieve data from database
                $query = "SELECT * FROM apartment_rentals";
                $result = mysqli_query($conn, $query);
                ?>
        <div class="table-container" style="height: 300px; overflow-y: auto;">
          <table class="table table-condensed table-hover" id="myTable">
            <thead style="position: sticky; top : 0; color:white;" class="bg-primary">

                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                            <th>Apartment Address</th>
                            <th>Capacity</th>
                            <th>Vehicle Number</th>
                            <th>Location</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                            <tr>
                                <td>
                                    <?php echo $row['id']; ?>
                                </td>
                                <td>
                                    <?php echo $row['name']; ?>
                                </td>
                                <td>
                                    <?php echo $row['created_at']; ?>
                                </td>
                                <td>
                                    <?php echo $row['end_date']; ?>
                                </td>
                                <td>
                                    <?php echo $row['apartment_address']; ?>
                                </td>
                                <td>
                                    <?php echo $row['capacity']; ?>
                                </td>
                                <td>
                                    <?php echo $row['vehicle_number']; ?>
                                </td>
                                <td>
                                    <?php echo $row['location']; ?>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-danger" data-toggle="modal"
                                        data-target="#deleteModal<?php echo $row['id']; ?>">Delete</button>
                                </td>
                            </tr>
                            <!-- Modal for delete confirmation -->
                            <div class="modal fade" id="deleteModal<?php echo $row['id']; ?>" tabindex="-1" role="dialog"
                                aria-labelledby="deleteModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="deleteModalLabel">Confirm Delete</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            Are you sure you want to delete this record?
                                        </div>
                                        <div class="modal-footer">
                                            <div class="modal-footer">
                                                <form method="POST">
                                                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">Close</button>
                                                    <button type="submit" name="delete"
                                                        class="btn btn-danger">Delete</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
                </tbody>
            </table>
        </div>
        <div class="form-group pull-right">
      <input type="text" class="search form-control" id="myInput" onkeyup="searchTable()" placeholder="Search vehicle">
    </div>
    </div>
    <hr class="my-hr">
    <?php include('footer.php') ?>
    <script>
    function searchTable() {
      var input, filter, table, tr, td, i, txtValue;
      input = document.getElementById("myInput");
      filter = input.value.toUpperCase();
      table = document.getElementById("myTable");
      tr = table.getElementsByTagName("tr");
      for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td");
        for (var j = 0; j < td.length; j++) {
          txtValue = td[j].textContent || td[j].innerText;
          if (txtValue.toUpperCase().indexOf(filter) > -1) {
            tr[i].style.display = "";
            break;
          } else {
            tr[i].style.display = "none";
          }
        }
      }
    }

  </script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>

</html>