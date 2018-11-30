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
	//php files for pulling 
	include "accessProduct.php";
		
		
	$pid = $_GET["itemID"];
	$itemArray = returnItem($pid);
	//retrieve comments
	$commentsArray = returnComments($pid);

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
		<?php 
			echo "<p>".$commentsArray[0][0]."</p>";
			foreach ($commentsArray as $value){
				$userInfo = returnCustomer($value[2]);
				echo "<div class=\"panel\">
					<h3 class=".$userInfo[2].">tweedleDee</h3>
					<p class=\"ptext\">".$value[3]."</p>
				</div>";
				
			}
		?>
		<form action = 'comment.php' method = 'get' id = 'mainForm'>
			<input type = 'text' name = 'comment' value = 'Enter Comment' id='commentBox'>
			<input type = 'submit' class = 'commentBtn' name = 'commentSubmit' value = 'Submit'>
		</form>
	</div>

	<div class="similarItems">
		<h2>Similar Items</h2>
		<?php
		foreach($similarItems as $value){
			echo "<form method=\"get\" action=\"item.php\" id=\"addSubmit\">
			<div class = \"panel\">
				<figure class=\"itemFig\">
					<img src=\"".$value[4] ."\" alt=\"".$value[1]."\">
					<input type=\"hidden\" name=\"itemID\" value=\"".$value[0]."\" >
					<figcaption>
						<input type=\"submit\" class=\"viewItem\" value=\"".$value[1]."\" name=\"".$value[1]."\">
					</figcaption>
				</figure>
			</div>
			</form>";	
		}
		?>

	</div>

  <?php include 'footer.php'?>
  </body>
</html>
