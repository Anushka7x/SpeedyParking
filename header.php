<?php
//include 'action.php';



// Get the current page name or identifier
$currentFile = $_SERVER["PHP_SELF"];
$parts = explode('/', $currentFile);
$pageName = end($parts);
// You can update this logic to determine the current page name or identifier as needed

// Initialize the $currentPage variable
$currentPage = '';

switch ($pageName) {
    case 'dashboard.php':
        $currentPage = 'dashboard';
        break;
    case 'appartmentpark.php':
    case 'Add public parking SM (1).php':
        $currentPage = 'parking';
        break;
    case 'parkingusage.php':
        $currentPage = 'parkingusage';
        break;
    case 'twowheeler.php':
        $currentPage = 'twowheeler';
        break;
    case 'fourwheeler.php':
        $currentPage = 'fourwheeler';
        break;
    case 'visiter SM.php':
        $currentPage = 'visitor';
        break;
    default:
        // default value
        break;
}

// Add more conditions to set $currentPage for other pages as needed
$usrnm = $_SESSION['username'];



$sql = "SELECT * FROM registereduser WHERE username='$usrnm'";

// Execute the query and get the result
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $name = $row['name'];
    $email = $row['email'];
    $phone = $row['phone'];
    $address = $row['address'];
    $verification = $row['verification_type'];
    $profile_type = $row['profile_type'];
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
            <?php if ($profile_type == 'admin' || $profile_type == 'staff') { ?>
                <li <?php if ($currentPage == 'dashboard') {
                    echo 'class="active"';
                } ?>>
                    <a href="dashboard.php">Dashboard</a>
                </li>
               
                <li class="dropdown <?php if ($currentPage == 'parking' || $currentPage == 'addpublic') {
                    echo 'active';
                } ?>">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                        aria-expanded="false">Parking <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="appartmentpark.php">Apartment Permit</a></li>
                        <li><a href="Add public parking SM (1).php">Public </a></li>
                    </ul>
                </li>
                <?php }?>
                <?php if ($profile_type == 'admin' || $profile_type == 'staff') { ?>
                    <li <?php if ($currentPage == 'twowheeler') {
                        echo 'class="active"';
                    } ?>>
                <a href="twowheeler.php">Two Wheeler</a>
                    </li>
                    <li <?php if ($currentPage == 'fourwheeler') {
                        echo 'class="active"';
                    } ?>>
                <a href="fourwheeler.php">Four Wheeler</a>
                    </li>
                <?php } ?>
           
                <?php if ($profile_type == 'admin' || $profile_type == 'visitor') { ?>
                    <li <?php if ($currentPage == 'visitor') {
                        echo 'class="active"';
                    } ?>>
                <a href="visiter SM.php">Visitor</a>
                    </li>
                <?php } ?>
                <?php if ($profile_type == 'admin' || $profile_type == 'staff' || $profile_type == 'visitor') { ?>
                    <li <?php if ($currentPage == 'parkingusage') {
                        echo 'class="active"';
                    } ?>>
                <a href="parkingusage.php">Parking usage</a>
                    </li>
                <?php } ?>
            </ul>

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
                                <?php echo $_SESSION['username']; ?>
                            </p>
                            <p>Email:
                                <?php echo $email ?>
                            </p>
                            <p>Phone:
                                <?php echo $phone ?>
                            </p>
                            <p>Address:
                                <?php echo $address ?>
                            </p>
                            <p>Holder:
                                <?php echo $profile_type ?>
                            </p>

                            <?php if ($profile_type == 'admin') { ?>
                                <button type="edit" class="btn btn-success"><a href="Admin.php">My Profile</a></button>
                            <?php } else { ?>
                            <?php } ?>
                        </div>
                    </ul>
                </li>

                <li><a href="action.php?logout"><i class="fas fa-sign-out-alt"></i></a></li>
            </ul>
        </div>
    </div>
</nav>