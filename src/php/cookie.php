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

  <!-- menu table -->
  <div class = "menuitems">
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
            <!-- Chocholate Chip  -->
            <tr class = "menuitems">
              <td><img id = "menupic" src = "../images/cookies/chocolatechipcookie.jpg" alt =""></td>
              <td> Chocolate Chip </td>
              <td> $1.75</td>
              <td> quantity</td>
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
            </tr>

            <!-- White Chocolate Chip -->
            <tr class = "menuitems">
              <td><img id = "menupic" src = "../images/cookies/whitechocolatechipcookie.jpg" alt =""></td>
              <td> White Chocolate Chip </td>
              <td> $1.75</td>
              <td> quantity</td>
              <td>
                <div class = "rating">
                  <span> ★ </span>
                  <span> ★ </span>
                  <span> ★ </span>
                  <span> ★ </span>
                </div>
              </td>
              <td><a class "addCart" href = "cart.php"> Add to Cart </a> </td>
            </tr>

            <!-- Gingerbread -->
            <tr class = "menuitems">
              <td><img id = "menupic" src = "../images/cookies/gingerbreadcookie.jpg" alt =""></td>
              <td> Ginger bread </td>
              <td> $1.75</td>
              <td> quantity</td>
              <td>
                <div class = "rating">
                  <span> ★ </span>
                  <span> ★ </span>
                  <span> ★ </span>
                  <span> ★ </span>
                </div>
              </td>
              <td><a class "addCart" href = "cart.php"> Add to Cart </a> </td>
            </tr>

            <!-- cranberry chip -->
            <tr class = "menuitems">
              <td><img id = "menupic" src = "../images/cookies/cranberrycookie.jpg" alt =""></td>
              <td> Cranberry </td>
              <td> $1.75</td>
              <td> quantity</td>
              <td>
                <div class = "rating">
                  <span> ★ </span>
                  <span> ★ </span>
                  <span> ★ </span>
                  <span> ★ </span>
                </div>
              </td>
              <td><a class "addCart" href = "cart.php"> Add to Cart </a> </td>
            </tr>

            <!-- Peanut Butter -->
            <tr class = "menuitems">
              <td><img id = "menupic" src = "../images/cookies/peanutbuttercookie.jpg" alt =""></td>
              <td> Peanut Butter </td>
              <td> $1.75</td>
              <td> quantity</td>
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
            </tr>
          </div>
        </tbody>
      </table>
  </div>
<?php include 'footer.php';?>
  </body>
</html>
