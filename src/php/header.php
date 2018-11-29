<html lang = "en">
<head>
  <title>IDEAS</title>
  <link rel="stylesheet" href="../css/mainPage.css" />
  <link rel="stylesheet" href="../css/header.css"/>
  <link rel="stylesheet" href="../css/default.css"/>
  <link rel="stylesheet" href="../css/footer.css"/>
</head>
<body>

  <!-- <?php
  include"accessProduct.php";
  $advertisements = returnMultipleItems(array(1, 2, 3));
  ?> -->
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
                $username = $_SESSION['username'];
                echo $username;
                echo '<a href="logout.php">Logout</a>';
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
      </div>
    </header>
