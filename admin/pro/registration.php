<?php include('header.php'); ?>
<?php include('dbconn.php'); ?>


<?php
error_reporting(0);
session_start();
if (!isset($_SESSION['user'])) {
    header('location:logout.php');
}
$userID = $_SESSION['id'];
$username = $_SESSION['user'];

//echo $username;

?>

<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600' rel='stylesheet' type='text/css'>
<link href="//netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css" rel="stylesheet">
<head>
<link rel="stylesheet" type="text/css" href="a.css">
</head>

<body>
 <div class="testbox">
  <h1>Registration</h1>

    <form method="post" action="insert_user_auth_info.php">
      <hr>
  <hr>

 

  <?php

 $query = "SELECT * FROM company";




 $sql = mysql_query($query) or die(mysql_error());

 ?>

<select name="mask[]" id="asi_pore" multiple> 


  <?php 


 while($row = mysql_fetch_array($sql) ){    

 echo '<option value='.$row[0].'>'.$row[1].'</option>';
  
 // echo $row[0];

        }


   ?>


</select>

  <input type="text" name="password" id="password" placeholder="catagory" />

  <input type="text" name="email" id="email" placeholder="name" />

  <input type="text" name="contact" id="name" placeholder="weight" />
  
  <input type="text" name="qualify" id="qualify" placeholder="price" />

  <input type="text" name="age" id="age" placeholder="quantity" />


 <button type="submit" class="button">Register</button>


</div>
</form>

</body>


<?php include('footer.php'); ?>