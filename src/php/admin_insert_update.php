<!DOCTYPE html>
<form  action="process-insert_update.php" method="post" id="insert_update">
  <table>
    <th colspan="2"><h1 class="form">Update Products</h1></th>
    <tr>
      <td class="firstcol"><label for="pname">Product Name</label></td>
      <td><input type="text" name="pname" class="required"></td>
    </tr>

    <tr>
      <td class="firstcol"><label for="price">Price</label></td>
      <td><input type="text" name="price" class="required"></td>
    </tr>

    <tr>
      <td class="firstcol"><label for="description">Product Description</label></td>
      <td><input type="text" name="description" class="required"></td>
    </tr>

    <tr>
      <td class="firstcol"><label for="imageURL">Image Upload</label></td>
      <td><input type="text" name="imageURL" class="required"></td>
    </tr>

    <tr>
      <td class="firstcol"><label for="category">Category</label></td>
      <td><input type="text" name="category" class="required"></td>
    </tr>
    <tr>
      <td><button class="insert_product" type="submit" name="button">Update Items</button></td>
    </tr>
  </table>
</html>
  <?php
  if ($_SERVER['REQUEST_METHOD']=="GET") {
    //$Add_Item = $_GET['Add_Item'];
    // $insert_sql = mysqli_query($conn,"INSERT INTO Product VALUES($Add_Item)");
    include 'db_credential.php';
    $conn = mysqli_connect($host, $user, $password, $database);
    $error = mysqli_connect_error();

    // try catch for connection
    if($error != null){
      $output = "Unable to connect to database!";
      exit($output);
    } else {

      //LISTING ALL PRODUCTS IF NOTHING IS ENTERED
        echo("<h2 style='color:Black;'>Add New Product</h2>");




        echo("<h2 style='color:Black;'>All Products</h2>");
        $sql = mysqli_query($conn,"SELECT * FROM Product");
        while($row = mysqli_fetch_assoc($sql)){
          echo "<br>";
          echo "<p><h3 style='color:white;'>".$row['pname']."</h3>".$row['description']."</p>";
          $image=$row['imageURL'];
          echo '<img src="'.$image.'" style="width:128px;height:128px">';
        }


        mysqli_close($conn);

      }
    }
    ?>
