<!DOCTYPE html>
<html lang = "en">
<head>
  <title>IDEAS</title>
  <link rel="stylesheet" href="../css/header.css" />
  <link rel="stylesheet" href="../css/mainPage.css" />
  <link rel="stylesheet" href="../css/default.css"/>
  <link rel="stylesheet" href="../css/item.css"/>
  <link rel="stylesheet" href="../css/footer.css"/>
</head>
<body>
<?php
	include "accessProduct.php";
	$pid = $_GET["itemID"];
	$itemArray = returnItem($pid);
	
	//CHANGE THIS TO CHANGE SIMILAR ITEMS. MUST SET 4 ITEMS
	$similarItems = returnMultipleItems(array(5, 22, 19, 7))
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
        <input type = "text" class ="search">
        <input type = "submit" value class = "submit">
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

  <!-- item body -->
    <div class = "panel">
		<figure class="itemFig">
			<img src="<?php echo $itemArray[4];?>" alt="<?php echo $itemArray[1];?>">
			<figcaption><?php echo $itemArray[1];?></figcaption>
		</figure>
		<p class="itemDesc"><?php echo $itemArray[3];?>
			<button type="button" class="addToCart"><a href="cart.php">Add to Cart</a></button>
		</p>
	</div>
	<div class="comments">
		<h2>Comments</h2>
		<div class="panel">
			<img src="../images/profilepictures/tweedledee.jpg" alt="tweedledeeProfile">
			<h3 class="username">tweedleDee</h3>
			<p class="ptext">Man this tea sucks. It tasted like roasted dog food</p>
		</div>
		<div class="panel">
			<img src="../images/profilepictures/tweedledum.jpg" alt="tweedledumProfile">
			<h3 class="username">tweedleDum</h3>
			<p class="ptext">Man this tea is delicious! It tasted like roasted dog food</p>
		</div>
		<div class="panel">
			<img src="../images/profilepictures/cinderella.jpg" alt="cinderellaProfile">
			<h3 class="username">cinderella</h3>
			<p class="ptext">Help me I can't feel my legs</p>
		</div>
		<button type="button" class="commentBtn"><a href="#">Comment</a></button>
	</div>

	<div class="similarItems">
		<h2>Similar Items</h2>
		<form method="get" action="item.php" id="addSubmit">
		<div class = "panel">
			<figure class="itemFig">
				<img src="<?php echo $similarItems[0][4];?>" alt="<?php echo $similarItems[0][1];?>">
				<input type="hidden" name="itemID" value="<?php echo $similarItems[0][0]?>" />
				<figcaption>
					<input type="submit" class="viewItem" value="<?php echo $similarItems[0][1]?>" name="<?php echo $similarItems[0][1]?>">
				</figcaption>
			</figure>
		</div>
		</form>
		<form method="get" action="item.php" id="addSubmit">
		<div class = "panel">
			<figure class="itemFig">
				<img src="<?php echo $similarItems[1][4];?>" alt="<?php echo $similarItems[1][1];?>">
				<input type="hidden" name="itemID" value="<?php echo $similarItems[1][0]?>" />
				<figcaption>
					<input type="submit" class="viewItem" value="<?php echo $similarItems[1][1]?>" name="<?php echo $similarItems[1][1]?>">
				</figcaption>
			</figure>
		</div>
		</form>
		<form method="get" action="item.php" id="addSubmit">
		<div class = "panel">
			<figure class="itemFig">
				<img src="<?php echo $similarItems[2][4];?>" alt="<?php echo $similarItems[2][1];?>">
				<input type="hidden" name="itemID" value="<?php echo $similarItems[2][0]?>" />
				<figcaption>
					<input type="submit" class="viewItem" value="<?php echo $similarItems[2][1]?>" name="<?php echo $similarItems[2][1]?>">
				</figcaption>
			</figure>
		</div>
		</form>
				<form method="get" action="item.php" id="addSubmit">
		<div class = "panel">
			<figure class="itemFig">
				<img src="<?php echo $similarItems[3][4];?>" alt="<?php echo $similarItems[3][1];?>">
				<input type="hidden" name="itemID" value="<?php echo $similarItems[3][0]?>" />
				<figcaption>
					<input type="submit" class="viewItem" value="<?php echo $similarItems[3][1]?>" name="<?php echo $similarItems[3][1]?>">
				</figcaption>
			</figure>
		</div>
		</form>
	</div>

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
