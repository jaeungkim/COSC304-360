
<html>
<?php
session_start();

?>


<?php
if ($_SERVER['REQUEST_METHOD']=='POST') {
  //$firstname = $_POST["firstname"];
  //$lastname = $_POST["lastname"];
  $username = $_POST["username"];
  $email = $_POST["email"];
  $pw = $_POST["password"];
  $pwhash = md5($pw);
  $referer = $_SERVER['HTTP_REFERER'];


  $host = "localhost";
  $database = "project";
  $user = "lin";
  $password = "linjing.";
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
    $sql = "SELECT email FROM users" ;
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
      $sql = "INSERT INTO users (username, email, password)
      VALUES ('$username', '$email', '$pwhash')";
      $results = mysqli_query($conn, $sql);
      if ($results) {
        //register succeed
        //echo "an account for the user ".$username ." has been created";
        $_SESSION['login'] = $email;// this user logged in
        header("Location: frontPage.php");//jump to front page//this should be changed to frontPage.php

      }
      else {
        echo "error: ".$sql. "<br>" .$results;
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
