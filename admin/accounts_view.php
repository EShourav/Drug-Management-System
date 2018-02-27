<?php include('header.php'); ?>
<?php include('dbconn.php'); ?>
<?php include('config.php'); ?>

<?php
error_reporting(0);
session_start();
if (!isset($_SESSION['user'])) {
    header('location:logout.php');
}
$userID = $_SESSION['id'];
$username = $_SESSION['user'];

//echo $userID;

?>  
<html>
<head>


    <link rel="stylesheet" href="css/button.css">




</head>
<body>


<div>
<header>

    <h1>

    Drug Management System
    </h1>

    <h3>Welcome! <?php
    
    echo $username;
    ?>

</h3>
</header>
<div id="menu">
<ul>
<li><a href="navigation.php">Product</a></li></ul>

</li></ul>  
<ul>
</li>

<li><a href="accounts_view.php">Customers</a></li>    <!--This is in drop downmenu-->
<li><a href="accounts_view_p.php">Pharmacist</a></li>
</ul>

<ul><li><a href="pharmacy_list.php">Chat</a></li></ul>

<ul><li><a href="../cart/index.php">Logout</a></li></ul>

</div>



</body>
<div id="img">
<img src="../DMS.png" alt="Mountain View" style="width:100px;height:100px;" >

</div>
</html>
<html>

		
			
      
		
		
		      <?php
$result = mysql_query("SELECT * FROM user_auth where user_cat_id=2");
if (!$result) {
    echo 'Could not run query: ' . mysql_error();
    exit;
}


echo "<table border='1'>
<tr>
<th>Name</th>
<th>User name</th>
<th>Date of birth</th>
<th>National ID</th>
<th>Contact Number</th>
<th>Email</th>
<th>Address</th>
<th>Delete</th>

</tr>";

//$row = mysql_fetch_row($result);



while ($row = mysql_fetch_array($result)) { 



echo "<tr>";
echo "<td>" . $row[1] . "</td>";
echo "<td>" . $row[2] . "</td>";
echo "<td>" . $row[4] . "</td>";
echo "<td>" . $row[6] . "</td>";
echo "<td>" . $row[7] . "</td>";
echo "<td>" . $row[8] . "</td>";
echo "<td>" . $row[9] . "</td>";
echo "<td><a href='../delprophar.php?id=".$row['id']."&mk=all>Delete</a></td>";
echo "</tr>";
}
echo "</table>";

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
   
   
    <div class="content-wrapper" style="margin-top: 0px; border-top: none; padding-left: 8px; padding-right: 8px; width: 782px;">
        
       
       
    </div>


<style>
    .form-horizontal .controls {
        margin-left: 152px;
    }
</style>
<?php include('footer.php'); ?>

</html>