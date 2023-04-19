<?php
// Connect to the database
include 'action.php';
include 'auth.php';



// if ($_SERVER['REQUEST_METHOD'] == 'POST') {

//     // Get the form data
//     $username = $_POST['username'];
//     $name = $_POST['name'];
//     $email = $_POST['email'];
//     $phone = $_POST['phone'];
//     $address = $_POST['address'];
//     $verification_type = $_POST['verification_type'];
//     $password = $_POST['password'];
//     // Added verification proof field

//     $document = $_FILES["verification_proof"]["name"];
//     $target_dir = "images/";
//     $target_file = $target_dir . basename($_FILES["verification_proof"]["name"]);
//     move_uploaded_file($_FILES["verification_proof"]["tmp_name"], $target_file);


//     $sql = "INSERT INTO registereduser (username, name, email, phone, address, verification_type, password, verification_proof)
//     VALUES ('$username', '$name', '$email', '$phone', '$address', '$verification_type', '$password', '$target_file')";

//     if (mysqli_query($conn, $sql)) {
//         echo "<script>alert('Registration Successful!')</script>";
//         echo "<script>window.location.href='admin.php';</script>";
//     } else {
//         echo "Error: " . $sql . "<br>" . mysqli_error($conn);
//     }
// }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Manage Detail</title>

    <!-- Bootstrap -->

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <?php include('header.php') ?>
    <div class="container">
        <h2>User Data</h2>
            
        <div class="table-container" style="height: 200px; overflow-y: auto;">
          <table class="table table-condensed table-hover" id="myTable">
            <thead style="position: sticky; top : 0; color:white;" class="bg-primary">

                    <tr>
                        <th>Id</th>
                        <th>Username</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Verification Type</th>
                        <th>Verification Proof</th>
                        <th>Password</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM registereduser WHERE profile_type IN ('staff', 'visitor')";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // Output each row of data as a table row
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>" . $row["id"] . "</td>";
                            echo "<td>" . $row["username"] . "</td>";
                            echo "<td>" . $row["name"] . "</td>";
                            echo "<td>" . $row["email"] . "</td>";
                            echo "<td>" . $row["phone"] . "</td>";
                            echo "<td>" . $row["address"] . "</td>";
                            echo "<td>" . $row["verification_type"] . "</td>";
                            echo "<td>" . $row["verification_proof"] . "</td>";
                            echo "<td>" . $row["password"] . "</td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "0 results";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <hr class="my-hr">
    <?php include('footer.php') ?>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>

</html>