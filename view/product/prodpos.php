<?php

include '../../connect.php';
session_start();

$pid = $_POST['pid'];
$quantity = $_POST['quantity1'];

$sql = "select * from product where pid='".$pid."'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
//echo $pid."<br><br>";

if($quantity===$row['pstock']){
    $_SESSION['warning']="Quantity cannot be higher than stock";
    header("Location:cart.php");
}else {
  $_SESSION['cart'][$_SESSION['top']]=$pid;
  $_SESSION['top']++;
  //echo $_SESSION['cart'][$_SESSION['top']];
}

ob_start();
header("Location:cart.php");
exit;
?>
