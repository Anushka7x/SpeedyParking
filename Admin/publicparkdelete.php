<?php
include 'server.php';
include 'auth.php';

$id= $_GET['id'];
$deletequery="delete from public_park where id=$id";

$query = mysqli_query($conn , $deletequery);
if($query)
{
    echo "<script>alert('Deleted successfully');</script>";
    echo "<script>window.location.href='publicparkingSM.php';</script>";   
}
else
{
    echo "<script>alert('Deleted failed');</script>";
}
?>