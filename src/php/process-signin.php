<?php
session_start();
?>

<?php
if ($_SERVER['REQUEST_METHOD']=="POST") {
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

    if($error != null)
    {
      $output = "<p>Unable to connect to database!</p>";
      exit($output);
    }
    else {
      $sql = "SELECT username, email, password FROM users";
      $results = mysqli_query($conn, $sql);
      while ($row = mysqli_fetch_assoc($results)) {
        if ($row["email"] == $email) {
          $flag = true;//user exists
          if ($row["password"] == $pwhash) {
            //echo "this is a valid account";//jump to frontPage
            $_SESSION['login'] = $email;
            $_SESSION['username'] = $row['username'];
            //$_SESSION['wrongpw']= false;
            //$_SESSION['wrongemail']= false;
            header('Location: frontPage.php');
          }
          else {
            //echo "password not match";
            $_SESSION['wrongpw']= true;
            header("Location: $referer");

          }
        }
      }
      if (!$flag) {//user not exist
        //echo "user not exit";
        $_SESSION['wrongemail']= true;
        header("Location: $referer");
      }
      mysqli_close($conn);
    }

}
else {
  //echo "wrong request method";
  $_SESSION['invalid']= true;
  if (isset($_SESSION['invalid'])) {
    header('Location: login.php');
  }

}
?>
