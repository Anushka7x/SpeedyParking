<!DOCTYPE html>
<html lang="en">
<?php
include 'action.php';
include 'auth.php';
$sql = "SELECT COUNT(*) FROM two_wheeler WHERE vehicle_number IS NOT NULL";
$result = mysqli_query($conn, $sql);
$occupied = mysqli_fetch_array($result)[0];

// Calculate the count of available parking slots
$available = 250 - $occupied;
?>

<head>
  <title>Two-Wheeler Parking Dashboard</title>
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
  include('header.php'); ?>


  <div class="container">
    <div class="row">
      <div class="col-sm-4">
        <div class="panel panel-primary">
          <div class="panel-heading">Total Two Wheeler Capacity</div>
          <div class="panel-body">
            <?php echo '250' ?>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="panel panel-success">
          <div class="panel-heading">Available Parking Slots</div>
          <div class="panel-body"><?php echo $available?></div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="panel panel-danger">
          <div class="panel-heading">Occupied Parking Slots</div>
          <div class="panel-body"><?php echo $occupied?></div>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-sm-12">

        <h1>Two-Wheeler Parking Details</h1>
        <?php $select_query = "SELECT * FROM two_wheeler";
        $result = mysqli_query($conn, $select_query); ?>
        
        <div class="table-container" style="height: 200px; overflow-y: auto;">
          <table class="table table-condensed table-hover" id="myTable">
            <thead style="position: sticky; top : 0; color:white;" class="bg-primary">

              <tr>
                <th>Vehicle ID</th>
                <th>Vehicle Number</th>
                <th>Vehicle Type</th>
                <th>Location</th>
                <th>Entry Time</th>
                <th>Exit Time</th>
                <th>Permit</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php
              while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['vehicle_number'] . "</td>";
                echo "<td>" . $row['vehicle_type'] . "</td>";
                echo "<td>" . $row['location'] . "</td>";
                echo "<td>" . $row['date'] . "</td>";
                echo "<td>" . $row['exit_time'] . "</td>";
                echo "<td>" . $row['permit'] . "</td>";
                echo "<td>";
                if ($row['updated_type'] == NULL) {
                  echo '<a href="recordexit.php?id=' . $row['id'] . '"class="btn btn-primary exit-button" >Exit</a>';
                } else {
                  echo 'Exited';
                }
                echo "</td>";
                echo "</tr>";
              }
              ?>
            </tbody>
          </table>

        </div>
        <div class="form-group pull-right">
      <input type="text" class="search form-control" id="myInput" onkeyup="searchTable()" placeholder="Search vehicle">
    </div>
      </div>
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

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>

</body>

</html>

<!-- // fetch the updated data from the database and display it in the table 
          $select_query = "SELECT * FROM two_wheeler";
          $result = mysqli_query($conn, $select_query); -->