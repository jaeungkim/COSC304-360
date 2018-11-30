<!DOCTYPE html>
<html lang = "en">
<head>
  <title>Your orders</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="../css/mainPage.css" />
  <link rel="stylesheet" href="../css/orders.css">
  <link rel="stylesheet" href="../css/header.css"/>
  <link rel="stylesheet" href="../css/default.css"/>
  <link rel="stylesheet" href="../css/footer.css"/>
</head>

<body>
  <?php include 'header.php';?>
<div class="mainbody">
  <div>
    <div class="top">
      <h1>Your orders</h1>
    </div>
    <div class="top search">
      <input type="text" name="search" value="Search all ordedrs">
      <button type="button" name="search">Search Orders</button>
    </div>
  </div>
<div class="navigation first">
<div class="category">
  <a class="orders" href="#">Orders</a>
</div>
<div class="category">
  <a class="orders" href="#">Open Orders</a>
</div>
<div class="category">
  <a class="orders" href="#">Cancelled Orders</a>
</div>
<div class="category">
  <select class="date" name="">
    <option value="">past 1 year</option>
    <option value="">past 6 months</option>
    <option value="">past 30 days</option>
    <option value="">past 1 week</option>
  </select>

</div>
</div>
<div class="ordershow">

</div>

</div>
<?php include 'footer.php';?>
<img class="orderbg" src="../images/bg/orderbg.jpg" alt="">

</body>
</html>
