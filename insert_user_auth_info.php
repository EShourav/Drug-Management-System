<?php include('header.php'); ?>
<?php include('dbconn.php'); ?>
<div class="content-wrapper" style="border-top: none; padding-left: 10px; width: 698px; padding-bottom: 82px;">

    <?php
    

        $fname = $_POST['fname'];
        $username = $_POST['username'];
        $password = md5($_POST['password']);
        $dob = $_POST['dob'];
        $gend = $_POST['gend'];
        $nid = $_POST['nid'];
        $contactNumber = $_POST['contact'];
        $email = $_POST['email'];
        $adrs = $_POST['adrs'];
        $ag=$_POST['account'];
        echo $ag;
        //$city = $_POST['city'];
        if($ag=="2"){
            $ucatID=2;  // member (normal user) ID from user_cat_table.
            $query = "INSERT INTO user_auth(fname,username, password, dob, gend, nationalid, contact_num, email, adress, user_cat_id) VALUES('$fname','$username', '$password','$dob', '$gend', '$nid', '$contactNumber', '$email','$adrs', '$ucatID')";
        }
        elseif($ag=="3"){
            $ucatID=3; // super admin ID from user_cat table.
            $query = "INSERT INTO user_auth(fname,username, password, dob, gend, nationalid, contact_num, email, adress, user_cat_id) VALUES('$fname','$username', '$password', '$dob', '$gend', '$nid', '$contactNumber', '$email','$adrs', '$ucatID')";
            
        }

        echo "asi";
        $sql = mysql_query($query) or die(mysql_error());
        if ($sql) {
                
            ?>
            <div class="alert alert-success">
                <script type="text/javascript">
                    function Redirect()
                    {
                        window.location="login.php";
                    }
                    document.write("Registration is successful, redirected to login page in 2 sec.");
                    setTimeout('Redirect()', 2);
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

