<?php
//return a single item
function returnItem($pid){
	//connection information
	$host = "localhost";
	$database = "product_test";
	$user = "root";
	$password = "";
	//connect to database
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
		$sql = "SELECT * FROM product_list WHERE pid = '$pid'";
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
	//connection information
	$host = "localhost";
	$database = "product_test";
	$user = "root";
	$password = "";
	//connect to database
	$connection = mysqli_connect($host, $user, $password, $database);
	//check for errors
	$error = mysqli_connect_error();
	$returnArray = array();
	if($error != null) {
		//return an array with a single value which is an error message
		$errorarray[] = "Failed to connect to database";
		return $returnArray;
	} else {
		
		foreach ($idArray as $value){
			$sql = "SELECT * FROM product_list WHERE pid = '$value'";
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
?>