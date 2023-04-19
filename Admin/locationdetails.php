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
  <title>Location Details</title>

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
  <div class="col-md-6" style="border-right: 1px solid #ccc;">
  <h3> Add More Location</h3>
      <form  method="POST">   
         <div class="form-group">
          <label for="Address">Address
          <input type="text" class="form-control" id="Address" name="address" placeholder="Enter Full Address." required></label>
         </div>
    
        <div class="form-group">
          <label for="location">Location
          <input type="text" class="form-control" id="location" name="location" placeholder="Enter Location" required></label>
        </div>
       
        <button type="submit" name="locationsubmit" class="btn btn-primary">ADD Location</button>
        <button type="cancel" class="btn btn-danger">Cancel</button>
      </form>
      </div>
 
      
        <div class="col-md-6">         
          
          <div class="table-responsive" style="height:300px;overflow-y:auto">
          <table class="table table-condensed table-hover" >
          <thead style="position: sticky; top : 0; color:white;" class="bg-primary">
              <tr>   
                                     <th >ID</th>
                                    <th >Address</th>                                   
                                    <th >Location</th>                
                        </tr>
              </thead>
              <tbody>
                        <?php
                    $sql="SELECT * from location_details";
                    $result=mysqli_query($conn ,$sql);
                    if($result->num_rows>0){
                        while($row=mysqli_fetch_assoc($result))
                        //while($row=$result->fetch_assoc())
                        {
                          ?>
                          <tr>
                            <td><?php echo $row['id'];?></td>
                             <td><?php echo $row['address'];?></td>
                            <td><?php echo $row['location'];?></td>
                          
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