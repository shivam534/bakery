<?php
ob_start();
include 'config.php';
include 'bootstrap.php';

include 'header.php';

?>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<div class="container-fluid">
    <div class="col-lg-5" style="margin-top:10px;">
        <form action="#" method="POST">
            <div class="form-group">
                <label for="">Enter email:(OTP will be sent to this mail)</label>
                <input type="email" class="form-control" name="email" value="<?php if (isset($_COOKIE['adminemail'])) {
                                                                                    echo $_COOKIE['adminemail'];
                                                                                } ?>">
                <button name="send" style="font-size: 15px; margin-top: 5px; float:right">Send OTP</button>
            </div>
            <div class="form-group">
                <label for="">Enter OTP (Sent to above email):</label>
                <input type="number" class="form-control" name="otp">
            </div>
            <div class="form-group">
                <label for="">Choose password:</label>
                <input type="password" class="form-control" name="password">
            </div>
            <div class="form-group">
                <label for="">Re-type password:</label>
                <input type="password" class="form-control" name="repassword">
            </div>
            <div class="form-group">
                <button class="btn btn-success" name="change">Submit</button>
            </div>

        </form>
    </div>
</div>

<?php

if (isset($_POST['send'])) {
    $otp = mt_rand(1000, 9999);

    setcookie("otp",$otp, time()+75);

    $email_to = $_POST['email'];
    setcookie("adminemail",$email_to, time()+120);


    $subject = "Email verification for password changing";
    $body = "Your one time password is $otp";
    $headers = "From:shivam";
    if (mail($email_to, $subject, $body, $headers)) {
        echo "<script>alert('Check your email for otp')</script>";
    } else {
        echo "error occured";
    }
}
if(isset($_POST['change']))
{
    $opt = $_POST['otp'];
    if($opt==$_COOKIE['otp'])
    {
        echo "<script>alert('OTP matched')</script>";
    }
}
?>