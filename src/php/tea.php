<!DOCTYPE html>
<html lang = "en">
<head>
  <title>IDEAS</title>
  <link rel="stylesheet" href="../css/mainPage.css" />
  <link rel="stylesheet" href="../css/header.css"/>
  <link rel="stylesheet" href="../css/footer.css"/>
  <link rel="stylesheet" href="../css/menu.css"/>
</head>
<body>
  <?php include 'header.php';?>

  <!-- coffee menu table -->
  <div class = "coffeemenu">
      <table id = "listingTable">
        <tbody>
            <tr>
              <th class = "tableHead">Picture</th>
              <th class = "tableHead">Product Name</th>
              <th class = "tableHead">Price</th>
              <th class = "tableHead">Quantity</th>
              <th class = "tableHead">Rating</th>
              <th class = "tableHead">Cart</th>
            </tr>
            <!-- chai -->
            <tr class = "menuitems">
              <td><img id = "menupic" src = "../images/tea/chai.jpg" alt =""></td>
              <td> chai </td>
              <td> $3.75</td>
              <td> quantity </td>
              <td>
                <div class = "rating">
                  <span> ★ </span>
                  <span> ★ </span>
                  <span> ★ </span>
                  <span> ★ </span>
                  <span> ★ </span>
                </div>
              </td>
              <td><a class "addCart" href = "cart.php"> Add to Cart </a> </td>
            <tr>

            <!-- Earl Grey -->
            <tr class = "menuitems">
              <td><img id = "menupic" src = "../images/tea/earlgrey.jpg" alt =""></td>
              <td> Earl Grey </td>
              <td> $3.75</td>
              <td> quantity </td>
              <td>
                <div class = "rating">
                  <span> ★ </span>
                  <span> ★ </span>
                  <span> ★ </span>
                  <span> ★ </span>
                </div>
              </td>
              <td><a class "addCart" href = "cart.php"> Add to Cart </a> </td>
            <tr>

            <!-- Apple Cider -->
            <tr class = "menuitems">
              <td><img id = "menupic" src = "../images/tea/applecider.jpg" alt =""></td>
              <td> Apple Cider </td>
              <td> $3.50</td>
              <td> quantity </td>
              <td>
                <div class = "rating">
                  <span> ★ </span>
                  <span> ★ </span>
                  <span> ★ </span>
                  <span> ★ </span>
                </div>
              </td>
              <td><a class "addCart" href = "cart.php"> Add to Cart </a> </td>
            <tr>

            <!-- Green Tea -->
            <tr class = "menuitems">
              <td><img id = "menupic" src = "../images/tea/greentea.jpg" alt =""></td>
              <td> Green Tea </td>
              <td> $3.50</td>
              <td> quantity </td>
              <td>
                <div class = "rating">
                  <span> ★ </span>
                  <span> ★ </span>
                  <span> ★ </span>
                  <span> ★ </span>
                </div>
              </td>
              <td><a class "addCart" href = "cart.php"> Add to Cart </a> </td>
            <tr>

            <!-- Bubble Tea -->
            <tr class = "menuitems">
              <td><img id = "menupic" src = "../images/tea/bubbletea.jpg" alt =""></td>
              <td> Bubble Tea <br>(Taro / Milk) </td>
              <td> $4.50</td>
              <td> quantity </td>
              <td>
                <div class = "rating">
                  <span> ★ </span>
                  <span> ★ </span>
                  <span> ★ </span>
                  <span> ★ </span>
                  <span> ★ </span>
                </div>
              </td>
              <td> <a class "addCart" href = "cart.php"> Add to Cart </a> </td>
            <tr>

          </div>
        </tbody>
      </table>
  </div>
<?php include 'footer.php';?>
  </body>
</html>
