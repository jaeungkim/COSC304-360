<?php
include 'db_credential.php';
$conn = mysqli_connect($host, $user, $password, $database);
$error = mysqli_connect_error();

if($error != null)
{
  $output = "<p>Unable to connect to database!</p>";
  exit($output);
}
else {
  $sql = "SELECT cid, fName FROM customer";
  $results = mysqli_query($conn, $sql);

?>
