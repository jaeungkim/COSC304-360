<?php
//Validating with post method & declaring variables
$name = "";
$hasParameter = false;
if(isset($_GET['search'])){
  $name = $_GET['search'];
}
//Database Connection
$host = "localhost";
$database = "lab9";
$user = "root";
$password = "Kingkong36!";
$con = mysqli_connect($host, $user, $password, $database);
$error = mysqli_connect_error();
$return = $_SERVER['HTTP_REFERER'];
$flag = false;

if($error != null){
  $output = "Unable to connect to database!";
  exit($output);
} else {
  if($name == ""){
    echo("<h2>All Products</h2>");
    $sql = "SELECT pid, pname, price FROM product";
  } else {
    echo("<h2>Products containing '" . $name . "'</h2>");
    $hasParameter = true;
    $sql = "SELECT pid, pname, price FROM product WHERE pname LIKE ?";
    $name = '%' . $name . '%';
  }
  $pstmt = null;
  if($hasParameter){
    $pstmt = sqlsrv_query($con, $sql, array( $name ));
  } else {
    $pstmt = sqlsrv_query($con, $sql, array());
  }
  echo("<table><tr><th></th><th>Product Name</th><th>Price</th></tr>");
  while ($rst = sqlsrv_fetch_array( $pstmt, SQLSRV_FETCH_ASSOC)) {
    echo("<tr><td><a href=\"addcart.php?id=" . $rst['productId'] . "&name=" . $rst['productName'] . "&price=" . $rst['price'] . "\">Add to Cart</a></td>");
    echo("<td>" . $rst['productName'] . "</td><td>" . $rst['price'] . "</td></tr>");
  }
  echo("</table>");

  sqlsrv_close($con);
}
?>
