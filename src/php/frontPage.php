<!DOCTYPE html>
<?php
session_start();
?>
<html lang = "en">
<head>
  <title>IDEAS</title>
  <link rel="stylesheet" href="../css/mainPage.css" />
  <link rel="stylesheet" href="../css/header.css"/>
  <link rel="stylesheet" href="../css/default.css"/>
  <link rel="stylesheet" href="../css/footer.css"/>
</head>
<body>

  <?php
  include"accessProduct.php";
  $advertisements = returnMultipleItems(array(1, 2, 3));
  $recommendedItems = returnMultipleItems(array(10, 6, 4, 24));
  $deals = returnMultipleItems(array(5, 14, 21, 9));
  ?>
  <header>
    <div class = "nav">
      <!-- LOGO -->
      <div class = "logoImage">
        <a href = "frontPage.php" id = "logo">
          <img class = "logoimg" alt = "logo" src= "../images/logos/logo.png">
        </a>
      </div>

      <!-- search -->
      <div class = "navLeft">
        <form action="searchProducts.php" method="get">
          <input type = "text" name ="search_product" class = "search">
          <input type = "submit" value = " " class = "submit">
        </form>
      </div>

      <!-- cart -->
      <div class = "navRight">
        <a href = "cart.php" id = "cart">cart </a>
      </div>

      <!-- account -->
      <div class = "navRight">
        <div class="dropdown">
          <button class="dropbtn">account</button>
          <div class="dropdown-content">
            <div class = "signIn">
              <?php
              if(isset($_SESSION['login'])){
                $firstname = $_SESSION['firstname'];
                echo $firstname;
                echo '<a href="logout.php">Logout</a>';
                if(($_SESSION['isAdmin'])==1){
                  echo '<a href = "adminPage.php" > Admin Page</a>';
                }
              }
              else{
                echo '<a href = "signin.php" id = "sign">sign in</a>';
              }

              ?>
              <ul class = "logIn">
                <a href="account.php"><li class = "youraccount">Your Account</li></a>
                <a href="orders.php"><li class = "yourorder">Your Orders</li></a>
              </ul>
            </div>
          </div>
        </div>

      </div>

      <!-- menu -->
      <div class = "navRight">
        <div class="dropdown">
          <button class="dropbtn">menu</button>
          <div class="dropdown-content">
            <div class = "drinkMenu">
              <p id = "beverages">beverages </a>
                <ul class = "subMenu">
                  <!-- <li class = "beverageImg"> -->
                  <!-- <img src = "../images/logo.png" alt "beverage"> -->
                  <!-- </li> -->
                  <a href="coffee.php"><li class = "coffee">coffee</li></a>
                  <a href="tea.php"><li class = "tea">tea</li></a>
                  <a href="pop.php"><li calss = "pop">soft drinks</li></a>
                </ul>
              </div>
              <div class = "foodMenu">
                <p id = "food">food</p>
                <ul class = "subMenu">
                  <a href="cookie.php"><li class = "cookie">cookie</li></a>
                  <a href="muffin.php"><li class = "muffin">muffin</li></a>
                  <a href="donut.php"><li class = "donut">donut</li></a>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <!-- team members (us) -->
        <div class = "navRight">
          <a href = "aboutus.php" id = "aboutUs">about us </a>
        </div>

        <!-- search(browse) by categories -->
        <!-- <div class = "navRight">
          <form action="searchCategories.php" class = "searchCategory">
            <select name = "category">
              <option value>Click for Items!</option>
              <option value = "coffee">Coffee</option>
              <option value = "tea">Tea</option>
              <option value = "softdrinks">Soft Drinks</option>
              <option value = "cookie">Cookie</option>
              <option value = "muffin">Muffin</option>
              <option value = "donut">Donut</option>
            </select>
          </form>
        </div> -->
      </div>

    </header>

    <!-- advertisements -->
    <div class = "advertisements">
      <form method="get" action="item.php" id="addSubmit">
        <div class = "flipAdd">
          <div class="front"><img class = "addImg" alt = "addImg" src= "<?php echo $advertisements[0][4]; ?>"></div>
          <div class="back">
            <p class="addDesc"><?php echo $advertisements[0][3]; ?></p>
            <input type="hidden" name="itemID" value="<?php echo $advertisements[0][0];?>" />
            <input type="submit" class="viewItem" value="View Item" name="<?php echo $advertisements[0][1];?>">
            <button type="button" class="addToCart"><a href="cart.php">Add to Cart</a></button>
          </div>
        </div>
      </form>
      <form method="get" action="item.php" id="addSubmit">
        <div class = "flipAdd">
          <div class="front"><img class = "addImg" alt = "addImg" src= "<?php echo $advertisements[1][4]; ?>"></div>
          <div class="back">
            <p class="addDesc"><?php echo $advertisements[1][3]; ?></p>
            <input type="hidden" name="itemID" value="<?php echo $advertisements[1][0];?>" />
            <input type="submit" class="viewItem" value="View Item" name="<?php echo $advertisements[1][1];?>">
            <button type="button" class="addToCart"><a href="cart.php">Add to Cart</a></button>
          </div>
        </div>
      </form>
      <form method="get" action="item.php" id="addSubmit">
        <div class = "flipAdd">
          <div class="front"><img class = "addImg" alt = "addImg" src= "<?php echo $advertisements[2][4]; ?>"></div>
          <div class="back">
            <p class="addDesc"><?php echo $advertisements[2][3]; ?></p>
            <input type="hidden" name="itemID" value="<?php echo $advertisements[2][0];?>" />
            <input type="submit" class="viewItem" value="View Item" name="<?php echo $advertisements[2][1];?>">
            <button type="button" class="addToCart"><a href="cart.php">Add to Cart</a></button>
          </div>
        </div>
      </form>
    </div>

    <!-- recommended items -->
    <div class = "recommendeditems">
      <h2>Recommended Items</h2>
      <div class = "panel">
        <form method="get" action="item.php" id="addSubmit">
          <figure class="itemFig">
            <img src="<?php echo $recommendedItems[0][4];?>" alt="<?php echo $recommendedItems[0][1];?>">
            <input type="hidden" name="itemID" value="<?php echo $recommendedItems[0][0]?>" />
            <figcaption>
              <input type="submit" class="viewItem" value="<?php echo $recommendedItems[0][1];?>" name="<?php echo $recommendedItems[0][1];?>">
            </figcaption>
          </figure>
        </form>
        <p class="itemDesc"><?php echo $recommendedItems[0][3];?>
          <button type="button" class="addToCart"><a href="cart.php">Add to Cart</a></button>
        </p>
      </div>
      <div class = "panel">
        <form method="get" action="item.php" id="addSubmit">
          <figure class="itemFig">
            <img src="<?php echo $recommendedItems[1][4];?>" alt="<?php echo $recommendedItems[1][1];?>">
            <input type="hidden" name="itemID" value="<?php echo $recommendedItems[1][0]?>" />
            <figcaption>
              <input type="submit" class="viewItem" value="<?php echo $recommendedItems[1][1];?>" name="<?php echo $recommendedItems[1][1];?>">
            </figcaption>
          </figure>
        </form>
        <p class="itemDesc"><?php echo $recommendedItems[1][3];?>
          <button type="button" class="addToCart"><a href="cart.php">Add to Cart</a></button>
        </p>
      </div>
      <div class = "panel">
        <form method="get" action="item.php" id="addSubmit">
          <figure class="itemFig">
            <img src="<?php echo $recommendedItems[2][4];?>" alt="<?php echo $recommendedItems[2][1];?>">
            <input type="hidden" name="itemID" value="<?php echo $recommendedItems[2][0]?>" />
            <figcaption>
              <input type="submit" class="viewItem" value="<?php echo $recommendedItems[2][1];?>" name="<?php echo $recommendedItems[2][1];?>">
            </figcaption>
          </figure>
        </form>
        <p class="itemDesc"><?php echo $recommendedItems[2][3];?>
          <button type="button" class="addToCart"><a href="cart.php">Add to Cart</a></button>
        </p>
      </div>
      <div class = "panel">
        <form method="get" action="item.php" id="addSubmit">
          <figure class="itemFig">
            <img src="<?php echo $recommendedItems[3][4];?>" alt="<?php echo $recommendedItems[3][1];?>">
            <input type="hidden" name="itemID" value="<?php echo $recommendedItems[3][0]?>" />
            <figcaption>
              <input type="submit" class="viewItem" value="<?php echo $recommendedItems[3][1];?>" name="<?php echo $recommendedItems[3][1];?>">
            </figcaption>
          </figure>
        </form>
        <p class="itemDesc"><?php echo $recommendedItems[3][3];?>
          <button type="button" class="addToCart"><a href="cart.php">Add to Cart</a></button>
        </p>
      </div>
    </div>

    <!-- deals -->
    <div class = "deals">
      <h2>Deals</h2>
      <div class = "panel">
        <form method="get" action="item.php" id="addSubmit">
          <figure class="itemFig">
            <img src="<?php echo $deals[0][4];?>" alt="<?php echo $deals[0][1];?>">
            <input type="hidden" name="itemID" value="<?php echo $deals[0][0]?>" />
            <figcaption>
              <input type="submit" class="viewItem" value="<?php echo $deals[0][1];?>" name="<?php echo $deals[0][1];?>">
            </figcaption>
          </figure>
        </form>
        <p class="itemDesc"><?php echo $deals[0][3];?>
          <button type="button" class="addToCart"><a href="cart.php">Add to Cart</a></button>
        </p>
      </div>
      <div class = "panel">
        <form method="get" action="item.php" id="addSubmit">
          <figure class="itemFig">
            <img src="<?php echo $deals[1][4];?>" alt="<?php echo $deals[1][1];?>">
            <input type="hidden" name="itemID" value="<?php echo $deals[1][0]?>" />
            <figcaption>
              <input type="submit" class="viewItem" value="<?php echo $deals[1][1];?>" name="<?php echo $deals[1][1];?>">
            </figcaption>
          </figure>
        </form>
        <p class="itemDesc"><?php echo $deals[1][3];?>
          <button type="button" class="addToCart"><a href="cart.php">Add to Cart</a></button>
        </p>
      </div>
      <div class = "panel">
        <form method="get" action="item.php" id="addSubmit">
          <figure class="itemFig">
            <img src="<?php echo $deals[2][4];?>" alt="<?php echo $deals[2][1];?>">
            <input type="hidden" name="itemID" value="<?php echo $deals[2][0]?>" />
            <figcaption>
              <input type="submit" class="viewItem" value="<?php echo $deals[2][1];?>" name="<?php echo $deals[2][1];?>">
            </figcaption>
          </figure>
        </form>
        <p class="itemDesc"><?php echo $deals[2][3];?>
          <button type="button" class="addToCart"><a href="cart.php">Add to Cart</a></button>
        </p>
      </div>
      <div class = "panel">
        <form method="get" action="item.php" id="addSubmit">
          <figure class="itemFig">
            <img src="<?php echo $deals[3][4];?>" alt="<?php echo $deals[3][1];?>">
            <input type="hidden" name="itemID" value="<?php echo $deals[3][0]?>" />
            <figcaption>
              <input type="submit" class="viewItem" value="<?php echo $deals[3][1];?>" name="<?php echo $deals[3][1];?>">
            </figcaption>
          </figure>
        </form>
        <p class="itemDesc"><?php echo $deals[3][3];?>
          <button type="button" class="addToCart"><a href="cart.php">Add to Cart</a></button>
        </p>
      </div>
    </div>


    <!-- company names / copyright / info etc etc -->
    <footer class="footer-distributed">
      <div class="footer-left">
        <h3>Caffeine<span>Holic</span></h3>
        <p class="footer-links">
          <a href="frontPage.php">Home</a>·
          <a href="#">Blog</a>·
          <a href="#">Pricing</a>·
          <a href="#">About</a>·
          <a href="#">Faq</a>·
          <a href="#">Contact</a>
        </p>
        <p class="footer-company-name">Caffeine Holic &copy; 2018</p>
      </div>

      <div class="footer-center">
        <div>
          <i class="mapmarker"></i>
          <p><span>3333 University Way</span> Kelowna, BC</p>
        </div>

        <div>
          <i class="phone"></i>
          <p>+1 778 581 3502</p>
        </div>

        <div>
          <i class="envelope"></i>
          <p><a href="mailto:khyy37@hotmail.com">khyy37@hotmail.com</a></p>
        </div>
      </div>

      <div class="footer-right">
        <p class="footer-company-about">
          <span>ABOUT THE COMPANY</span>
          Opened in October 2018, Kelowna BC.<br>
          Amazing coffee, tea, snacks<br>
          Best coffee in town.
        </p>

        <div class="footer-icons">
          <a href="#"><i class="facebook"></i></a>
          <a href="#"><i class="twitter"></i></a>
          <a href="#"><i class="linkedin"></i></a>
          <a href="#"><i class="instagram"></i></a>
        </div>
      </div>
    </footer>
  </body>
  </html>
