<?php
session_start();

include 'config.php';
if(isset($_POST['change']))
{
    $oldpassword = $_POST['oldpass'];
    $newpassword = $_POST['newpass'];
    $repassword = $_POST['repass'];
$id = $_SESSION["id"];

$seluser = "SELECT * FROM `users` WHERE  id = '$id'";
$query = mysqli_query($con,$seluser);
$result=mysqli_fetch_array($query);

$getpassword = $result['password'];

if(password_verify($oldpassword,$getpassword))
{
    if($newpassword===$repassword)
    {
          $newpassword = password_hash($newpassword,PASSWORD_BCRYPT);
          $update = "UPDATE `users` SET `password` = '$newpassword'";
          if(mysqli_query($con,$update))
          {
            header("location:logout.php"); 
             
           }
    }
    else{

        $error2 = "new password and retype password must be same";
   header("location:settings.php?e2=$error2");
           
    }
}
else{
    $error1 = "Incorrect password";
   header("location:settings.php?e1=$error1");
}

}
?>