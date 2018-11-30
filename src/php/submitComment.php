<?php
include 'db_credential.php';
include 'accessProduct.php';

$connection = mysqli_connect($host, $user, $password, $database);
$error = mysqli_connect_error();
if($error != null) {
  $output = "<p>Unable to connect to database!</p>";
  exit($output);
} else {
	$email = $_GET["email"];
	$cid = returnLoggedIn($email);
	$pid = trim(mysqli_real_escape_string($connection, $_GET["pid"]));
	$content = trim(mysqli_real_escape_string($connection, $_GET["content"]));

	$sql = "INSERT INTO usercomments (pid, cid, content) VALUES('$pid' , '$cid' , '$content')";
	if (mysqli_query($connection, $sql)){
		echo "<p>record added</p>";
		header("Location: item.php");
	} else {
		echo"<p>Failed to insert record</p>";
	}
}
    mysqli_close($connection);

?>