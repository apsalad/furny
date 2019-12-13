<?php

include '../../connect.php';
session_start();

$pid = $_POST['pid'];
$quantity = $_POST['quantity'];
//echo $pid."<br><br>";

if($quantity==='1'){
  $_SESSION['warning']="Cannot be lesser than one";
  header("Location:cart.php");
}else {
  if (($key = array_search($pid, $_SESSION['cart'])) !== false) {
    unset($_SESSION['cart'][$key]);
  }
  $_SESSION['top']--;
}

ob_start();
header("Location:cart.php");
exit;
?>
