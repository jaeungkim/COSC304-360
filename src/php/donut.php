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

  <!--menu table -->
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
            <!-- Chocolate glazed -->
            <tr class = "menuitems">
              <td><img id = "menupic" src = "../images/donuts/chocolateglazeddonut.jpg" alt =""></td>
              <td> Chocolate Glazed </td>
              <td> $1.50 </td>
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

            <!-- Double Chocolate -->
            <tr class = "menuitems">
              <td><img id = "menupic" src = "../images/donuts/doublechocolate.jpg" alt =""></td>
              <td> Double Chocolate </td>
              <td> $1.50 </td>
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

            <!-- Honey Dip -->
            <tr class = "menuitems">
              <td><img id = "menupic" src = "../images/donuts/honeydip.jpg" alt =""></td>
              <td> Honey Dip </td>
              <td> $1.50 </td>
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

            <!-- Old Fashion -->
            <tr class = "menuitems">
              <td><img id = "menupic" src = "../images/donuts/oldfashioned.jpg" alt =""></td>
              <td> Old Fashioned </td>
              <td> $1.50 </td>
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

            <!-- Vanilla Dip -->
            <tr class = "menuitems">
              <td><img id = "menupic" src = "../images/donuts/vanilladip.jpg" alt =""></td>
              <td> Vanilla Dip </td>
              <td> $1.50</td>
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

            <!-- Maple Dip -->
            <tr class = "menuitems">
              <td><img id = "menupic" src = "../images/donuts/mapledip.jpg" alt =""></td>
              <td> Maple Dip </td>
              <td> $1.50</td>
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

            <!-- Raspberry -->
            <tr class = "menuitems">
              <td><img id = "menupic" src = "../images/donuts/raspberrydonut.jpg" alt =""></td>
              <td> Raspberry </td>
              <td> $1.50 </td>
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
