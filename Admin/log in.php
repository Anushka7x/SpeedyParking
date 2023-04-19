<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Log in</title>

    <!-- Bootstrap -->

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="stylesheet" href="./Style.css">
</head>

<body class="loginbody">
    <div class="logo-container">
        <img class="logo-img" src="speedy-parking-low-resolution-logo-color-on-transparent-background.png" alt="Logo">
    </div>

    <?php
    // Connect to the database
    // $servername = "localhost";
    // $username = "root";
    // $password = "";
    // $dbname = "speedypark";

    // $conn = new mysqli($servername, $username, $password, $dbname);

    // // Check connection
    // if ($conn->connect_error) {
    //     die("Connection failed: " . $conn->connect_error);
    // }

    // // Process login form submission
    // if (isset($_POST['submit'])) {
    //     $username = $_POST['username'];
    //     $password = $_POST['password'];

    //     // Query the database for the user
    //     $query = "SELECT * FROM registereduser WHERE username='$username' AND password='$password'";
    //     $result = $conn->query($query);

    //     // Check if the user exists
    //     if ($result->num_rows == 1) {
    //         // User found, redirect to home page
    //         $user = mysqli_fetch_assoc($result);
    //         $_SESSION['username'] = $user['username'];
    //         header('Location: dashboard.php');
    //         exit();
    //     } else {
    //         // Invalid credentials, show error message
    //         $error = "Invalid username or password";
    //     }
    // }
    include 'action.php';
 
    ?>

    <div class="container">
        <?php if (isset($error)) { ?>
            <p style="color:red; align:center;" >
                <?php echo $error; ?>
            </p>
        <?php } ?>
        <div class="container Amain">
            <div class="row">
                <form method="post" action="action.php">
                    <div class="form-group">
                        <label for="username">Username:</label>
                        <input type="text" class="form-control" id="username" placeholder="username" name="username">
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" class="form-control" id="password" placeholder="password" name="password">
                    </div>
                    <button type="submit" class="btn btn-primary" name="login">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>

</body>

</html>