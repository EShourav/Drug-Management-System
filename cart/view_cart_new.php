<?php
session_start();
 include('header.php');
 include('dbconn.php'); 
include_once("config.php");
$userID = $_SESSION['id'];
$user=$_SESSION['user']; 
$event_id = $_GET['id']
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="style/style.css" rel="stylesheet" type="text/css"></head>
<body>
<div id="products-wrapper">
 <h1>View Cart Welcome <?php echo $user; ?></h1>
 <button onclick="window.location.href='logout.php'">Logout</button>
 <div class="view-cart">
 	<?php
    $current_url = base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
	if(isset($_SESSION["products"]))
    {
	    $total = 0;
		echo '<form method="post" action="buyzone.php">';
		echo '<ul>';
		$cart_items = 0;
		foreach ($_SESSION["products"] as $cart_itm)
        {
           $product_code = $cart_itm["code"];
		   $results = $mysqli->query("SELECT product_name,product_desc, price FROM products WHERE product_code='$product_code' LIMIT 1");
		    $obj = $results->fetch_object();
		   
		    echo '<li class="cart-itm">';
			echo '<span class="remove-itm"><a href="cart_update.php?removep='.$cart_itm["code"].'&return_url='.$current_url.'">&times;</a></span>';
			echo '<div class="p-price">'.$currency.$obj->price.'</div>';
            echo '<div class="product-info">';
			echo '<h3>'.$obj->product_name.' (Code :'.$product_code.')</h3> ';
            echo '<div class="p-qty">Qty : '.$cart_itm["qty"].'</div>';
            echo '<div>'.$obj->product_desc.'</div>';
			echo '</div>';
            echo '</li>';
			$subtotal = ($cart_itm["price"]*$cart_itm["qty"]);
			$total = ($total + $subtotal);

			echo '<input type="hidden" name="item_name['.$cart_items.']" value="'.$obj->product_name.'" />';
			echo '<input type="hidden" name="item_code['.$cart_items.']" value="'.$product_code.'" />';
			echo '<input type="hidden" name="item_desc['.$cart_items.']" value="'.$obj->product_desc.'" />';
			echo '<input type="hidden" name="item_qty['.$cart_items.']" value="'.$cart_itm["qty"].'" />';
			$cart_items ++;
			
        }
    	echo '</ul>';
		echo '<span class="check-out-txt">';
		echo '<strong>Total : '.$currency.$total.'</strong>  ';
		echo '<input type="submit" value="Pay Now" />';
		echo '</span>';
		echo '</form>';
	  $_SESSION['price']=$total;	
    }else{
		echo 'Your Cart is empty';
	}
	   //echo "<a href=buyzone.php?code=",urlencode($product_code),">$compname</a>";
	//	echo "<a href=buyzone.php?code=",urlencode($product_code),">$compname</a>";

$a="";
$mike=$cart_items;
$array = array("foo", "bar", "moo", "world","sh");
$i=0;
foreach ($_SESSION["products"] as $cart_itm)
        {
           $product_code = $cart_itm["code"];
		   $results = $mysqli->query("SELECT product_name,product_desc, price FROM products WHERE product_code='$product_code' LIMIT 1");
		    $obj = $results->fetch_object();
		   
		   // echo '<li class="cart-itm">';
			//echo '<span class="remove-itm"><a href="cart_update.php?removep='.$cart_itm["code"].'&return_url='.$current_url.'">&times;</a></span>';
			//echo '<div class="p-price">'.$currency.$obj->price.'</div>';
          //  echo '<div class="product-info">';
			//echo '<h3>'.$obj->product_name.' (Code :'.$product_code.')</h3> ';
          //  echo '<div class="p-qty">Qty : '.$cart_itm["qty"].'</div>';
          //  echo '<div>'.$obj->product_desc.'</div>';
		//	echo '</div>';
          //  echo '</li>';
			$subtotal = ($cart_itm["price"]*$cart_itm["qty"]);
			$total = ($total + $subtotal);
			$a=$a.$array[$i]."=".$product_code."&";
			$i++;

		//	echo '<input type="hidden" name="item_name['.$cart_items.']" value="'.$obj->product_name.'" />';
		//	echo '<input type="hidden" name="item_code['.$cart_items.']" value="'.$product_code.'" />';
		//	echo '<input type="hidden" name="item_desc['.$cart_items.']" value="'.$obj->product_desc.'" />';
		//	echo '<input type="hidden" name="item_qty['.$cart_items.']" value="'.$cart_itm["qty"].'" />';
			$cart_items ++;
			
        }

	echo "<a href='buyzone.php?".$a."&mk=".$mike.">Buy</a>";
	echo "<a href='buyzone.php?".$a."&mk=".$mike.">Buy</a>";

	//$cart_items--;


    ?>

   
    </div>
</div>
<script>
	




</script>
</body>
</html>