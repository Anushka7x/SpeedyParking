<?php

if($_SESSION['is_login']  != true){
   header('Location:log in.php');
}
?>