<?php

$adminpass = $_POST['pwd'];

if ($adminpass == "myadmin") {
    header("Location: admin.php");
    exit();
}

else {
    header("Location: login.php");
    exit();
}