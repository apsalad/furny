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
<?php include '../../includes/head.php'; ?>
<div class="d-flex justify-content-center mt-5">
  <div class="spinner-border" role="status" style="width: 3rem; height: 3rem;">
    <span class="sr-only">Loading...</span>
  </div>
</div>
<?php include '../../includes/foot.php'; ?>
