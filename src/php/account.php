<!DOCTYPE html>

<?php
session_start();
?>

<html lang = "en">
<head>
  <title>Your account</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="../css/header.css"/>
  <link rel="stylesheet" href="../css/default.css"/>
  <link rel="stylesheet" href="../css/footer.css"/>
  <link rel="stylesheet" href="../css/account.css">
</head>

<body>
  <header>
    <div class = "nav">
      <!-- LOGO -->
      <div class = "logoImage">
        <a href = "frontPage.html" id = "logo">
          <img class = "logoimg" alt = "logo" src= "../images/logos/logo.png">
        </a>
      </div>

      <!-- search -->
      <div class = "navLeft">
        <input type = "text" class ="search">
        <input type = "submit" value class = "submit">
      </div>

      <!-- cart -->
      <div class = "navRight">
        <a href = "cart.html" id = "cart">cart </a>
      </div>

      <!-- account -->
      <div class = "navRight">
        <div class="dropdown">
          <button class="dropbtn">account</button>
            <div class="dropdown-content">
              <div class = "signIn">
              <a href = "signin.html" id = "sign">sign in</a>
                <ul class = "logIn">
                  <a href="account.html"><li class = "youraccount">Your Account</li></a>
                  <a href="orders.html"><li class = "yourorder">Your Orders</li></a>
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
                    <a href="coffee.html"><li class = "coffee">coffee</li></a>
                    <a href="tea.html"><li class = "tea">tea</li></a>
                    <a href="pop.html"><li calss = "pop">soft drinks</li></a>
                  </ul>
              </div>
              <div class = "foodMenu">
                <p id = "food">food</p>
                  <ul class = "subMenu">
                    <a href="cookie.html"><li class = "cookie">cookie</li></a>
                    <a href="muffin.html"><li class = "muffin">muffin</li></a>
                    <a href="donut.html"><li class = "donut">donut</li></a>
                  </ul>
              </div>
            </div>
        </div>
      </div>

      <!-- team members (us) -->
      <div class = "navRight">
        <a href = "aboutus.html" id = "aboutUs">about us </a>
      </div>
    </div>
  </header>

  <div class="main">
    <div class="column welcome">
      <div class="part">
        <?php
        // welcome firstname
        if (isset($_SESSION['firstname'])) {
          $firstname = $_SESSION['firstname'];
          echo "<h1> WELCOME  $firstname </h1>";
        }
        else {
          echo "<h1>WELCOME </h1>";
        }
        ?>
      </div>
      <!--
      <div class="part image">
        <figure>
          <img src="" alt="">
        </figure>
        <figcaption>UPLOAD PHOTO</figcaption>
      </div>
    -->
    </div>

    <div class="column account">
      <div class="part">
        <h1>MY ACCOUNT</h1>
      </div>
      <div class="part">
        <a href="account.php">ACCOUNT</a>
      </div>
      <div class="part">
        <a href="profile.php">PROFILE</a>
      </div>
      <div class="part">
        <a href="addressbook.php">ADDRESS BOOK</a>
      </div>
    </div>

    <div class="column purchase">
      <div class="part">
        <h1>MY PURCHASE</h1>
      </div>
      <div class="part">
        <a href="orders">ORDER HISTORY</a>
      </div>
    </div>
  <!--
    <div class="wishlist">
      <div class="leftbutton">
        <a class="bl" href="#" class="previous round">&#8249;</a>
      </div>
      <div class="list">
        <div class="listblock">

        </div>
        <div class="listblock">

        </div>
        <div class="listblock">

        </div>
        <div class="listblock">

        </div>

      </div>
      <div class="rightbutton">
        <a class="br" href="#" class="next round">&#8250;</a>
      </div>

    </div> -->
    <!-- company names / copyright / info etc etc -->

  </div>


  <footer class="footer-distributed">
    <div class="footer-left">
      <h3>Caffeine<span>Holic</span></h3>
  			<p class="footer-links">
					<a href="frontPage.html">Home</a>·
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
  <img class="accountbg" src="../images/bg/accountbg.jpg" alt="">

</body>
