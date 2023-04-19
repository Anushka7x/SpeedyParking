<!DOCTYPE html>
<html lang="en">

<head>
    <!-- include SweetAlert library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

</head>

</html>
<?php
include 'server.php';
//include 'auth.php';
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
        $verification_type = $_POST['verification_type'];
        $password = $_POST['password'];
        $profile_type = $_POST['profile_type'];
        // Added verification proof field

        $document = $_FILES["verification_proof"]["name"];
        $target_dir = "images/";
        $target_file = $target_dir . basename($_FILES["verification_proof"]["name"]);
        move_uploaded_file($_FILES["verification_proof"]["tmp_name"], $target_file);


        $sql = "INSERT INTO registereduser (username, name, email, phone, address, verification_type, password, verification_proof,profile_type)
            VALUES ('$username', '$name', '$email', '$phone', '$address', '$verification_type', '$password', '$target_file','$profile_type')";

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
        $profile_type = $row['profile_type'];


        if ($profile_type == 'admin' || $profile_type == 'staff') {
            echo "<script>
                swal({
                    title: 'Success',
                    text: 'You have successfully logged in',
                    icon: 'success',
                    timer: 2000,
                    showConfirmButton: false
                });
                setTimeout(function(){
                    window.location.href = 'dashboard.php';
                }, 2000);
              </script>";
        } else {
            // Show success message using SweetAlert
            echo "<script>
                swal({
                    title: 'Success',
                    text: 'You have successfully logged in',
                    icon: 'success',
                    timer: 2000,
                    showConfirmButton: false
                });
                setTimeout(function(){
                    window.location.href = 'visiter SM.php';
                }, 2000);
              </script>";
        }
    } else {
        // Invalid credentials, show error message using SweetAlert
        echo "<script>
                swal({
                    title: 'Error',
                    text: 'Invalid username or password',
                    icon: 'error',
                    timer: 2000,
                    showConfirmButton: false
                });
                setTimeout(function(){
                    window.location.href = 'log in.php';
                }, 2000);
              </script>";
    }
}


// Display the error message on the same page



if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    unset($_SESSION['is_login']);

    header('location: log in.php');
}

if (isset($_POST['insert'])) {
    // Get form data and sanitize input
    $name = $_POST['name'];
    $end_date = $_POST['endDate'];
    $apartment_address = $_POST['apartmentaddress'];
    $capacity = $_POST['capacity'];
    $vehicle_number = $_POST['vehiclenumber'];
    $location = $_POST['location'];
    
    // Insert data into MySQL database
    $sql = "INSERT INTO apartment_rentals (id,name, end_date, apartment_address, capacity, vehicle_number, location) 
            VALUES ('','$name',  '$end_date', '$apartment_address', '$capacity', '$vehicle_number', '$location')";

    if (mysqli_query($conn, $sql)) {
        echo "<script>
        swal({
            title: 'Permitted',
            text: 'Now Permitted!',
            type: 'success',
            timer: 2000,
            showConfirmButton: false
        });
        setTimeout(function(){
            window.location.href = 'appartmentpark.php';
        }, 2000);
      </script>";
      
      try {
        // Attempt to insert the new record into the apartmental_rental table
        $stmt = mysqli_prepare($conn, "INSERT INTO apartmental_rental (vehicle_number, owner_name) VALUES (?, ?)");
        mysqli_stmt_bind_param($stmt, "ss", $vehicle_number, $name);
        mysqli_stmt_execute($stmt);
        
        // If the insertion succeeds, do any additional processing here
        // ...
        
      } catch (mysqli_sql_exception $e) {
        // If the insertion fails due to a duplicate vehicle number, handle the error here
        if ($e->getCode() == 23000) {
            echo "<script>
        swal({
          title: 'Error!',
          text: 'Something went wrong!',
          icon: 'error',
          button: 'OK'
        });
        </script>";        } else {
          echo "" . $e->getMessage();
        }
      }
      
    } else {
        echo "Error: ". "<br>" . mysqli_error($conn);
    }
}



// public parking

if (isset($_POST['publicsubmit'])) {
    // retrieve form values

    $name = $_POST['name'];
    $email = $_POST['email'];
    $location = $_POST['location'];
    $vehicleno = $_POST['vehicle_number'];

    // create SQL query for insert operation
    $sql = "INSERT INTO public_park ( id,name,email, location ,vehicle_number )  VALUES ('','$name', '$email','$location','$vehicleno')";

    // execute query and check for errors
    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Add Successful!')</script>";
        echo "<script>window.location.href='Add public parking SM (1).php';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
} //deleted ,
// update code add public parking

if (isset($_POST['updatepublicsubmit'])) {
    // retrieve form values
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $location = $_POST['location'];
    $vehicleno = $_POST['vehicle_number'];

    // create SQL query for update operation
    $supdate = "UPDATE public_park SET name='$name', email='$email', location='$location', vehicle_number='$vehicleno' WHERE id='$id'";

    // execute query and check for errors
    if (mysqli_query($conn, $supdate)) {
        header("location:Add public parking SM (1).php");
    } else {
        echo "Error: " . $supdate . "<br>" . mysqli_error($conn);
    }
}


// visitor

