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
            <!--coca cola -->
            <tr class = "menuitems">
              <td><img id = "menupic" src = "../images/softdrinks/cocacola.png" alt =""></td>
              <td> Coca-Cola </td>
              <td> $2.00</td>
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
            </tr>

            <!-- sprite -->
            <tr class = "menuitems">
              <td><img id = "menupic" src = "../images/softdrinks/sprite.jpg" alt =""></td>
              <td> sprite </td>
              <td> $2.00 </td>
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
            </tr>

            <!-- Ginger Ale -->
            <tr class = "menuitems">
              <td><img id = "menupic" src = "../images/softdrinks/gingerale.jpg" alt =""></td>
              <td> Ginger Ale </td>
              <td> $2.00 </td>
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
            </tr>

            <!-- Dr.Pepper -->
            <tr class = "menuitems">
              <td><img id = "menupic" src = "../images/softdrinks/drpepper.jpg" alt =""></td>
              <td> Dr.Pepper </td>
              <td> $2.00 </td>
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
            </tr>

            <!-- Fanta -->
            <tr class = "menuitems">
              <td><img id = "menupic" src = "../images/softdrinks/fanta.jpg" alt =""></td>
              <td> Fanta </td>
              <td> $2.00 </td>
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
            </tr>

            <!-- Crush -->
            <tr class = "menuitems">
              <td><img id = "menupic" src = "../images/softdrinks/crush.jpg" alt =""></td>
              <td> Crush </td>
              <td> $2.00 </td>
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
            </tr>

            <!-- Nestea -->
            <tr class = "menuitems">
              <td><img id = "menupic" src = "../images/softdrinks/nestea.jpg" alt =""></td>
              <td> Nestea </td>
              <td> $2.00 </td>
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
            </tr>
          </div>
        </tbody>
      </table>
  </div>
  <?php include 'footer.php';?>
  </body>
</html>
