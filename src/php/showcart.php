<!-- <!DOCTYPE html>
<html>
<head>
<title>Your Shopping Cart</title>
</head>
<body> -->
<?php session_start(); ?>
<style>
<?php include '../css/cart.css'; ?>
</style>
<?php
include("header.php");
// include 'include/money_format_windows.php'; //Only required on windows PCs
// Get the current list of products

echo '<div class="mainbody">
  <!-- Title -->
  <div class="carttitle">
    <p class="titlecontent">Shopping Cart</p>
    <button type="button" name="button"><a class="checkout" href = "checkout.php">Check Out</a></button>
  </div>';
$productList = null;
if (isset($_SESSION['productList'])){
	$productList = $_SESSION['productList'];
	$total =0;

    //PRINTING OUT CART INFO
	foreach ($productList as $id => $prod) { //For each product in productList
    //Query each product info
    include 'db_credential.php';
    $conn = mysqli_connect($host, $user, $password, $database);
    $error = mysqli_connect_error();

    if($error != null){
      $output = "<p>Unable to connect to database!</p>";
      exit($output);
    }
    else{
      $sql = "SELECT * FROM product WHERE pid = ".$prod['id'];//WHERE category = coffee
      $results = mysqli_query($conn, $sql);
      $row = mysqli_fetch_assoc($results);
      // echo          '
      //         </tbody>
      //       </table>
      //   </div>';
    }
    echo
    '<div class="item">
      <div class="col buttons">
        <button type="delete" name="button">
          <img src="'.$row['imageURL'].'" width="20em" height="20em">
        </button>
      </div>
      <div class="col checkboxdiv">
        <input class="checkbox" type="checkbox">
      </div>

      <div class="col image">
        <img src="../images/coffee/americano.jpg" alt="item1" / width="80em" height="80em">
      </div>

      <div class="col description">
        Americano
      </div>

      <div class="col quantity">
        <button class="plus-btn" type="button" name="button">
           <img src="../images/sign/plus.png" width="15em" height="15em">
        </button>
        <input type="text" name="name" value="1">
        <button class="minus-btn" type="button" name="button">
           <img src="../images/sign/minus.png" width="15em" height="15em">
        </button>
      </div>

      <div class="col total-price">$2.50</div>
    </div>
    ';
		// echo("<tr><td>". $prod['id'] . "</td>");
		// echo("<td>" . $prod['name'] . "</td>");
    //
		// echo("<td align=\"center\">". $prod['quantity'] . "</td>");
		// $price = $prod['price'];
    //
		// echo("<td align=\"right\">".str_replace("USD","$",$price)."</td>");
		// echo("<td align=\"right\">" . str_replace("USD","$",$prod['quantity']*$price) . "</td></tr>");
		// echo("</tr>");
		// $total = $total +$prod['quantity']*$price;
	}
	echo("<tr><td colspan=\"4\" align=\"right\"><b>Order Total</b></td><td align=\"right\">".str_replace("USD","$",$total)."</td></tr>");
	echo("</table>");

	echo("<h2><a href=\"checkout.php\">Check Out</a></h2>");
} else{
	echo("<H1>Your shopping cart is empty!</H1>");
}


include("footer.php");
?>
<!-- <h2><a href="listprod.php">Continue Shopping</a></h2>
</body>
</html> -->
