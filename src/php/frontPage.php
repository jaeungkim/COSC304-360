<!DOCTYPE html>
<?php
session_start();
?>
<html lang = "en">
<head>
  <title>CAFFEINE HOLIC</title>
  <link rel="stylesheet" href="../css/mainPage.css" />
  <link rel="stylesheet" href="../css/header.css"/>
  <link rel="stylesheet" href="../css/default.css"/>
  <link rel="stylesheet" href="../css/footer.css"/>
</head>
<body>

  <?php
  //Set id in arrays to whatever products you want. Advertisements can only have 3 but the others can have however many.
  include"accessProduct.php";
  $advertisements = returnMultipleItems(array(1, 2, 8));
  $recommendedItems = returnMultipleItems(array(10, 6, 4, 24, 7, 19));
  $deals = returnMultipleItems(array(5, 14, 21, 9, 15, 23));
  ?>
  <?php include 'header.php';?>

  <!-- advertisements -->
  <div class = "advertisements">
	<?php
		foreach($advertisements as $value){
			echo "<form method='get' action='item.php' id='addSubmit'>
				<div class = 'flipAdd'>
					<div class='front'><img class = 'addImg' alt = 'addImg' src= '".$value[4]."'></div>
					<div class='back'>
						<p class='addDesc'>".$value[3]."</p>
						<input type='hidden' name='itemID' value='".$value[0]."'>
						<input type='submit' class='viewItem' value='View Item' name='".$value[1]."'>
						<button type='button' class='addToCart'>
							<a class='addCart' href = 'addcart.php?id='".$value[0]."'&quantity=1'> Add to Cart </a>
						</button>
					</div>
				</div>
			</form>";}?>

  <!-- recommended items -->
  <div class = "recommendeditems">
    <h2>Recommended Items</h2>
		<?php
		foreach($recommendedItems as $value){
			echo "<div class = \"panel\">
			<form method=\"get\" action=\"item.php\" id=\"addSubmit\">
				<figure class=\"itemFig\">
					<img src=\"".$value[4] ."\" alt=\"".$value[1]."\">
					<input type=\"hidden\" name=\"itemID\" value=\"".$value[0]."\" >
					<figcaption>
						<input type=\"submit\" class=\"viewItem\" value=\"".$value[1]."\" name=\"".$value[1]."\">
					</figcaption>
				</figure>
			</form>
			<p class=\"itemDesc\">".$value[3].
				"<button type=\"button\" class=\"addToCart\"><a href=\"cart.php\">Add to Cart</a></button>
			</p>
			</div>";}?>
  </div>

  <!-- deals -->
  <div class = "deals">
    <h2>Deals</h2>
		<?php
		foreach($deals as $value){
			echo "<div class = \"panel\">
			<form method=\"get\" action=\"item.php\" id=\"addSubmit\">
				<figure class=\"itemFig\">
					<img src=\"".$value[4] ."\" alt=\"".$value[1]."\">
					<input type=\"hidden\" name=\"itemID\" value=\"".$value[0]."\" >
					<figcaption>
						<input type=\"submit\" class=\"viewItem\" value=\"".$value[1]."\" name=\"".$value[1]."\">
					</figcaption>
				</figure>
			</form>
			<p class=\"itemDesc\">".$value[3].
				"<button type=\"button\" class=\"addToCart\"><a href=\"cart.php\">Add to Cart</a></button>
			</p>
			</div>";}?>
  </div>
  <?php include 'footer.php';?>
</body>
</html>
