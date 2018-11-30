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
            <!-- Banana -->
            <tr class = "menuitems">
              <td><img id = "menupic" src = "../images/muffins/bananamuffin.jpg" alt =""></td>
              <td> Banana </td>
              <td> $2.50</td>
              <td> Quantity</td>
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

            <!-- Blueberry -->
            <tr class = "menuitems">
              <td><img id = "menupic" src = "../images/muffins/blueberrymuffin.jpg" alt =""></td>
              <td> Blueberry </td>
              <td> $2.50</td>
              <td> Quantity</td>
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

            <!-- cornbread -->
            <tr class = "menuitems">
              <td><img id = "menupic" src = "../images/muffins/cornbreadmuffin.jpg" alt =""></td>
              <td> Cornbread </td>
              <td> $2.50</td>
              <td> Quantity</td>
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

            <!-- Chocolate chip -->
            <tr class = "menuitems">
              <td><img id = "menupic" src = "../images/muffins/chocolatechipmuffin.jpg" alt =""></td>
              <td> Chocolate chip </td>
              <td> $2.50</td>
              <td> Quantity</td>
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

            <!-- Raisin Bran -->
            <tr class = "menuitems">
              <td><img id = "menupic" src = "../images/muffins/raisinbranmuffin.jpg" alt =""></td>
              <td> Raisin Bran </td>
              <td> $2.50</td>
              <td> Quantity</td>
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

            <!-- pumpkin -->
            <tr class = "menuitems">
              <td><img id = "menupic" src = "../images/muffins/pumpkinmuffin.jpg" alt =""></td>
              <td> Pumpkin </td>
              <td> $2.50</td>
              <td> Quantity</td>
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

            <!-- Cranberry -->
            <tr class = "menuitems">
              <td><img id = "menupic" src = "../images/muffins/cranberrymuffin.jpg" alt =""></td>
              <td> Cranberry </td>
              <td> $2.50</td>
              <td> Quantity</td>
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
          </div>
        </tbody>
      </table>
  </div>
  <?php include 'footer.php';?>
  </body>
</html>
