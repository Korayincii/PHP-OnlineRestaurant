<?php
session_start();
?>

<style>
  
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    float: inline-start;
}

li {
    float: left;
}

li a,
.dropbtn {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover,
.dropdown:hover .dropbtn {
    background-color: black;
}

li.dropdown {
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: white;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {
    background-color: #f1f1f1;
}

.dropdown:hover .dropdown-content {
    display: block;
}

nav {
    background-color: black;
    padding: 0px;
    margin: 0 auto;
    text-align: center;
    vertical-align: top;
}

.centerElement {
    margin-left: 40%;
}
</style>

<script src="https://kit.fontawesome.com/d00289d879.js" crossorigin="anonymous"></script>
<script defer src="https://friconix.com/cdn/friconix.js"></script>

<nav>
    <ul>
      <li class="centerElement" style= "color: white;">Bring It!<br><i class="fi-xnsuxl-shopify"></i></li>
    
	  <?php
if (isset($_SESSION["username"])) {
    echo "<a style='float: right;color:white;' href='logout.php'>Logout <br><i class='fi-xnsuxl-sign-out-solid'></i></a>";
}
else {
    echo "<li style='float: right;' class='dropdown'>
        <a href='javascript:void(0)' class='dropbtn'><i class='fas fa-id-card'></i> Sign In/Sign Up</a>";
    echo " <div class='dropdown-content'>
          <a href='login.php'>Sign In &nbsp;&nbsp;&nbsp; <i class='fas fa-user'></i></a>
          <a href='signup.php'>Sign Up &nbsp;&nbsp;<i class='fas fa-users'></i></a>";
}
?>
      </li>
    </ul>
  </nav>