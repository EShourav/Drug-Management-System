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
<div class="content-wrapper" style="border-top: none; padding-left: 10px; width: 698px; padding-bottom: 82px;">

    <?php
    


    
// As output of $_POST['Color'] is an array we have to use foreach Loop to display individual value

//echo "keno ";
foreach ($_POST['mask'] as $ms)
{
  //echo "You have selected :" .$ms; // Displaying Selected Value
 // echo "asi";
}

//echo "asi";
    

        //$username = $_POST['username'];
        $password = $_POST['password'];
        $contactNumber = $_POST["contact"];
        $email = $_POST['email'];

		$city = $_POST["qualify"];
        $age = $_POST["age"];
		//$num=$_POST["sdf"];
        $comment=$_POST["comment"];

        //$ak=is_numeric($_POST['age']);
        //echo $age;
        //echo $age;

        $ak=(int)$age;
        echo $ak;
        $i=0;

      

        $result=mysql_query("SELECT MAX(pid) AS cd from product");

        if (!$result) {
    echo 'Could not run query: ' . mysql_error();
    exit;
}

///        $f=mysql_query($code) or die(mysql_error());
   //     echo $f;

$row = mysql_fetch_array($result); 
$larg=$row["cd"];
$new = dechex($larg+1);

//echo $intv=intval($ak);

while($i <$ak)
{
    //echo "asi";
    $result=mysql_query("SELECT MAX(pid) AS cd from product");

        if (!$result) {
    echo 'Could not run query: ' . mysql_error();
   }
    $row = mysql_fetch_array($result); 
    $larg=$row["cd"];
    $new = dechex($larg+1);

    $query = "INSERT INTO product(company_name, category, name, weight,Price,quantity,codee) VALUES('$userID', '$password', '$contactNumber', '$email', '$city','$age','$new')";
    $sql = mysql_query($query) or die(mysql_error());
    $i++;
}




//echo $larg;

       // echo $code;
		
	     $sqlCheckEmptyUser="SELECT * FROM user_auth";
       //  echo $userID;
        $queryCheckEmptyUser=mysql_query($sqlCheckEmptyUser) or die(mysql_error());
        $countCheckEmptyUser=mysql_num_rows($queryCheckEmptyUser);
        
        if($countCheckEmptyUser>0){
			
           // $query = "INSERT INTO product(company_name, category, name, weight,Price,quantity,codee) VALUES('$userID', '$password', '$contactNumber', '$email', '$city','$age','$new')";
            
            }
		
		
		else
		{
			        echo '<a class="btn" href="registration.php">Go Back</a>';
					

		}
        //$area = $inputs['area'];

        // Check if user_auth table is empty. If empty, then make the first logged in user as SUPER ADMIN. Else make this user as a NORMAL USER (member).
      
            
            // End checking.
        
        $sql = mysql_query($query) or die(mysql_error());
        if ($sql) {
                
            ?>
            <div class="alert alert-success">
                <script type="text/javascript">
                    function Redirect()
                    {
                        window.location="../navigation.php";
                    }
                    document.write("Registration is successful, redirected to login page in 2 sec.");
                    setTimeout('Redirect()', 2000);
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

