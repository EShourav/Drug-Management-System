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
$result = mysql_query($checkIfThisUserHasProfile);
$count = mysql_num_rows($result);
if ($count <= 0) { // if this user has no profile.
    ?>

<html>
<head>


    <link rel="stylesheet" href="css/a.css">




</head>
<body>


<div>
<header>
	<h1>Welcome! Agent <?php
	
	echo $username;
	?></h1>
</header>
<div id="menu">
<ul>
<li><a href="navigation.php">Home</a></li></ul>
<ul>
<li><a href="accounts_view.php">Customer</a>    <!--This is in main menu-->
</li>
  
<li><a href="messageview.php">Message </a>  <!--This is in drop downmenu-->
   <!--This is in drop downmenu-->
</ul>
</li>
</ul>

<ul><li><a href="logout.php">Logout</a></li></ul>

</div>
</body>
<div id="img">
<img src="../e-Krishok.PNG" alt="Mountain View" style="width:100px;height:100px;" >

</div>
</html>

	
		
    <div class="content-wrapper" style="padding-top: 101px;">
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


<?php include('footer.php'); ?>

</html>