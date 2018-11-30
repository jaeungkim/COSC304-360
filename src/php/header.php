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
      <a href = "showcart.php" id = "cart">cart </a>
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
              if(isset($_SESSION['isAdmin'])){
                $isAdmin = $_SESSION['isAdmin'];
              if($isAdmin==1){
                echo '<a href = "adminPage.php" > Admin Page</a>';
              }
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
