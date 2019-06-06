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
<?php include '../../includes/head.php'; ?>
<div class="d-flex justify-content-center mt-5">
  <div class="spinner-border" role="status" style="width: 3rem; height: 3rem;">
    <span class="sr-only">Loading...</span>
  </div>
</div>
<?php include '../../includes/foot.php'; ?>
