<?php
// Get the current list of products
session_start();
$productList = null;
if (isset($_SESSION['productList'])){
	$productList = $_SESSION['productList'];
} else{ 	// No products currently in list.  Create a list.
	$productList = array();
}

// Add new product selected
// Get product information
if(isset($_GET['id']) && isset($_GET['name']) && isset($_GET['price'] && isset($_GET['quantity']))){
	$id = $_GET['id'];
	$name = $_GET['name'];
	$price = $_GET['price'];
  $quantity = $_GET['quantity'];
} else {
	header('Location: frontPage.php');
}

// Update quantity if add same item to order again
if (isset($productList[$id])){
	$productList[$id]['quantity'] = $productList[$id]['quantity'] + $quantity;
} else {
	$productList[$id] = array( "id"=>$id, "name"=>$name, "price"=>$price, "quantity"=>$quantity );
}

$_SESSION['productList'] = $productList;
header('Location: cart.php');
?>
