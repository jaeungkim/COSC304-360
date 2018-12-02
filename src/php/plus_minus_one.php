<?php
session_start();
if ($_SERVER['REQUEST_METHOD']=="GET") {
  //button is clicked, judge which button
  if (isset($_GET['plus'])) {
    $pid = $_GET['plus'];//

    if (isset(($_SESSION['productList']))) {
      // get quantity form id
      $productList = $_SESSION['productList'];
      $productList[$pid]['quantity'] = $productList[$pid]['quantity'] + 1;
      $_SESSION['productList'] = $productList;
      header("Location: showcart.php");
  }
  }

  if (isset($_GET['minus'])) {
    $pid = $_GET['minus'];//

    if (isset(($_SESSION['productList']))) {
      // get quantity form id
      $productList = $_SESSION['productList'];
      $productList[$pid]['quantity'] = $productList[$pid]['quantity'] - 1;
      if ($productList[$pid]['quantity'] == 0) {
        unset($productList[$pid]);
      }
      $_SESSION['productList'] = $productList;
      header("Location: showcart.php");
  }
  }
  if (isset($_GET['delete'])) {
    $pid = $_GET['delete'];//

    if (isset(($_SESSION['productList']))) {
      // get quantity form id
      $productList = $_SESSION['productList'];
      $productList[$pid]['quantity'] = 0;
      if ($productList[$pid]['quantity'] == 0) {
        unset($productList[$pid]);
      }
      $_SESSION['productList'] = $productList;
      header("Location: showcart.php");
  }
  }



}
?>
