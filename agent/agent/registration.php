<?php include('header.php'); ?>
<?php include('dbconn.php'); ?>
<?php include('check.php'); ?>


<?php
error_reporting(0);
session_start();
if (!isset($_SESSION['user'])) {
    header('location:logout.php');
}
$userID = $_SESSION['id'];
$username = $_SESSION['user'];

$nid = $_GET['id'];

$result = mysql_query("SELECT Id,MessageFrom,MessageText FROM messagein where Id = $nid");

$row = mysql_fetch_array($result);
$variable = $row['MessageFrom'];

$r3 = mysql_query("SELECT cust_user_id FROM customers where contact = $variable");
$duplicatevalue = mysql_fetch_array($r3);
$tmp = $duplicatevalue['cust_user_id'];
echo "$tmp";
$result2 = mysql_query("SELECT name, village, upazilla, district,gender,age,cust_user_id,contact,comment from customers where contact = $variable");
$row2 = mysql_fetch_array($result2);

?>

<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600' rel='stylesheet' type='text/css'>
<link href="//netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css" rel="stylesheet">
<head>
<link rel="stylesheet" type="text/css" href="a.css">
</head>

<?php if($duplicatevalue['cust_user_id'] == "") {?>
 <div class="testbox">
  <h1>Registration</h1>

    <form name="regiForm" class="form-horizontal" method="POST" onsubmit="return validateForm()" action="insert_user_auth_info.php">
      <hr>
  <hr>
    <label id="icon" for="name"><i class="icon-user"></i></label>
  <input type="text" name="username" id="name" placeholder="Name" required/>
   <label id="icon" for="name"><i class="icon-shield"></i></label>
  <input type="text" name="password" id="password" placeholder="Village" required/>

 <label id="icon" for="name"><i class="icon-envelope "></i></label>
  <input type="text" name="email" id="email" placeholder="Upazilla" required/>

  <label id="icon" for="name"><i class="icon-shield"></i></label>
  <input type="text" name="contact" id="name" placeholder="District" required/>
  
   <label id="icon" for="name"><i class="icon-shield"></i></label>
  <input type="text" name="qualify" id="qualify" placeholder="Gender" required/>

  <label id="icon" for="name"><i class="icon-shield"></i></label>
  <input type="text" name="age" id="age" placeholder="age" required/>

  <label id="icon" for="name"><i class="icon-shield"></i></label>
  <input type="text" name="sdf" id="sdf" placeholder="Contact Number" value = "<?php echo $row['MessageFrom'];?>" required/>

  <label id="icon" for="name"><i class="icon-shield"></i></label>
  <input type="text" name="comment" id="comment" placeholder="comment" value = "<?php echo $row['MessageText'];?>" required/>
   <p>By clicking Register, you agree on our <a href="#">terms and condition</a>.</p>
 <button type="submit" class="button">Register</button>
</div>
<?php }else { ?>
  <div class="testbox">
  <h1>Registration</h1>

    <form name="regiForm" class="form-horizontal" method="POST" onsubmit="return validateForm()" action="insert_user_auth_info.php">
      <hr>
  <hr>
    <label id="icon" for="name"><i class="icon-user"></i></label>
  <input type="text" name="username" id="name" placeholder="Name" value = "<?php echo $row2['name'];?>" required/>
   <label id="icon" for="name"><i class="icon-shield"></i></label>
  <input type="text" name="password" id="password" placeholder="Village" value = "<?php echo $row2['village'];?>"required/>

 <label id="icon" for="name"><i class="icon-envelope "></i></label>
  <input type="text" name="email" id="email" placeholder="Upazilla" value = "<?php echo $row2['upazilla'];?>" required/>

  <label id="icon" for="name"><i class="icon-shield"></i></label>
  <input type="text" name="contact" id="name" placeholder="District" value = "<?php echo $row2['district'];?>" required/>
  
   <label id="icon" for="name"><i class="icon-shield"></i></label>
  <input type="text" name="qualify" id="qualify" placeholder="Gender" value = "<?php echo $row2['gender'];?>" required/>

  <label id="icon" for="name"><i class="icon-shield"></i></label>
  <input type="text" name="age" id="age" placeholder="age" value = "<?php echo $row2['age'];?>" required/>

  <label id="icon" for="name"><i class="icon-shield"></i></label>
  <input type="text" name="sdf" id="sdf" placeholder="Contact" value = "<?php echo $row2['contact'];?>" required/>

  <label id="icon" for="name"><i class="icon-shield"></i></label>
  <input type="text" name="comment" id="comment" placeholder="comment" value = "<?php echo $row2['comment'];?>" required/>
   <p>By clicking Register, you agree on our <a href="#">terms and condition</a>.</p>
 <button type="submit" class="button">Register</button>
</div>

<?php } ?>





<?php include('footer.php'); ?>
