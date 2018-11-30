<!DOCTYPE html>
<html lang = "en">
<head>
  <title>IDEAS Checkout</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="../css/checkout.css">
  <link rel="stylesheet" href="../css/header.css"/>
  <link rel="stylesheet" href="../css/footer.css"/>
</head>

<body>
  <?php include 'header.php';?>

<div class="mainbody">
  <!-- Title -->
  <div class="carttitle">
    <p>Checkout</p>
  </div>

  <!-- Product #1 -->
  <div class="item">
    <div class="col image">
      <img src="../images/coffee/americano.jpg" alt="item1" / width="80em" height="80em">
    </div>

    <div class="col description">
      Americano
    </div>

    <div class="col quantity">
      1
    </div>

    <div class="col total-price">$2.50</div>
  </div>

  <!-- Product #2 -->
  <div class="item">
    <div class="col image">
      <img src="../images/tea/chai.jpg" alt="item2" / width="80em" height="80em">
    </div>

    <div class="col description">
      chai
    </div>

    <div class="col quantity">
      1
    </div>

    <div class="col total-price">$3.75</div>
  </div>

  <!-- Product #3 -->
  <div class="item">
    <div class="col image">
      <img src="../images/coffee/cafe-latte.png" alt="item3" / width="80em" height="80em">
    </div>

    <div class="col description">
      cafe latte
    </div>

    <div class="col quantity">
      1
    </div>

    <div class="col total-price">$2.75</div>
  </div>

  <div class="subtotal">
    subtotal:
  </div>
  <div class="subvalue">
    $9.00
  </div>
  <div class="payment">
    <h1 class="po">Payment options</h1>
    <div class="card">
      <p class="label2">Add a New Payment Method</p>
      <p class="label3">Enter your credit card information:</p>
      <form class="" action="index.php" method="post">
      <table>
        <tr>
          <th>Name on card</th><th>Card number</th><th>Expiration date</th><th></th>
        </tr>
        <tr>
          <td><input type="text" name="cardname"></td>
          <td><input type="text" name="cardnumber"></td>
          <td><input type="date" name="expiredate"></td>
          <td><input type="submit" name="submit" value="Add"></td>
        </tr>
      </table>
      </form>
    </div>

  </div>
</div>

<?php include 'footer.php';?>
</body>
<img class="cartbg" src="../images/bg/checkoutbg.jpg" alt="">
</body>
</html>
