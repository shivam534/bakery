<!--<center>
    <p style="font-size:200px;margin-top: 150px;">Working on it....</p>
 <img src="gif.gif" alt="" style="margin-top: 100px;">
</center>-->
<?php

session_start();

$uname = $_SESSION['username'];
$productname=$_GET['name'];


?>
<style>
    .work{
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
        top: 30%;
        font-size: 30px;
    }
</style>
<div class="work">
    <p><b><?php  echo $uname  ?></b> you have requested for <b><?php echo $productname ?> </b></p>
    
</div>
<?php
/*
$email_to = 'shivamsrivastava30jan@gmail.com';
$subject = "Product_Request";
$body = "$uname requested for $productname please provide positive reply
to him";
$headers = "From:shivam";
if (mail($email_to, $subject, $body, $headers)) {
 header("location:cart.php");
} else {
    echo "error occured";
}*/
?>