if (isset($_POST['visitorsubmit'])) {
    // retrieve form values
    $vehicleNo = $_POST['vehicle_number'];
    $vehicleType = $_POST['optionsRadio'];
    $location = $_POST['location'];
    $inTime = $_POST['datetime'];
    $paymentType = $_POST['payment'];

    // create SQL query for insert operation
    $sql = "INSERT INTO visitor_ft  (vehicle_number , optionsRadio ,location , payment )  VALUES ('$vehicleNo', '$vehicleType','$location', '$paymentType')";

    // execute query and check for errors
    if (mysqli_query($conn, $sql)) {
        header("Location:visiter SM.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
} //deleted 
// update code in visitor SM


if (isset($_POST['updatevisitorsubmit'])) {
    // retrieve form values
    $id = $_POST['id'];
    $vehicleNo = $_POST['vehicleno'];
    $vehicleType = $_POST['optionsRadio'];
    $location = $_POST['location'];
    $paymentType = $_POST['payment'];

    // create SQL query for update operation
    $supdate = "UPDATE visitor_ft SET vehicleno='$vehicleNo', optionsRadio='$vehicleType', location='$location', payment='$paymentType' WHERE id='$id'";

    // execute query and check for errors
    if (mysqli_query($conn, $supdate)) {
        header("location:visiter SM.php");
    } else {
        echo "Error: " . $supdate . "<br>" . mysqli_error($conn);
    }
}


// Give Parking of two/four wheelers from dashboard 

if (isset($_POST['submit'])) {
    $OwnersName = $_POST['OwnersName'];
    $vehicleNumber = $_POST['vehicle_number'];
    $vehicleType = $_POST['vehicle_type'];
    $location = $_POST['location'];
    $date = $_POST['date'];
    $exit_time = $_POST['exit_time'];
    $permit = $_POST['permit'];
    // $query = "SELECT * FROM apartment_rentals WHERE  vehicle_number='$vehicleNumber'";
    // $result = mysqli_query($conn, $query);
    // $apCount=mysqli_num_rows($result);
    $query1 = "SELECT * FROM two_wheeler WHERE vehicle_number = '$vehicleNumber' AND updated_type = 'Updated'";
    $result1 = mysqli_query($conn, $query1);
    $twCount = mysqli_num_rows($result1);
    $query2 = "SELECT * FROM four_wheeler WHERE  vehicle_number='$vehicleNumber'";
    $result2 = mysqli_query($conn, $query2);
    $fwCount = mysqli_num_rows($result2);
    if ($twCount == 0 && $fwCount == 0) {


        if ($permit == 'Yes') {
            // Check if the person is a permitted member in the database
            $query = "SELECT * FROM apartment_rentals WHERE name='$OwnersName' AND vehicle_number='$vehicleNumber'";
            $result = mysqli_query($conn, $query);


            if (mysqli_num_rows($result) > 0) {
                $permitStatus = 'Permitted';
            } else {
                $permitStatus = 'Guest Parking';
            }
        } else {
            $permitStatus = 'Guest Parking';
        }

        if ($vehicleType == 'two_wheeler') {
            $insertQuery = "INSERT INTO two_wheeler (id,OwnersName, vehicle_number,vehicle_type, location, exit_time, permit) 
VALUES ('','$OwnersName', '$vehicleNumber', '$vehicleType','$location', '$exit_time', '$permitStatus')";
        } else {
            $insertQuery = "INSERT INTO four_wheeler (id,OwnersName, vehicle_number,vehicle_type, location, exit_time, permit) 
VALUES ('','$OwnersName', '$vehicleNumber','$vehicleType', '$location', '$exit_time', '$permitStatus')";
        }

        $result = mysqli_query($conn, $insertQuery);

        if ($result) {
            echo "<script>
        swal({
          title: 'Success!',
          text: 'Parked!',
          icon: 'success',
          button: 'OK'
        }).then(function() {
          window.location.href='dashboard.php';
        });
        </script>";
        } else {
            echo "<script>
        swal({
          title: 'Error!',
          text: 'Something went wrong!',
          icon: 'error',
          button: 'OK'
        });
        </script>";
        }
    } else {
        echo "<script>
    swal({
      title: 'Error!',
      text: 'Vehicle number already Exist!',
      icon: 'error',
      button: 'OK'
    }).then(function() {
        window.location.href='dashboard.php';
      });    </script>";
    }
}

// exit vehicle code loaction:recordexit.php, and for four wheeler location: recordfourwhleelerexit.php

// send message query

if (isset($_POST['sendmsg'])) {
    // Get form data

    // Get the form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    // Insert the message into the database
    $sql = "INSERT INTO messages (name, email,subject, message) VALUES ('$name', '$email','$subject', '$message')";
    $result = mysqli_query($conn, $sql);



    if ($result) {
        echo "<script>
        swal({
          title: 'Success!',
          text: 'Sent Successful!',
          icon: 'success',
          button: 'OK'
        }).then(function() {
          window.location.href='dashboard.php';
        });
        </script>";
    } else {
        echo "<script>
        swal({
          title: 'Error!',
          text: 'Something went wrong!',
          icon: 'error',
          button: 'OK'
        });
        </script>";
    }

}


// edit profiles of staffs

if (isset($_POST['profilesubmit'])) {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        // Get the form data
        $id = $_POST['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];

        // create SQL query for update operation
        $supdate = "UPDATE registereduser SET name='$name', email='$email', phone='$phone', address='$address' WHERE id='$id'";

        // execute query and check for errors
        if (mysqli_query($conn, $supdate)) {
            header("location:editprofile.php");
        } else {
            echo "Error: " . $supdate . "<br>" . mysqli_error($conn);
        }
    }
}

// Given Locations for Parkings

if (isset($_POST['locationsubmit'])) {
    // retrieve form values
    $address = $_POST['address'];
    $location = $_POST['locations'];

    // create SQL query for insert operation
    $sql = "INSERT INTO location_details ( address, locations )  VALUES ('$address' ,'$location')";

    // execute query and check for errors
    if (mysqli_query($conn, $sql)) {
        header("Location:locationdetails.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}


// 

?>