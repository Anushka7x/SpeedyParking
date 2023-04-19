<?php 

$usrnm = $_SESSION['username'];
$sql = "SELECT * FROM registereduser WHERE username='$usrnm'";

// Execute the query and get the result
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $email = $row['email'];
    $phone = $row['phone'];
    $address = $row['address'];
    $verification =$row['verification_type'];
} else {

}

?>
<nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="navbar-logo" href="#"><img
                        src="speedy-parking-low-resolution-logo-color-on-transparent-background.png" width="70"
                        style="padding: 3px;">
                </div>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li class="nav-item"><a href="dashboard.php">Dashboard</a>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Parking
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="appartmentpark.php">Appartment</a></li>
                            <li><a href="publicparkingSM.php">Public</a></li>
                        </ul>
                    </li>
                    <li><a href="parkingusage.php">Parking Usage</a></li>
                    <li><a href="twowheeler.php">Two-Wheeler</a></li>
                    <li><a href="fourwheeler.php">Four-Wheeler</a></li>
                    <?php 
                    if(isset($_SESSION['profile_type']) && $_SESSION['profile_type'] == 'Admin'){ ?>
                     <li><a href="visitorSM.php">Visitor</a></li>
                    <?php } else { ?>
                     <li><a href="#">Visitor</a></li>
                    <?php } ?>
                    
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fas fa-user-circle"></i>
                            <?php echo $_SESSION['username']; ?>
                        </a>
                        <ul class="dropdown-menu" style="padding: 30px;">
                            <div class="card card-danger">
                                <div class="card-heading text-center"> <i class="fas fa-user-circle"></i></div>
                                <p>Name:
                                    <?php echo $usrnm ?>
                                </p>
                                <p>Email:
                                    <?php echo $email ?>
                                </p>
                               
                                    <button type="edit" class="btn btn-success"><a href="Admin.php">My Profile</a></button>
                         
                        
                            </div>
                        </ul>
                    </li>

                    <li><a href="action.php?logout"><i class="fas fa-sign-out-alt"></i></a></li>
                </ul>
            </div>
        </div>
    </nav>