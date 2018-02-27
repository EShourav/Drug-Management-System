<?php include('header.php'); ?>
<?php include('dbconn.php'); ?>
<?php //include('navigation.php'); ?>


<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600' rel='stylesheet' type='text/css'>
<link href="//netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css" rel="stylesheet">
<head>
<link rel="stylesheet" type="text/css" href="a2.css">
</head>


 <div class="testbox">
  <h1>Registration</h1>

    <form name="regiForm" class="form-horizontal" method="POST" onsubmit="return validateForm()" action="insert_user_auth_info.php">
      <hr>
    <div class="accounttype">
      <input type="radio" id="radioOne" name="account" value="2" checked/>
      <label for="radioOne" class="radio" chec>Customer</label>
      <input type="radio" id="radioTwo" name="account"  value="3"  />
      <label for="radioTwo" class="radio">Pharmacist</label>
    </div>
  <hr>
    <label id="icon" for="name"><i class="icon-user"></i></label>
  <input type="text" name="fname" id="name" placeholder="Name" required/>
    <label id="icon" for="name"><i class="icon-user"></i></label>
  <input type="text" name="username" id="name" placeholder="User Name" required/>
   <label id="icon" for="name"><i class="icon-shield"></i></label>
  <input type="password" name="password" id="password" placeholder="password" required/>

    <label id="icon" for="name"><i class="icon-user"></i></label>
  <input type="text" name="dob" id="name" placeholder="Date of birth" required/>
    <label id="icon" for="name"><i class="icon-user"></i></label>
  <input type="text" name="gend" id="name" placeholder="Gender" required/>
    <label id="icon" for="name"><i class="icon-user"></i></label>
  <input type="text" name="nid" id="name" placeholder="National Id" required/>

 <label id="icon" for="name"><i class="icon-envelope "></i></label>
  <input type="text" name="email" id="email" placeholder="Email" required/>

  <label id="icon" for="name"><i class="icon-shield"></i></label>
  <input type="text" name="contact" id="name" placeholder="contact" required/>
  
  <label id="icon" for="name"><i class="icon-shield"></i></label>
  <input type="text" name="adrs" id="name" placeholder="Address" required/>

   <p>By clicking Register, you agree on our <a href="#">terms and condition</a>.</p>
 <button type="submit" class="button">Register</button>
</div>




<?php include('footer.php'); ?>