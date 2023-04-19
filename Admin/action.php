<?php
include 'server.php';

?>
<?php

//Registration
if (isset($_POST['register'])) {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        // Get the form data
        $username = $_POST['username'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $profile_type=$_POST['profile_type'];
        $verification_type = $_POST['verification_type'];
        $password = $_POST['password'];
        // Added verification proof field

        $document = $_FILES["verification_proof"]["name"];
        $target_dir = "images/";
        $target_file = $target_dir . basename($_FILES["verification_proof"]["name"]);
        move_uploaded_file($_FILES["verification_proof"]["tmp_name"], $target_file);


        $sql = "INSERT INTO registereduser (username, name, email, phone, address,profile_type , verification_type, password, verification_proof)
            VALUES ('$username', '$name', '$email', '$phone', '$address', '$profile_type','$verification_type', '$password', '$target_file')";

        if (mysqli_query($conn, $sql)) {
            echo "<script>alert('Registration Successful!')</script>";
            echo "<script>window.location.href='admin.php';</script>";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
}


//login 
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Query the database for the user
    $query = "SELECT * FROM registereduser WHERE username='$username' AND password='$password'";
    $result = $conn->query($query);

    // Check if the user exists
    if (mysqli_num_rows($result) > 0) {
        // User found, redirect to home page
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        $_SESSION['is_login'] = true;
      
        header('Location: dashboard.php');
        exit();
    } else {
        // Invalid credentials, show error message
        $error = "Invalid username or password";
    }
}
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    unset($_SESSION['is_login']);

    header('location: log in.php');
}


// apparmentpark permit
if (isset($_POST['insert'])) {
    // Get form data and sanitize input
    $name = $_POST['name'];
    $start_date = $_POST['startDate'];
    $end_date = $_POST['endDate'];
    $apartment_address = $_POST['apartmentaddress'];
    $capacity = $_POST['capacity'];
    $vehicle_number = $_POST['vehiclenumber'];
    $location = $_POST['location'];

    // Insert data into MySQL database
    $sql = "INSERT INTO apartment_rentals (id,name, start_date, end_date, apartment_address, capacity, vehicle_number, location) 
            VALUES ('','$name', '$start_date', '$end_date', '$apartment_address', '$capacity', '$vehicle_number', '$location')";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Record Successful!')</script>";
        echo "<script>window.location.href='appartmentpark.php';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

//public parking 

if(isset($_POST['publicsubmit']))
{
    // retrieve form values
    $name = $_POST['name'];
    $vehicleno= $_POST['vehicleno']; 
    $email=$_POST['email'];  
    $location = $_POST['location'];
    
    // create SQL query for insert operation
    $sql = "INSERT INTO public_park ( name,vehicleno ,email, location )  VALUES ('$name','$vehicleno' , '$email','$location')";

    // execute query and check for errors
    if (mysqli_query($conn, $sql)) {
         header("Location:publicparkingSM.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
//visitor 

if(isset($_POST['visitorsubmit']))
{
    // retrieve form values
    $vehicleNo = $_POST['vehicleno'];
    $vehicleType = $_POST['optionsRadio'];
    $location = $_POST['location'];
    $inTime = $_POST['datetime'];
    $date1=$_POST['date1'];
    $paymentType = $_POST['payment'];

    // create SQL query for insert operation
    $sql = "INSERT INTO visitor_ft  (vehicleno , optionsRadio ,location ,date1, payment )  VALUES ('$vehicleNo', '$vehicleType','$location',' $date1', '$paymentType')";

    // execute query and check for errors
    if (mysqli_query($conn, $sql)) {
         header("Location:visitorSM.php");
         exit();
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}


//Location Details

if(isset($_POST['locationsubmit']))
{
    // retrieve form values
    $address = $_POST['address'];  
    $location = $_POST['location'];
    
    // create SQL query for insert operation
    $sql = "INSERT INTO location_details ( address, location )  VALUES ('$address' ,'$location')";

    // execute query and check for errors
    if (mysqli_query($conn, $sql)) {
         header("Location:locationdetails.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>
