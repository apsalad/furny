<?php
include '../../connect.php';
include '../../includes/head.php';
include '../../includes/nav.php';
?>
<link rel="stylesheet" type="text/css" href="/css/style.css">
  <h1>Shopping Cart</h1>

<div class="shopping-cart" style="margin-top:10vh;margin-bottom:5vh;">

  <div class="column-labels">
    <label class="product-image">Image</label>
    <label class="product-details">Product</label>
    <label class="product-price">Price</label>
    <label class="product-quantity text-center"> Quantity</label>
    <label class="product-removal">Remove</label>
    <label class="product-line-price text-center">Total</label>
  </div>

  <?php
    //echo $top;
    if (isset($_SESSION['cart']) && count($_SESSION['cart'])!=0 ) {

    $cart = $_SESSION['cart'];
    //print_r($cart);
    /*foreach ($cart as $key => $value) {
      echo $key."=".$value."<br>";
    }*/
    $cart2=array_unique($cart);
    //print_r($cart2);
    $total=0;
    $quantity=0;
    foreach ($cart2 as $pid) {

      $sql="select * from product where pid='".$pid."'";
      $result = $conn->query($sql);
      $row = $result->fetch_assoc();

      $tmp = array_count_values($cart);
      $quantity = $tmp[$pid];

      $price=intval($row['pprice']);
      $total+=$price*$quantity;

  ?>

  <div class="product">
    <div class="product-image">
      <img src="<?php echo $row['pimg']?>">
    </div>
    <div class="product-details">
      <div class="product-title"><?php echo $row['pname']?></div>
      <p class="product-description">
        <?php echo $row['pdes']?>
      </p>
    </div>
    <div class="product-price"><?php echo $price?></div>
    <div class="product-quantity">
      <div class="row">

        <div class="col-2">
          <form action="prodneg.php" method="post">

            <input type="text" name="pid" value="<?php echo $pid?>" hidden>
            <input type="text" name="quantity" value="<?php echo $quantity?>" hidden>
            <button type="submit" class="btn btn-light" style="text-decoration:none">
              <span class="fas fa-minus"></span>
            </button>

          </form>
        </div>

        <div class="col-6" style="margin-left:15px;">
          <input type="text" value="<?php echo $quantity?>" min="1" style="text-align:center;width:80px;" readonly class="form-control">
        </div>

        <div class="col-2">
          <form action="prodpos.php" method="post">

            <input type="text" name="pid" value="<?php echo $pid?>" hidden>
            <input type="text" name="quantity1" value="<?php echo $quantity?>" hidden>
            <button type="submit" class="btn btn-light" style="text-decoration:none">
              <span class="fas fa-plus"></span>
            </button>

          </form>
        </div>

      </div>
    </div>

    <div class="product-removal text-center">
      <form action="prodrem.php" method="post">

        <input type="text" name="pid" value="<?php echo $pid?>" hidden>
        <input type="text" name="quantity3" value="<?php echo $quantity?>" hidden>

        <button type="submit" class="btn btn-danger" style="text-decoration:none">
          <span class="fas fa-trash"></span>
        </button>

      </form>
    </div>
    <div class="product-line-price text-center"><?php echo $quantity*$price?></div>
  </div>

  <?php
      }
  ?>

  <div class="totals">
    <!--div class="totals-item">
      <label>Subtotal</label>
      <div class="totals-value" id="cart-subtotal">71.97</div>
    </div>
    <div class="totals-item">
      <label>Tax (5%)</label>
      <div class="totals-value" id="cart-tax">3.60</div>
    </div>
    <div class="totals-item">
      <label>Shipping</label>
      <div class="totals-value" id="cart-shipping">15.00</div>
    </div-->
    <div class="totals-item totals-item-total text-center">
      <label>Grand Total</label>
      <div class="totals-value" id="cart-total"><?php echo $total?></div>
    </div>
  </div>

      <button class="checkout">Checkout</button>
    <?php }else {
      echo "<p class='text-center'>No items in your cart</p>";//"<script>alert('no items');</script>";
    } ?>

</div>

<?php include '../../includes/foot.php'; ?>
