<?php include('header.php'); ?>
<?php include('dbconn.php'); ?>
<?php include('config.php'); ?>

<?php

$val=$_GET["id"];
		     
$result = mysql_query("DELETE FROM products WHERE id='$val'");
if (!$result) {
    echo 'Could not run query: ' . mysql_error();
    exit;
}

header('Location: navigationforpharma.php');
exit;



//echo 'Hello ' . htmlspecialchars($_GET["id"]) . '!';

?>