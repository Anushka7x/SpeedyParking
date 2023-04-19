<?php
include 'action.php';
// get the id of the vehicle from the URL parameter
$id = $_GET['id'];

// update the 'exit_time' field in the database for that vehicle
$update_query = "UPDATE two_wheeler SET exit_time = NOW(), updated_type='Updated' WHERE id = $id";
$result = mysqli_query($conn, $update_query);

if ($result) {
    // record updated successfully
header ('location:twowheeler.php');
exit();
} else {
    // record update failed
    echo "Error recording exit time: " . mysqli_error($conn);
}
?>