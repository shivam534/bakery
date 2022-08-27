<?php

session_start();

include 'config.php';

$iduser = $_SESSION['id'];

$del = "DELETE FROM `cart` WHERE  user_id = '$iduser'";

if(mysqli_query($con,$del))
{
    header("location:cart.php");
}



?>