
<html>
<?php
session_start();
?>

<?php
if ($_SERVER['REQUEST_METHOD']=='POST') {
  $firstname = $_POST["firstname"];
  $lastname = $_POST['lastname'];
  $email = $_POST["email"];
  $pw = $_POST["password"];
  $pwhash = md5($pw);
  $address = $_POST['address'];
  $phonenum = $_POST['phonenum'];
  $isadmin = 0;
  $disabled = 0;
  $referer = $_SERVER['HTTP_REFERER'];

  include 'db_credential.php';
  $conn = mysqli_connect($host, $user, $password, $database);
  $error = mysqli_connect_error();
  $flag = false;
  $referer = $_SERVER['HTTP_REFERER'];

  if($error != null)
  {
    $output = "<p>Unable to connect to database!</p>";
    exit($output);
  }
  else
  {
    $sql = "SELECT email FROM Customer" ;
    $results = mysqli_query($conn, $sql);

    while ($row = mysqli_fetch_assoc($results)) {
      if ($row["email"] == $email) {
        $flag = true;
        //echo "<p>user already exists with this username and/or email</p>";
        //echo "<a href = $referer>return to user entry</a>";
        $_SESSION['exist'] = true;
        header("Location: $referer");
      }
    }

    if (!$flag) {//user does not exist
      $sql = "INSERT INTO `orders`(`purchased`, `purchasedDate`, `cardNum`)
VALUES (123, CURDATE(), 123456789);";
      $results = mysqli_query($conn, $sql);
      //
      //       INSERT INTO customer (email, fName, lName, address, cPassword, phoneNum)
      // VALUES ('kyle96921@hotmail.com', 'kyle', 'lee', '123', 'password','7789608359');


      if ($results) {
        //register succeed
        //echo "an account for the user ".$username ." has been created";
        $_SESSION['login'] = $email;// this user logged in
        $_SESSION['firstname'] = $firstname;//show on frontpage
        header("Location: frontPage.php");//jump to frontpage

      }
      else {
        echo "error: ".$sql. "<br>";
      }
      mysqli_close($conn);

    }

  }

}
else {
  echo "wrong request method";
}

?>

</html>
