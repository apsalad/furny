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
  //echo $_SESSION['cart'][$_SESSION['top']]."<br>";
  $_SESSION['top']++;
  //echo $_SESSION['top']."<br>";
}
?>

<?php include '../../includes/head.php'; ?>
<div class="d-flex justify-content-center mt-5">
  <div class="spinner-border" role="status" style="width: 3rem; height: 3rem;">
    <span class="sr-only">Loading...</span>
  </div>
</div>
<?php include '../../includes/foot.php'; ?>

<?php
ob_start();
header("Location:addedcart.php?pid=".$pid."&quantity=".$quantity);
exit;
?>
