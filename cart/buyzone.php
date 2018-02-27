<?php include('header.php'); ?>
<?php include('../dbconn.php'); ?>
<?php include('config.php'); ?>

<?php
session_start();
$userID = $_SESSION['id'];
$user=$_SESSION['user']; 

$val=$_GET["foo"];
$val2=$_GET["bar"];
$val3=$_GET["moo"];
$val4=$_GET["world"];
$val5=$_GET["sh"];
$lp=$_GET["mk"];

            //$query = "INSERT INTO buy(mid) SELECT('$val') FROM products";

            //$query2 = "INSERT INTO buy(cid) SELECT('$val2') FROM user_auth";
   //  echo $val; 
  $item=array($val,$val2,$val3,$val4,$val5);   
     //echo $val2;
     //echo $val3;
     //echo $val4;
     //echo $val5; 

$mk=date('Y-m-d');



for ($x = 0; $x <$lp; $x++) {


       $query = "INSERT INTO buy(cid,pid, transcation) VALUES('$userID','$item[$x]','$mk')";

    $sql = mysql_query($query) or die(mysql_error());
        if ($sql) {
            
                
          
        
    }
  //  echo "The number is: $x <br>";
} 

         

//echo $val;
//cng hobe etay

//echo 'Hello ' . htmlspecialchars($_GET["id"]) . '!';

?>

  <div class="alert alert-success">
                <script type="text/javascript">
                    function Redirect()
                    {
                       window.location="view_cart_new.php";
                    }
                    document.write("Registration is successful, redirected to login page in 2 sec.");
                    setTimeout('Redirect()', 3000);
                </script>
            </div>