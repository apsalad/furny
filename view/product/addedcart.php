<?php

include '../../connect.php';
include '../../includes/head.php';
include '../../includes/nav.php';

$pid = $_GET['pid'];
$quantity = $_GET['quantity'];

$sql = "select * from product where pid='".$pid."'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

?>

<div class="container" style="margin-top:15vh;margin-bottom:5vh;">
  <div class="jumbotron">
    <div class="alert alert-success" role="alert">
      Product added to Your cart!
    </div>
    <div class="container">
      <img src="<?php echo $row['pimg']?>" width="100" class="img-thumbnail">
        <?php echo $row['pname'];?>
        (<?php echo $quantity;?>)

      <div class="float-right mt-4">
        <button class="btn btn-info" onclick="location='cart.php'">Cart</button>
        <button class="btn btn-dark">Proceed to buy(<?php echo $_SESSION['top'];?>)</button>
      </div>

    </div>
  </div>
</div>

<?php

include '../../includes/foot.php'; ?>
