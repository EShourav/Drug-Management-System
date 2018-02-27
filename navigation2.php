<?php include('header.php'); ?>
<?php include('dbconn.php'); ?>
<?php include('config.php'); ?>

<html>
<head>

<link href="css/style.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="../css/button.css">




</head>

<div id="products-wrapper">
<div id="menu">

<ul>
<li><a href="home.php">Home</a>    <!--This is in main menu-->

</li>
<li><a href="cart/index.php">Products</a>    <!--This is in main menu-->

</li>
<li><a href="hospitals.php">Hospitals</a>    <!--This is in main menu-->

</li>
</ul>
<ul><li><a href="pharmacy_list.php">Pharmacy</a></li></ul>
<ul><li><a href="cart/indexD.php">Chat</a></li></ul>
</div>


</div>
<?php


if ($count <= 0) { // if this user has no profile.
    ?>
    <div class="content-wrapper" style="padding-top: 20px;">
        <div class="fancyDiv">
            <?php





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