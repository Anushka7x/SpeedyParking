<?php
    include 'action.php';
    include 'auth.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Public Parking</title>
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
    <div class="container ">
        <div class="row">
            <div class="col-md-4" style="border-right: 1px solid #ccc;">
                <form method="POST">
                    <div class="form-group">
                        <label for="name">Full Name:</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter name" required>
                    </div>
                    <div class="form-group">
                        <label for="vehiclenumber">Vehicle Number:</label>
                        <input type="text" class="form-control" id="vehiclenumber" name="vehicleno" placeholder="Enter vehicle number" required>
                    </div>

                    <div class="form-group">
                                    <label for="email">Email:</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email" required>
                                </div>
                    <div class="form-group">
                        <label for="flat-no">Location:</labeLl>
                            <input type="text" class="form-control" id="flat-no" name="location" placeholder="Enter location" required>
                    </div>
                    
                  
                    <button type="submit" class="btn btn-primary" name="publicsubmit">Submit</button>
                    <button type="cancel" class="btn btn-danger">Cancel</button>

                </form>
            </div>


            <div class="col-md-8">
                <div class="table-container" style="height: 300px; overflow-y: auto;">
                    <table class="table">
                        <thead style="position: sticky; top : 0; color:white;" class="bg-primary">
                            <tr>
                                <th>ID</th>                               
                                <th>Name</th>
                                <th>Vehicle Number</th>  
                                <th>Email</th>
                                <th>Location</th>                                                                                         
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                          $sql="SELECT * from public_park";
                           $result=$conn->query($sql);
                    
                           if($result->num_rows>0){
                        while($row=mysqli_fetch_assoc($result))
                        //while($row=$result->fetch_assoc())
                        {
                          ?>
                          <tr>
                            <td><?php echo $row['id'];?></td>   
                            <td><?php echo $row['name'];?></td> 
                            <td><?php echo $row['vehicleno'];?></td> 
                            <td><?php echo $row['email'];?></td>                                                    
                            <td><?php echo $row['location'];?></td>                                                                               
                            <td><a href="publicparkupdate.php?id=<?php echo $row['id'];?>"><i class='fas fa-edit'></i></a>
                            <a href="publicparkdelete.php?id=<?php echo $row['id'];?>"><i class='fas fa-trash-alt'></i></a></td>
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