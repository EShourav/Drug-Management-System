<?php include('header.php'); ?>
<?php include('dbconn.php'); ?>
<?php include('config.php'); ?>

<html>
<head>


    <link rel="stylesheet" href="../css/button.css">




</head>
<div id="menu">

<ul>
<li><a href="pro_cus.php">Products</a>    <!--This is in main menu-->

</li>
<li><a href="hospitals.php">Hospitals</a>    <!--This is in main menu-->

</li>
</ul>
<ul><li><a href="pharmacy_list.php">Pharmacy</a></li></ul>

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
$checkIfThisUserHasProfile = "SELECT id FROM user_profile WHERE user_id=" . $userID;
$result = mysql_query($checkIfThisUserHasProfile);
$count = mysql_num_rows($result);
if ($count <= 0) { // if this user has no profile.
    ?>
    <div class="content-wrapper" style="padding-top: 101px;">
        <div class="fancyDiv">
            <?php
$result = mysql_query("SELECT balance,account_type,ac_open_date,ac_number FROM account WHERE customer_id = '$userID'");
if (!$result) {
    echo 'Could not run query: ' . mysql_error();
    exit;
}




$row = mysql_fetch_row($result);

echo "<tr>";
echo "<td>" . $row[0] . "</td>";
echo "<td>" . $row[1] . "</td>";
echo "<td>" . $row[2] . "</td>";
echo "<td>" . $row[3] . "</td>";
echo "</tr>";

echo "</table>";
?>
			
			
        </div>
		
		
		      <?php

?>
	

    </div>
	
	
    <script>  
        function confirmCancel(){
            $info=confirm("Are you sure to cancel?");
            if($info==true)
                return true;
            else
                return false;
        }
		
		myFunction()
		{
			
			window.open('http://www.google.com');
			
		}
    </script>
    <?php
} else { // if user already has a profile
    ?>
   
    
    <?php
}
?>


<?php include('footer.php'); ?>

</html>