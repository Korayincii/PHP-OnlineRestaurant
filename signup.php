<?php
include_once 'nav.inc.php';
?>



<link rel="stylesheet" href="signupp.css">
<script src="https://kit.fontawesome.com/d00289d879.js"crossorigin="anonymous"></script>
<script defer src="https://friconix.com/cdn/friconix.js"></script>
<div class="main">  
<div class="login">
<section class="signup-form">
<h2>Sign Up</h2>
<form action="signup.inc.php" method="post">
    <input type="text" name="name" placeholder="Full Name" ><br>
    <input type="text" name="phone" placeholder="Phone Number" ><br>
    <input type="text" name="email" placeholder="Email" required><br>
    <input type="text" name="uname" placeholder="Username" ><br>
    <input type="password" name="pwd" placeholder="Password"><br>
    <input type="password" name="pwdrepeat" placeholder="Repeat Password"><br>
	<center><a href="login.php">Already have an account ?</a><br></center>
    <button type="submit" name="submit">Sign Up</button>
    <?php
if (isset($_GET["error"])) {
  


  if ($_GET["error"] == "stmtfailed") {
    echo "<p style='color: red;'>Something went wrong,please try again!</p>";
  }

  else if ($_GET["error"] == "passwordsdontmatch") {
    echo "<p style='color: red;'>Passwords don't match!</p>";
  }

  else if ($_GET["error"] == "none") {
    echo "<p style='color: red;'>You have signed up!</p>";
  }

  else if ($_GET["error"] == "emailtaken") {
    echo "<p style='color: red;'>Email or Username already taken!</p>";
  }


}
?>
</form>
</div>	
</div>


</section>




