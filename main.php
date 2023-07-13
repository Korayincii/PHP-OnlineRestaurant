<?php
include_once 'nav.inc.php';
?>


<!DOCTYPE html>
<html lang='en'>

<head>
    <link rel='stylesheet' href='mywebb.css'>
    <script src="https://kit.fontawesome.com/d00289d879.js" crossorigin="anonymous"></script>
    <script defer src="https://friconix.com/cdn/friconix.js"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
.mySlides {display:none;}
</style>
</head>
    <title>Document</title>
</head>
<body>

  <?php
if (isset($_SESSION["username"])) {
    echo "<center><h3><b>Welcome " . $_SESSION["username"] . "</h3></b></center>";
}
else{
    header("Location: login.php");
    exit();
}
?>
    <form method='post'>
        <div id='selectcity'>
            <b><p>This city has been selected:
                    <?php
@$abca = $_POST['city'];
echo "$abca"; ?>
                </b></p>
            <b><p>This foodtype has been selected:
            <?php
@$selectedfood = $_POST['foodtype'];
echo "$selectedfood"; ?>
            </b></p>
        </div>
        <div class="flex-container">
            <div class="flex-child-magenta">
            <br>
            <b> <label for='city'>Please Select Your City:</label></b>
            <select style='width: 15%' name='city'>
                <option disabled selected name='city'> </option>
                <option name='city'>Alaska</option>
                <option name='city'>New Jersey</option>
                <option name='city'>New York</option>
                <option name='city'>Texas</option>
            </select>
            <br><br>
                <b><label for='foodtype'>Choose a food type:</label></b>
                <select name='foodtype'>

                    <option disabled selected>Food Type</option>
                    <option name="foodtype" value='fastfood'>Fastfood</option>
                    <option name="foodtype" value='traditional'>Traditional</option>
                    <option name="foodtype" value='fishandseafood'>FishandSeafood</option>
                    <option name="foodtype" value='meat'>Meat</option>
                </select> <br>

                <input type='hidden' name='selected_text' id='selected_text' value='' /><br><br> <br>
                <center><input style="width:20%;height:50px;" type="submit" value="Search" name="submit"></center>
    
    </div>
    <div class="flex-child-green">
<?php
$conn = mysqli_connect('localhost', 'root', '', 'myrestaurant') or die('Cannot connect');
@$macity = $_POST['city'];
@$food = $_POST['foodtype'];
$result = mysqli_query($conn, "SELECT * FROM restaurants WHERE Restaurant_Type LIKE '%$food%' && Restaurant_City LIKE '%$macity%'");
@$srch = $_POST['submit'];

if (isset($srch)) {
    while ($row2 = mysqli_fetch_array($result)) 
{
        echo "$row2[Restaurant_Name]";
        echo " || Location: $row2[Restaurant_Location] || ";
        echo "$row2[links]";
        echo "<br>";
        echo "<br>";
    }
}

?>

</div>
</div>
</form>


<div class="w3-content w3-section" style="max-width:300px;">
  <img class="mySlides" src="./Photos/bb.jpg" style="width:100%">
  <img class="mySlides" src="./Photos/cc.jpg" style="width:100%">
  <img class="mySlides" src="./Photos/dd.jpg" style="width:100%">
  <img class="mySlides" src="./Photos/ll.jpg" style="width:100%">
</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>
</div>
</div>
</body>
</html>
