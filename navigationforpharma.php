<?php include('header.php'); ?>
<?php include('dbconn.php'); ?>
<?php include('config.php'); ?>
<?php
error_reporting(0);
session_start();
if (!isset($_SESSION['user'])) {
    header('location:logout.php');
}
?>
<?php
$userID = $_SESSION['id'];
$username = $_SESSION['user'];

//echo $username;
$checkIfThisUserHasProfile = "SELECT id FROM user_profile WHERE user_id=" . $userID;
$result = mysql_query($checkIfThisUserHasProfile);
$count = mysql_num_rows($result);
if ($count <= 0) { // if this user has no profile.
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
<li><a href="navigationforpharma.php">Product</a></li></ul>

</li></ul>  
<ul>
</li>
<li><a href="table.php">Upload</a></li>    <!--This is in drop downmenu-->

</ul>

<ul><li><a href="cart/index.php">Logout</a></li></ul>

</div>



</body>
<div id="img">
<img src="DMS.png" alt="Mountain View" style="width:100px;height:100px; margin: 10px" >

</div>
</html>

	
	
	
    <div class="content-wrapper" style="padding-top: 0px;">
        <div class="fancyDiv">
      
			
			
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
<html>

		
			
      
		
		
		      <?php
$result = mysql_query("SELECT * FROM products where pname='$username'");
if (!$result) {
    echo 'Could not run query: ' . mysql_error();
    exit;
}


echo "<table border='1'>
<tr>
<th>Product Code</th>
<th>Product Name</th>
<th>Generic</th>
<th>Price</th>
<th>Delete</th>
</tr>";

//$row = mysql_fetch_row($result);



while ($row = mysql_fetch_array($result)) { 



echo "<tr>";
echo "<td>" . $row[2] . "</td>";
echo "<td>" . $row[3] . "</td>";
echo "<td>" . $row[4] . "</td>";
echo "<td>" . $row[6] . "</td>";
echo "<td><a href='delprophar.php?id=".$row['id']."&mk=>Delete</a></td>";

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



</html>