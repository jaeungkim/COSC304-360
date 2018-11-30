<?php

//connection information
include "db_credential.php";


//return a single item
function returnItem($pid){
	//connect to database
	global $host, $user, $password, $database;
	$connection = mysqli_connect($host, $user, $password, $database);
	//check for errors
	$error = mysqli_connect_error();
	$errorarray = array();
	if($error != null) {
		//return an array with a single value which is an error message
		$errorarray[] = "Failed to connect to database";
		return $errorarray;
	} else {
		//return an array which contains all the values of the product
		$sql = "SELECT * FROM Product WHERE pid = '$pid'";
		$result = mysqli_query($connection, $sql);
		$row = mysqli_fetch_row($result);
		mysqli_close($connection);
		return $row;
	}
	//return an array with a single value which is an error message
	$errorarray[] = "Could not find " . (string)$pid;
	return $errorarray;
}

//return multiple items
function returnMultipleItems($idArray){
	global $host, $user, $password, $database;
	$connection = mysqli_connect($host, $user, $password, $database);
	//check for errors
	$error = mysqli_connect_error();
	$returnArray = array();
	if($error != null) {
		//return an array with a single value which is an error message
		$errorarray[] = "Failed to connect to database";
		return $errorarray;
	} else {

		foreach ($idArray as $value){
			$sql = "SELECT * FROM Product WHERE pid = '$value'";
			$result = mysqli_query($connection, $sql);
			$row = mysqli_fetch_row($result);
			$returnArray[] = $row;
		}
		mysqli_close($connection);
		//return an array of product arrays
		return $returnArray;
	}
	//return an array with a single value which is an error message
	$errorarray[] = "Could not find " . (string)$pid;
	return $errorarray;
}

//Return a list that includes all comments for a product id
function returnComments($pid){
	//connect to database
	global $host, $user, $password, $database;
	$connection = mysqli_connect($host, $user, $password, $database);
	//check for errors
	$error = mysqli_connect_error();
	$errorarray = array();
	if($error != null) {
		//return an array with a single value which is an error message
		$errorarray[] = "Failed to connect to database";
		return $errorarray;
	} else {
		//return an array which contains all the values of the product
		$sql = "SELECT * FROM userComments WHERE pid = '$pid'";
		$result = mysqli_query($connection, $sql);
		$returnArray;
		while ($row = mysqli_fetch_row($result)){
			$returnArray[] = $row;
		}
		mysqli_close($connection);
		return $returnArray;
	}
	//return an array with a single value which is an error message
	$errorarray[] = "Could not find " . (string)$pid;
	return $errorarray;
}

//return list that contains all  information for a customer based on cid
function returnCustomer($cid){
	//connect to database
	global $host, $user, $password, $database;
	$connection = mysqli_connect($host, $user, $password, $database);
	//check for errors
	$error = mysqli_connect_error();
	$errorarray = array();
	if($error != null) {
		//return an array with a single value which is an error message
		$errorarray[] = "Failed to connect to database";
		return $errorarray;
	} else {
		//return an array which contains all the values of the product
		$sql = "SELECT * FROM customer WHERE cid = '$cid'";
		$result = mysqli_query($connection, $sql);
		$row = mysqli_fetch_row($result);
		mysqli_close($connection);
		return $row;
	}
	//return an array with a single value which is an error message
	$errorarray[] = "Could not find " . (string)$pid;
	return $errorarray;
}
?>
