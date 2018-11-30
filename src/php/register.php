<!DOCTYPE html>
<?php
session_start();
if (isset($_SESSION['exist'])) {
  if ($_SESSION['exist'] == true) {
    echo "<script>alert('this email has been registered!');</script>";
    $_SESSION['exist'] = false;
  }
}

?>

<html lang = "en">
<head>
  <title>IDEAS registration</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="../css/header.css"/>
  <link rel="stylesheet" href="../css/default.css"/>
  <link rel="stylesheet" href="../css/footer.css"/>
  <link rel="stylesheet" href="../css/registration.css">
  <script type="text/javascript" src="../scripts/validate.js"></script>
  <script>//show pw or cover pw
  function showpassword() {
      var x = document.getElementsByName("password")[0];
      if (x.type === "password") {
          x.type = "text";
      } else {
          x.type = "password";
      }
  }

  document.getElementById("mainForm").onsubmit = function(){checkPasswordMatch(e)};
  function checkPasswordMatch(e){
    var pw = document.getElementById("password");
    var pwcheck = document.getElementById("password-check");
    if (pw.value != pwcheck.value) {
      e.preventDefault();
      makeRed(pw);
      makeRed(pwcheck);
      alert("passwords not match");

    }
    else {
      document.getElementById("mainForm").submit();
    }
  }

</script>

</head>

<body>
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
              <a href = "signin.php" id = "sign">sign in</a>
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
  <form  action="process-register.php" method="post" id="mainForm">
    <table>
      <th colspan="2"><h1 class="form">Create account</h1></th>
      <tr>
        <td class="firstcol"><label for="firstname">firstname</label></td>
        <td><input type="text" name="firstname" class="required"></td>
      </tr>

      <tr>
        <td class="firstcol"><label for="lastname">lastname</label></td>
        <td><input type="text" name="lastname" class="required"></td>
      </tr>

      <tr>
        <td class="firstcol"><label for="email">Email</label></td>
        <td><input type="text" name="email" class="required"></td>
      </tr>

      <tr>
        <td class="firstcol"><label for="phonenum">Phone number</label></td>
        <td><input type="text" name="phonenum" class="required"></td>
      </tr>

      <tr>
        <td class="firstcol"><label for="address">Address</label></td>
        <td><input type="text" name="address" class="required"></td>
      </tr>

      <tr>
        <td class="firstcol"><label for="password">Password</label></td>
        <td><input type="password" name="password" onfocus="this.value=''" class="required" id="password"></td>
      </tr>

      <tr>
        <td class="firstcol"><input type="checkbox" name="showpw" onclick="showpassword()">Show Password</td>
      </tr>

      <tr>
        <td class="firstcol"><label for="confirm">Password again</label></td>
        <td><input type="password" name="confirm" onfocus="this.value=''" class="required" id="password-check"></td>
      </tr>

      <tr>
        <td class="firstcol"><p class="change">Already have an account?<a class="signinlink" href="signin.php">Sign in</a></p></td>
        <td><button class="register" type="submit" name="button">Create your IDEAS account</button></td>
      </tr>
    </table>
  </form>

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
<img class="registerbg" src="../images/bg/registerbg.jpg" alt="">
  </video>


</body>
</html>
