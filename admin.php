<!DOCTYPE html>
<html lang='en'>

<head>
    <link rel='stylesheet' href='admin.css'>
    <script src="https://kit.fontawesome.com/d00289d879.js" crossorigin="anonymous"></script>
    <script defer src="https://friconix.com/cdn/friconix.js"></script>
</head>
    <title>Document</title>
</head>
<body>
<nav>
    <ul>
      <li><a style='float: right;color:white;' href='logout.php'>Logout <br><i class='fi-xnsuxl-sign-out-solid'></i></a></li>
      <li class="centerElement" style= "color: white;">Bring It!<br><i class="fi-xnsuxl-shopify"></i></li>
    </ul>
  </nav>
        <div class="flex-container">
            <div class="flex-child-magenta">
            <form action="" method="post">
            <textarea name="entersql" placeholder="Enter Your SQL" cols="70" rows="6"><?php
@$select = $_POST['select'];
@$insert = $_POST['insert'];
@$update = $_POST['update'];
@$delete = $_POST['delete'];
@$entersql = $_POST['entersql'];

if (isset($select)) {
    echo "SELECT * FROM 'restaurants' WHERE 1";

}

elseif (isset($insert)) {
    echo "INSERT INTO `restaurants`(`Restaurant_Name`, `Restaurant_Type`, `Restaurant_City`, `Restaurant_Location`, `links`, `Price`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]')";
}

elseif (isset($update)) {
    echo "UPDATE `restaurants` SET `Restaurant_Name`='[value-1]',`Restaurant_Type`='[value-2]',`Restaurant_City`='[value-3]',`Restaurant_Location`='[value-4]',`links`='[value-5]',`Price`='[value-6]' WHERE 1";
}

elseif (isset($delete)) {
    echo "DELETE FROM `restaurants` WHERE 0";
}
?></textarea><br>
            <input style="width:15%;height:50px;" type="submit" value="Select *" name="select">
            <input style="width:15%;height:50px;" type="submit" value="Insert" name="insert">
            <input style="width:15%;height:50px;" type="submit" value="Update" name="update">
            <input style="width:15%;height:50px;" type="submit" value="Delete" name="delete">
            <input type='hidden' name='selected_text' id='selected_text' value='' /><br><br> <br>
             <center><input style="width:20%;height:50px;" type="submit" value="Run Code" name="submit">
             <input style="width:20%;height:50px; float:left;" type="submit" value="Sort" name="sort"></center>

             
            </form>

    </div>
    <div class="flex-child-green">
<?php
$conn = mysqli_connect('localhost', 'root', '', 'myrestaurant') or die('Cannot connect');
@$macity = $_POST['city'];
@$food = $_POST['foodtype'];
$result = mysqli_query($conn, "SELECT * FROM restaurants WHERE Restaurant_Type LIKE '%$food%' && Restaurant_City LIKE '%$macity%'");
@$srch = $_POST['submit'];
@$sort = $_POST['sort'];
@$entersql = $_POST['entersql'];

if (isset($srch)) {
    @$sql = mysqli_query($conn, $entersql);

    echo "Successfully! <br> <br>";

}

elseif (isset($sort)) {
    @$query = mysqli_query($conn, "SELECT * FROM restaurants");
    while ($row2 = mysqli_fetch_array($query)) {
        echo "$row2[Restaurant_Name]";
        echo " || Location: $row2[Restaurant_Location] ";
        echo "$row2[links]";
        echo " || Price: $row2[Price] ";
        echo "<br>";
        echo "<br>";
    }
}


else {
    @$sql = mysqli_query($conn, $entersql);
}

?>

</div>
</div>
</form>
</body>
</html>
