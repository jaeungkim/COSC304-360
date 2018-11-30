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
 <?php include 'header.php';?>

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
		<form action = 'comment.php' method = 'get' id = 'mainForm'>
			<input type = 'text' name = 'comment' value = 'Enter Comment' id='commentBox'>
			<input type = 'submit' class = 'commentBtn' name = 'commentSubmit' value = 'Submit'>
		</form>
	</div>

	<div class="similarItems">
		<h2>Similar Items</h2>
		<form method="get" action="item.php" id="addSubmit">
		<div class = "panel">
			<figure class="itemFig">
				<img src="<?php echo $similarItems[0][4];?>" alt="<?php echo $similarItems[0][1];?>">
				<input type="hidden" name="itemID" value="<?php echo $similarItems[0][0];?>" />
				<figcaption>
					<input type="submit" class="viewItem" value="<?php echo $similarItems[0][1];?>" name="<?php echo $similarItems[0][1];?>">
				</figcaption>
			</figure>
		</div>
		</form>
		<form method="get" action="item.php" id="addSubmit">
		<div class = "panel">
			<figure class="itemFig">
				<img src="<?php echo $similarItems[1][4];?>" alt="<?php echo $similarItems[1][1];?>">
				<input type="hidden" name="itemID" value="<?php echo $similarItems[1][0];?>" />
				<figcaption>
					<input type="submit" class="viewItem" value="<?php echo $similarItems[1][1];?>" name="<?php echo $similarItems[1][1];?>">
				</figcaption>
			</figure>
		</div>
		</form>
		<form method="get" action="item.php" id="addSubmit">
		<div class = "panel">
			<figure class="itemFig">
				<img src="<?php echo $similarItems[2][4];?>" alt="<?php echo $similarItems[2][1];?>">
				<input type="hidden" name="itemID" value="<?php echo $similarItems[2][0];?>" />
				<figcaption>
					<input type="submit" class="viewItem" value="<?php echo $similarItems[2][1];?>" name="<?php echo $similarItems[2][1];?>">
				</figcaption>
			</figure>
		</div>
		</form>
		<form method="get" action="item.php" id="addSubmit">
		<div class = "panel">
			<figure class="itemFig">
				<img src="<?php echo $similarItems[3][4];?>" alt="<?php echo $similarItems[3][1];?>">
				<input type="hidden" name="itemID" value="<?php echo $similarItems[3][0];?>" />
				<figcaption>
					<input type="submit" class="viewItem" value="<?php echo $similarItems[3][1];?>" name="<?php echo $similarItems[3][1];?>">
				</figcaption>
			</figure>
		</div>
		</form>
	</div>

  <?php include 'footer.php'?>
  </body>
</html>
