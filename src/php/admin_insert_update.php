<!DOCTYPE html>
<div class = "navLeft">
  <form action="admin_insert_update.php" method="get" id="addItem">
    <input type = "text" name ="Add_Item">
    <input type = "submit" value="Submit">
  </form>
</div>
</html>
  <?php
  if ($_SERVER['REQUEST_METHOD']=="GET") {
    $Add_Item = $_GET['Add_Item'];
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
