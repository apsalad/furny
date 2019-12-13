<?php

include '../../connect.php';
session_start();

$pid = $_POST['pid'];
$quantity = $_POST['quantity3'];
//echo $pid."<br><br>";

$_SESSION['cart'] =array_diff($_SESSION['cart'],[$pid]);
$_SESSION['top']-=$quantity;

ob_start();
header("Location:cart.php");
exit;
?>
