<?php session_start(); ?>

<?php
if ($_SERVER['REQUEST_METHOD']=="POST") {
  $cardname = $_POST["cardname"];
  $cardnumber	= $_POST["cardnumber"];
  $CVV = $_POST["CVV"];
  $expiredate = $_POST["expiredate"];
  $bAddress = $_POST["bAddress"];

  $referer = $_SERVER['HTTP_REFERER'];

  include 'db_credential.php';
  $conn = mysqli_connect($host, $user, $password, $database);
  $error = mysqli_connect_error();
  $exist = false;

  $referer = $_SERVER['HTTP_REFERER'];

  if($error != null)
  {
    $output = "<p>Unable to connect to database!</p>";
    exit($output);
  }
  else{
      $sql = "SELECT cardNum FROM creditcard";
      $results = mysqli_query($conn, $sql);

      while($row = mysqli_fetch_assoc($results)){
        if($row["cardNum"]==$cardnumber){
          $exist = true;

          $_SESSION['exist']=true;
          header("Location: $referer");
        }
      }
  // }
    if(!$exist){
      $sql = "INSERT INTO creditcard (cardNum, cardExpired, CVV, bAddress)
      VALUES ('$cardnumber','$expiredate','$CVV', '$bAddress') ";
      $results = mysqli_query($conn, $sql);

      if ($results) {
        //update succeed
        header("Location: frontPage.php");//go back to insert

      }
      else {
        echo "error: ".$sql. "<br>";
      }
      mysqli_close($conn);
    }

}

}
  else{
    echo"wrong request method";
  }



 ?>
