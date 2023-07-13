<?php


if (isset($_POST["submit"])) {


  @$name = $_POST["name"];
  @$email = $_POST["email"];
  @$phone = $_POST["phone"];
  @$userName = $_POST["uname"];
  @$pwd = $_POST["pwd"];
  @$pwdrepeat = $_POST["pwdrepeat"];
  require_once 'functions.inc.php';
  require_once 'connection.inc.php';


  if (emailExists($conn, $email, $userName) == true) {
    header("location: signup.php?error=emailtaken");
    exit();
  }

  if ($pwd == $pwdrepeat) {
    createUser($conn, $name, $phone, $email, $userName, $pwd);
  }
  else {
    header("location: signup.php?error=passwordsdontmatch");
    exit();
  }


}

else {
  header("location: login.php");
  exit();
}
