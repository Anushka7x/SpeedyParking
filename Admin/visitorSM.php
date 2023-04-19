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
  <title>Visitor</title>

  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <script src="js/bootstrap.min.js"></script>


  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
      integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
  <link rel="stylesheet" href="./Style.css">
</head>

<body class="Apart">
<?php
  include 'header.php';

  ?>
<div class="container">
  <div class="row">
  <div class="col-md-5" style="border-right: 1px solid #ccc;">
      <form id="myForm" method="POST">   
         <div class="form-group">
          <label for="vehicleNumber">Vehicle Number
          <input type="text" class="form-control" id="vehicleNumber" name="vehicleno" placeholder="Enter Vehicle No." required></label>
  
          <label for="date">Date
          <input type="date" class="form-control" id="date" name="datetime" required></label>
        </div>
        <div class="form-group">
          <label for="vehicleType">Vehicle Type</label>
          <div class="radio">
            <label><input type="radio" name="optionsRadio" value="car"> Car</label>
            <label><input type="radio" name="optionsRadio" value="bike"> Bike</label>
          </div>
        </div>
    
        <div class="form-group">
          <label for="location">Location
          <input type="text" class="form-control" id="location" name="location" placeholder="Enter Location" required></label>
        </div>
        <div class="form-group">
          <label for="paymentType">Payment Type
          <select class="form-control" id="paymentType" name="payment" required></label>
          <option value="select">select</option>
            <option value="cash">Cash</option>
            <option value="UPI">UPI</option>
          </select>
        </div>
        <button type="submit" name="visitorsubmit" class="btn btn-primary">Submit</button>
        <button type="cancel" class="btn btn-danger">Cancel</button>
      </form>
  </div>
      
        <div class="col-md-7">         
          <h3>Visitor details</h3>
          <div class="table-responsive" style="height:500px;overflow-y:auto">
          <table class="table table-condensed table-hover" >
          <thead style="position: sticky; top : 0; color:white;" class="bg-primary">
              <tr>   
                                     <th >ID</th>
                                    <th >Vehicle No.</th>                                   
                                    <th >Vehicle Type</th> 
                                    <th >Location</th> 
                                    <th >Date/Time</th>                                                          
                                    <th >Payment Type</th>                
                                    <th >Action</th>
                        </tr>
              </thead>
              <tbody>
                        <?php
                    $sql="SELECT * from visitor_ft";
                    $result=mysqli_query($conn ,$sql);
                    if($result->num_rows>0){
                        while($row=mysqli_fetch_assoc($result))
                        //while($row=$result->fetch_assoc())
                        {
                          ?>
                          <tr>
                          <td><?php echo $row['id'];?></td>
                            <td><?php echo $row['vehicleno'];?></td>                            
                            <td><?php echo $row['optionsRadio'];?></td>
                            <td><?php echo $row['location'];?></td>
                            <td><?php echo $row['datetime'];?></td>
                            <td><?php echo $row['payment'];?></td>
                            <td><a href="visitorupdate.php?id=<?php echo $row['id'];?>"><i class='fas fa-edit'></i></a>
                            <a href="visitordelete.php?id=<?php echo $row['id'];?>"><i class='fas fa-trash-alt'></i></a></td>
                          </tr> 
                          <?php
                        }}
                        ?> 
                
              </tbody>
            </table>
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