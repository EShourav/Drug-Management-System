<?php
session_start();
include_once("config.php");
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Shopping Cart</title>
<link href="style/styleD.css" rel="stylesheet" type="text/css">

    <link href="cssD.css" rel="stylesheet" type="text/css" />
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
</head>

<body>
<div id="products-wrapper">

<div id="menu">

<ul>
<li><a href="../home.php">Home</a>    <!--This is in main menu-->

</li>
<li><a href="index.php">Products</a>    <!--This is in main menu-->

</li>
<li><a href="../hospitals.php">Hospitals</a>    <!--This is in main menu-->

</li>
</ul>
<ul><li><a href="../pharmacy_list.php">Pharmacy</a></li></ul>
<ul><li><a href="pharmacy_list.php">Chat</a></li></ul>

<ul><li><a href="../login.php">Login</a></li></ul>


</div>
    <div class="products">
    <?php
    //current URL of the Page. cart_update.php redirects back to this URL
    $current_url = base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
    
    $results = $mysqli->query("SELECT * FROM doctor ORDER BY id ASC");
    if ($results) { 
    
        //fetch results set as object and output HTML
        while($obj = $results->fetch_object())
        {
            echo '<div class="product">'; 
            echo '<form method="post" action="cart_update.php">';
            echo '<div class="product-content"><h3>'.$obj->name.'</h3>';
            echo '<div class="product-desc">'.$obj->designation.'</div>';
            echo '<div class="product-info">';
            echo '<button class="add_to_cart">Chat to doctor</button>';
            echo '</div></div>';
            echo '<input type="hidden" name="type" value="add" />';
            echo '</form>';
            echo '</div>';
        }
    
    }
    ?>
    </div>
    
    
</div>

</body>
</html>
