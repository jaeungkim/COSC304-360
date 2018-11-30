<?php
include 'db_credential.php';
include 'accessProduct.php';

$connection = mysqli_connect($host, $user, $password, $database);
$error = mysqli_connect_error();
if($error != null) {
  $output = "<p>Unable to connect to database!</p>";
  exit($output);
} else {
	//Gathers required information from server and database
	$referer = $_SERVER['HTTP_REFERER'];
	$email = $_GET["email"];
	$customerArray = returnLoggedIn($email);
	$cid = $customerArray[0];
	$pid = trim(mysqli_real_escape_string($connection, $_GET["pid"]));
	$content = trim(mysqli_real_escape_string($connection, $_GET["content"]));
	
	//Inserts new comment into database
	$sql = "INSERT INTO usercomments (pid, cid, content) VALUES('$pid' , '$cid' , '$content')";
	if (mysqli_query($connection, $sql)){
		header("Location: $referer");
	}else {
		echo '<p> Could not connect</p>';
	}
}
mysqli_close($connection);

?>