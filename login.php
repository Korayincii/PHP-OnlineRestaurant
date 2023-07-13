<?php
include_once 'nav.inc.php';
?>

<link rel="stylesheet" href="login.css">
<script src="https://kit.fontawesome.com/d00289d879.js"crossorigin="anonymous"></script>
<script defer src="https://friconix.com/cdn/friconix.js"></script>


<section class="signup-form">
<div class="main">  
<div class="login">
<h2>Log In</h2>
<form action="login.inc.php" method="post">
<input type="text" name="email" placeholder="Email/Username"><br>
<input type="password" name="pwd" placeholder="Password"><br>
<button type="submit" name="submit">Log In</button>
<center><a style="color:white;" href="signup.php">Don't you have an account ?</a><br></center><br>
<center><a style="color:white;" href="forgotpassword.php">Forgot Your Password ?</a><br></center>
<?php
if (isset($_GET["error"])) {
  if ($_GET["error"] == "emptyinput") {
    echo "<p style='color: red;'>Fill in all fields!</p>";
  }

  else if ($_GET["error"] == "wronglogin") {
    echo "<p style='color: red;'>Incorrect login information!</p>";
  }
}

?>
</form>
</div>	
</div>

</section>



