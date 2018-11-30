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
  <?php include 'header.php';?>

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
  <?php include 'footer.php';?>
</body>
</html>
