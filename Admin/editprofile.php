<?php
include 'action.php';
include 'auth.php';
// Close database connection
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Edit Profiles</title>

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

    <body>                                               
        <div class="container">
            <div class="table-container"  style="height: 200px; overflow-y: auto;">
            <table class="table table-condensed table-hover" >
            <thead style="position: sticky; top : 0; color:white;" class="bg-primary">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        <?php
                    $sql = "SELECT * FROM registereduser";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // Output each row of data as a table row
                        while ($row = $result->fetch_assoc())  {
                            ?>
                            <tr>
                            <td><?php echo $row['id'];?></td> 
                            <td><?php echo $row['name'];?></td> 
                            <td><?php echo $row['email'];?></td>  
                            <td><?php echo $row['phone'];?></td>  
                            <td><?php echo $row['address'];?></td>  
                            <td><a href="editprofileupdate.php?id=<?php echo $row['id'];?>"><i class='fas fa-edit'></i></a></td>
                            
                            </tr> 
                            <?php
                          }}
                          ?>

                                 </div>
                       
                           
                    </tbody>
                </table>
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