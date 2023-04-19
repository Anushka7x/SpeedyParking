<?php
include 'action.php';
include 'auth.php';

$id= $_GET['id'];
$deletequery="delete from visitor_ft where id=$id";

$query = mysqli_query($conn , $deletequery);
if($query)
{
    echo "<script>alert('Deleted successfully');</script>";
    echo "<script>window.location.href='visiter SM.php';</script>";   
}
else
{
    echo "<script>alert('Deleted failed');</script>";
}


?>