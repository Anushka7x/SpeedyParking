<!DOCTYPE html>
<html lang="en">
  <?php
    include 'server.php';
    include 'auth.php';
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
  include 'header.php';
  ?>

  <div class="container">
    <div class="row">
      <div class="col-sm-4">
        <div class="panel panel-primary">
          <div class="panel-heading">Total Capacity</div>
          <div class="panel-body"></div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="panel panel-success">
          <div class="panel-heading">Available Parking Slots</div>
          <div class="panel-body"></div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="panel panel-danger">
          <div class="panel-heading">Occupied Parking Slots</div>
          <div class="panel-body"></div>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-sm-12">

        <h1>Two-Wheeler Parking Details</h1>
        <div class="table-container" style="height: 200px; overflow-y: auto;">
        <table class="table table-condensed table-hover" >
            <thead style="position: sticky; top : 0; color:white;" class="bg-primary">
              <tr>
                <th>Parking Space</th>
                <th>Occupancy</th>
                <th>Last Updated</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Zone 1, Space 1</td>
                <td>Occupied</td>
                <td>2022-03-14 10:30 AM</td>
                <td><!-- Button to trigger the modal -->
                  <button type="button" class="btn btn-danger" data-toggle="modal"
                    data-target="#deleteModal">Out</button>

                  <!-- Modal -->
                  <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog"
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
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                          <button type="button" class="btn btn-danger" id="confirmDeleteBtn">Delete</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </td>
              </tr>
              <tr>
                <td>Zone 1, Space 2</td>
                <td>Available</td>
                <td>2022-03-14 10:30 AM</td>
                <td><!-- Button to trigger the modal -->
                  <button type="button" class="btn btn-danger" data-toggle="modal"
                    data-target="#deleteModal">Out</button>

                  <!-- Modal -->
                  <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog"
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
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                          <button type="button" class="btn btn-danger" id="confirmDeleteBtn">Delete</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </td>
              </tr>
              <tr>
                <td>Zone 1, Space 3</td>
                <td>Occupied</td>
                <td>2022-03-14 10:30 AM</td>
                <td><!-- Button to trigger the modal -->
                  <button type="button" class="btn btn-danger" data-toggle="modal"
                    data-target="#deleteModal">Out</button>

                  <!-- Modal -->
                  <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog"
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
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                          <button type="button" class="btn btn-danger" id="confirmDeleteBtn">Delete</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </td>
              </tr>
              <tr>
                <td>Zone 2, Space 1</td>
                <td>Available</td>
                <td>2022-03-14 10:30 AM</td>
                <td><!-- Button to trigger the modal -->
                  <button type="button" class="btn btn-danger" data-toggle="modal"
                    data-target="#deleteModal">Out</button>

                  <!-- Modal -->
                  <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog"
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
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                          <button type="button" class="btn btn-danger" id="confirmDeleteBtn">Delete</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </td>
              </tr>
              <tr>
                <td>Zone 2, Space 2</td>
                <td>Available</td>
                <td>2022-03-14 10:30 AM</td>
                <td><!-- Button to trigger the modal -->
                  <button type="button" class="btn btn-danger" data-toggle="modal"
                    data-target="#deleteModal">Out</button>

                  <!-- Modal -->
                  <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog"
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
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                          <button type="button" class="btn btn-danger" id="confirmDeleteBtn">Delete</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </td>
              </tr>
              <tr>
                <td>Zone 2, Space 3</td>
                <td>Occupied</td>
                <td>2022-03-14 10:30 AM</td>
                <td><!-- Button to trigger the modal -->
                  <button type="button" class="btn btn-danger" data-toggle="modal"
                    data-target="#deleteModal">Out</button>

                  <!-- Modal -->
                  <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog"
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
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                          <button type="button" class="btn btn-danger" id="confirmDeleteBtn">Delete</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <div class="input-group">
      <input type="search" id="search" class="form-control rounded" placeholder="Search" aria-label="Search"
        aria-describedby="search-addon" />
    </div>
  </div>

  <hr class="my-hr">
  <?php
        include 'footer.php';
    ?>
    
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    $(document).ready(function () {
      $('#search').on('keyup', function () {
        var value = $(this).val().toLowerCase();
        $('#my-table tbody tr').filter(function () {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });
    });
  </script>
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>

</body>

</html>