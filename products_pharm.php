<?php include('header.php'); ?>
<?php include('dbconn.php'); ?>
<?php include('config.php'); ?>

<html>
<head>


    <link rel="stylesheet" href="../css/button.css">




</head>
<div id="menu">
<ul>
</ul>
<ul>
<li><a href="pro_cus.php">Products</a>    <!--This is in main menu-->

</li>
<li><a href="hospitals.php">Hospitals</a>    <!--This is in main menu-->

</li>
</ul>
<ul><li><a href="report.php">Pharmacy</a></li></ul>
<ul><li><a href="logout.php">Logout</a></li></ul>
</div>
<?php
error_reporting(0);
session_start();
if (!isset($_SESSION['user'])) {
    header('location:logout.php');
}
?>
<?php
$userID = $_SESSION['id'];
//echo $userID;

?>


<div class="majhe">

<?php
$result = mysql_query("SELECT * FROM product");
if (!$result) {
    echo 'Could not run query: ' . mysql_error();
    exit;
}


echo "<table border='1'>
<tr>
<th>Products</th>
<th>generic</th>
<th>prices</th>
<th>quantity</th>
<th>Adding</th>
</tr>";

//$row = mysql_fetch_row($result);

while ($row = mysql_fetch_array($result)) { 

echo "<tr>";
echo "<td>" . $row[1] . "</td>";
echo "<td>" . $row[2] . "</td>";
echo "<td>" . $row[4] . "</td>";
echo "<td>" . $row[3] . "</td>";
echo "<td> <input type='submit' name='submit' onclick='first()' value='Add to queue'></td>";

echo "</tr>";
}
?>



<?php

echo "</table>";
?>

</div>
</html>