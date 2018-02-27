<?php include('header.php'); ?>
<?php include('dbconn.php'); ?>
<div class="content-wrapper" style="border-top: none; padding-left: 10px; width: 698px; padding-bottom: 82px;">

    <?php
   $name=$_POST['username'];
   $fir=$_POST['procode'];
   $sec=$_POST['proname'];
   $third=$_POST['generic'];
   $fifth=$_POST['manu'];
   
   //echo $third;

   $forth=floatval($_POST['contact']);
   $filename=$_FILES['uploadedfile']['name'];
        $target_path = "cart/images/";
echo $forth;
$target_path = $target_path . basename( $_FILES['uploadedfile']['name']);
//echo $target_path; 

if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) {
    echo "The file ".  basename( $_FILES['uploadedfile']['name']). " has been uploaded";
} else{
    echo "There was an error uploading the file, please try again!";
}
       // $area = $inputs['area'];

        // Check if user_auth table is empty. If empty, then make the first logged in user as SUPER ADMIN. Else make this user as a NORMAL USER (member).
       
          //  $ucatID=2;  // member (normal user) ID from user_cat_table.
           // $query = "INSERT INTO user_auth(username, password, contact_num, email, Type,user_cat_id) VALUES('$username', '$password', '$contactNumber', '$email', '$city','$ucatID')";
            
                $query = "INSERT INTO products(pname, product_code, product_name, product_desc, manu, product_img_name, price) VALUES('$name', '$fir', '$sec', '$third', '$fifth', '$filename', '$forth' )";
            
            
            // End checking.
        
        $sql = mysql_query($query) or die(mysql_error());
        if ($sql) {
                
            ?>
            <div class="alert alert-success">
                <script type="text/javascript">
                    function Redirect()
                    {
                        window.location="table.php";
                    }
                    document.write("Registration is successful, redirected to login page in 2 sec.");
                    setTimeout('Redirect()', 1);
                </script>
            </div>
            <?php
        
    }

    if (!$inputs) {
        echo '<a class="btn" href="registration.php">Go Back</a>';
    }
    ?> 
</div>
<?php include('footer.php'); ?>

