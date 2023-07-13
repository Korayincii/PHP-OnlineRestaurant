<?php
include_once 'nav.inc.php';
include 'connection.inc.php';
?>


<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<title>Catering</title>
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
body {font-family:"Times New Roman", serif}
h1,h2,h3,h4,h5,h6 {font-family:serif; letter-spacing:5px}
body{
    background-color: #e0e0e0;
}
button{
    background-color: #ced4da;
}
</style>
<body>

<!-- Start Content -->
<div id="home" class="w3-content">

<!-- Menu -->
<div id="menu" class="w3-padding-top-64">
<h1 class="w3-center">Menu</h1>
<div class="w3-row">

<div class="w3-col l6 m6 w3-padding-large">

<h4>Creamy Salmon</h4>
<b><p class="w3-text-grey">
<?php

$sql = mysqli_query($conn, "SELECT Fdescrip FROM foods WHERE Fname = 'Creamy Salmon' ");
while ($row2 = mysqli_fetch_array($sql)) 
{
    echo "$row2[Fdescrip]";

}
?>
</p></b><br> 

<p style="text-align: center; font-size: 25px;" name="price"><b><?php
$sql = mysqli_query($conn, "SELECT Fprice FROM foods WHERE Fname = 'Creamy Salmon' ");
while ($row2 = mysqli_fetch_array($sql)) 
{
    echo "$row2[Fprice]";

}
?></b></p>

<br>

<center><button>Order now!</button></center>

</div>

<div class="w3-col l6 m6 w3-padding-large">
<img src="./Photos/salmon.jpg" class="w3-round w3-image w3-opacity-min" alt="Menu" style="width:100%">
</div>

</div>

</div>


</div>

<!-- Start Content -->
<div id="home" class="w3-content">

<!-- Menu -->
<div id="menu" class="w3-padding-top-64">
<div class="w3-row">

<div class="w3-col l6 m6 w3-padding-large">

<h4>Coconut Fish Curry</h4>
<b><p class="w3-text-grey">
<?php

$sql = mysqli_query($conn, "SELECT Fdescrip FROM foods WHERE Fname = 'Coconut Fish Curry' ");
while ($row2 = mysqli_fetch_array($sql)) 
{
    echo "$row2[Fdescrip]";

}
?>
</p></b><br> 

<p style="text-align: center; font-size: 25px;" name="price"><b><?php
$sql = mysqli_query($conn, "SELECT Fprice FROM foods WHERE Fname = 'Coconut Fish Curry' ");
while ($row2 = mysqli_fetch_array($sql)) 
{
    echo "$row2[Fprice]";

}
?></b></p>

<br>

<center><button>Order now!</button></center>

</div>

<div class="w3-col l6 m6 w3-padding-large">
<img src="./Photos/curry.jpg" class="w3-round w3-image w3-opacity-min" alt="Menu" style="width:100%">
</div>

</div>

</div>


</div>

<!-- Start Content -->
<div id="home" class="w3-content">

<!-- Menu -->
<div id="menu" class="w3-padding-top-64">
<div class="w3-row">

<div class="w3-col l6 m6 w3-padding-large">

<h4>Shrimp</h4>
<b><p class="w3-text-grey">
<?php

$sql = mysqli_query($conn, "SELECT Fdescrip FROM foods WHERE Fname = 'Shrimp' ");
while ($row2 = mysqli_fetch_array($sql)) 
{
    echo "$row2[Fdescrip]";

}
?>
</p></b><br> 

<p style="text-align: center; font-size: 25px;" name="price"><b><?php
$sql = mysqli_query($conn, "SELECT Fprice FROM foods WHERE Fname = 'Shrimp' ");
while ($row2 = mysqli_fetch_array($sql)) 
{
    echo "$row2[Fprice]";

}
?></b></p>

<br>

<center><button>Order now!</button></center>

</div>

<div class="w3-col l6 m6 w3-padding-large">
<img src="./Photos/shrimp.jpg" class="w3-round w3-image w3-opacity-min" alt="Menu" style="width:100%">
</div>

</div>

</div>

</body>
</html> 
