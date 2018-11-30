<!DOCTYPE html>
<html lang = "en">
<head>
  <title>IDEAS</title>
  <!--
  <link rel="stylesheet" href="../css/mainPage.css" />
  <link rel="stylesheet" href="../css/header.css"/>
  <link rel="stylesheet" href="../css/footer.css"/>
  <link rel="stylesheet" href="../css/menu.css"/> -->
</head>
<?php
// Get the current list of products
session_start();
if(isset($_SESSION['login'])){

  //if cart isn't empty
  if(isset($_SESSION['productList'])){
    //connect to db
    include 'db_credential.php';
    $conn = mysqli_connect($host, $user, $password, $database);
    $error = mysqli_connect_error();
    if($error != null){
      $output = "<p>Unable to connect to database!</p>";
      exit("Error description: " . mysqli_error($conn));
    }
    //Finished Connection

    //-----Getting Customer Info
    $productList = $_SESSION['productList'];
    $userEmail = $_SESSION['login'];
    $cid=null;
    $datetime = null; //for setting current time as it's unique in orders table\
    $oid=null;

    //------temp
    $pid=1;
    $creditCardNum =123456789;
    $pQuantity = 1;
    $pPrice = 100;
    
    //Getting User id for ORDERS data insertion
    $sql = "SELECT cid FROM Customer WHERE email = '$userEmail';";
    $results = mysqli_query($conn, $sql);
    if(!$results){
      echo("Error description: " . mysqli_error($conn));
    }
    $row = mysqli_fetch_assoc($results);
    $cid = $row['cid'];

    //Store Customer Cart into TABLE: ORDERS
    $datetime = date('Y-m-d H:i:s'); //get current datetime
    $sql = "INSERT INTO `orders` (`purchasedDate`, `cardNum`, `cid`) VALUES ('$datetime', '$creditCardNum', $cid);"; //WHERE category = coffee
    $result = mysqli_query($conn, $sql);
    if(!$result){
      echo("Error description: " . mysqli_error($conn));
    }
    //Select oid
    $sql = "SELECT `oid` FROM `orders` WHERE purchasedDate = '$datetime';";
    $results = mysqli_query($conn, $sql);
    if(!$results){
      echo("Error description: " . mysqli_error($conn));
    }
    $row = mysqli_fetch_assoc($results);
    $oid = $row['oid'];

    //Insert into ORDERCONTAINS
    $sql = "INSERT INTO `ordercontains` (`quantity`, `price`, `oid`, `pid`) VALUES ('$pQuantity', $pPrice, '$oid', '$pid');"; //WHERE category = coffee
    $result = mysqli_query($conn, $sql);
    if(!$result){
      echo("Error description: " . mysqli_error($conn));
    }

    mysqli_close($conn);
  }
  //if cart is empty
  else {
    // echo '<h1> <font size="+50">NO PRODUCTLIST (EMPTY CART)  </font></h1>';
    header('Refresh: 4; URL=frontPage.php');
  }
  echo 'Ordered Time: '.$datetime;
  echo '<br> PROCESSING YOUR ORDER...';
  // header('Refresh: 5; showOrder.php');
}
?>
</html>
