<?php include('header.php'); ?>
<?php include('dbconn.php'); ?>
<?php include('config.php'); ?>
<?php include('navigation.php'); ?>
<?php
error_reporting(0);
session_start();
if (!isset($_SESSION['user'])) {
    header('location:logout.php');
}
$userID = $_SESSION['id'];
$username = $_SESSION['user'];

//echo $userID;

?>  

<html>

        
            
      
        
        
              <?php
$result = mysql_query("SELECT name,contact,code,type FROM customers where cust_user_id='$userID'");
if (!$result) {
    echo 'Could not run query: ' . mysql_error();
    exit;
    $contact=$row['contact'];
}


echo "<table border='1'>
<tr>
<th>name</th>
<th>contact</th>
<th>code</th>
<th>type</th>
<th>message</th>

</tr>";

//$row = mysql_fetch_row($result);



while ($row = mysql_fetch_array($result)) { 

 

//$_SESSION['ab']=$row['MessageFrom'];
//$_SESSION['abc']=$row['MessageText'];
    $id=$row['Id'];
    $contact=$row['contact'];

echo $id;
echo "<tr>";
echo "<td>" . $row['name'] . "</td>";
echo "<td>" . $row['contact'] . "</td>";
echo "<td>" . $row['code'] . "</td>";
echo "<td>" . $row['type'] . "</td>";
echo "<td> <a href='sent.php?contact=$contact'> SEND</a> </td>";

/*echo "<td> <a href='sent.php?contact=$contact'>input MESSAGE</a> </td>";
echo "<td>" . '<form method="POST" action="sent.php">
    <input type="hidden" name="contact" value="<?= $posttitle ?>" />

    <input type="submit" value="message" />
</form> '. "</td>";
*/

echo "</tr>";
}
echo "</table>";
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
   
   
    <div class="content-wrapper" style="margin-top: 0px; border-top: none; padding-left: 8px; padding-right: 8px; width: 782px;">
        
       
       
    </div>


<style>
    .form-horizontal .controls {
        margin-left: 152px;
    }
</style>
<?php include('footer.php'); ?>

</html>