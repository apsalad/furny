<?php

include '../../connect.php';

session_start();

$pid = $_POST['pid'];
$quantity = $_POST['quantity'];

if (!isset($_SESSION['cart'])) {
  $_SESSION['cart']=array();
  $_SESSION['top']=0;
}

for ($i=0; $i < $quantity; $i++) {
  $_SESSION['cart'][$_SESSION['top']]=$pid;
  echo $_SESSION['cart'][$_SESSION['top']]."<br>";
  $_SESSION['top']++;
  echo $_SESSION['top']."<br>";
}
//print_r($_SESSION['cart']);
//echo "<br>";
//unset($_SESSION['pid']);
//unset($_SESSION['quantity']);
ob_start();
header("Location:addedcart.php?pid=".$pid."&quantity=".$quantity);
exit;
?>
