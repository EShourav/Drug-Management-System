<?php include('header.php'); ?>
<?php include('dbconn.php'); ?>
<?php //include('navigation.php'); ?>

<?php include('config.php'); ?>


<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600' rel='stylesheet' type='text/css'>
<link href="//netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css" rel="stylesheet">
<head>
<link rel="stylesheet" type="text/css" href="a.css">
</head>
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


 <div class="testbox">
  <h1>Registration</h1>

    <form enctype="multipart/form-data" name="regiForm" class="form-horizontal" method="POST" onsubmit="return validateForm()" action="getfile.php">
  
  <input type="text" name="username" id="name" placeholder="Pharmacist name" required/>  
  <input type="text" name="procode" id="name" placeholder="Product code" required/>
  <input type="text" name="proname" id="name" placeholder="Product name" required/>
  <input type="text" name="generic" id="name" placeholder="Generic" required/>
  <input type="text" name="manu" id="name" placeholder="Manufracture" required/>
  <input type="text" name="contact" id="contact" placeholder="price" required/>
<input type="hidden" name="MAX_FILE_SIZE" value="100000" />
<p>Choose a file to upload: <input name="uploadedfile" type="file" /></p><br />


   <p>By clicking Register, you agree on our <a href="#">terms and condition</a>.</p>
 <button type="submit" class="button">Register</button>
</div>




<?php include('footer.php'); ?>