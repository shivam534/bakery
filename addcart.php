<?php
session_start();
include 'config.php';
if (!isset($_SESSION["loggedin"])) {
    header("location: login.php");
    exit;
}


$iduser=$_SESSION["id"];
$idproduct = $_POST['datapost'];


$sel = "SELECT * FROM `cart` where product_id = '$idproduct' AND user_id = '$iduser'";
$query = mysqli_query($con,$sel);

if(!mysqli_num_rows($query)>0)
{

$insert = "INSERT INTO `cart`(`user_id`,`product_id`)VALUES('$iduser','$idproduct')";
 
if(mysqli_query($con,$insert))
{
   echo "<script>alert('added')</script>";
}
}
else
{
   echo " <script>alert('Element already added to your cart ')</script>"; 
}
?>