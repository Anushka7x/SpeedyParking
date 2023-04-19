<?php 
include 'action.php';
$id = $_GET['id'];
$deletequery = "DELETE FROM public_park WHERE id = $id";
$query = mysqli_query($conn, $deletequery);

if ($query == true) {
  echo "<script>alert('Deleted successfully');</script>";
  echo "<script>window.location.href='Add public parking SM (1).php';</script>";
} else {
  echo "<script>alert('Deletion failed');</script>";
}


    ?>
