<?php
include_once 'nav.inc.php';
?>


<link rel="stylesheet" href="login.css">
<script src="https://kit.fontawesome.com/d00289d879.js"crossorigin="anonymous"></script>
<script defer src="https://friconix.com/cdn/friconix.js"></script>
<div class="main">  
<div class="login">
<h2>Reset Your Password</h2>
<form action="" method="post">
    <input type="text" name="mail" placeholder="E-mail"><br>
    <input type="password" name="pwd" placeholder="New Password"><br>
    <input type="password" name="pwdagain" placeholder="New Password Again"><br>
    <button type="submit" name="submit">Reset Your Password</button>
    <?php

include 'connection.inc.php';
include 'functions.inc.php';

@$email = $_POST['mail'];
@$userName = $_POST['mail'];
@$pwd = $_POST['pwd'];
@$pwdagain = $_POST['pwdagain'];
@$sub = $_POST['submit'];
$emailExists = emailExists($conn, $userName, $email);

if (isset($sub)) {
    if ($emailExists == false) {
        echo "User cannot found!";
    }
    else {
        if ($pwd == $pwdagain) {
            $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
            $query = mysqli_query($conn, "UPDATE users SET Password='$hashedPwd' WHERE Mail= '$email' ");

        }

        else {
            echo("Not match");

        }
    }


}

?>


</form>
</div>	
</div>




