<?php
include '../../connect.php';
include '../../includes/head.php';
include '../../includes/nav.php';

if(isset($_POST['pid'])){
  $pid=$_POST['pid'];
}

$i=0;
$sql = "select * from product where pid='".$pid."'";
$result = $conn->query($sql);
$row=$result->fetch_assoc();
?>

<div class="container" style="margin-top:12vh;">
  <div class="row">
    <div class="col-lg-6 col-md-6 col-sm-12">
        <img src="<?php echo $row['pimg']?>" alt="<?php echo $row['pname']?>" style="width:100%" height="300px">
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12" style="padding-left:20px;">
      <h1 ><?php echo $row['pname']?></h1>
      <p class="price">Rs.<?php echo $row['pprice']?></p>

      <div class="row">

        <div class="col-6">
          <div class="form-group">
              <label>Quantity:</label>
              <form action="addcart.php" method="post">
                <input type="text" name="pid" value="<?php echo $row['pid']?>" hidden>
                <input type="text" name="quantity" class="form-control" value="1"><br>
                <button type="submit" class="btn btn-success">Add to Cart</button>
              </form>
          </div>
        </div>

        <div class="col-6">
          <div class="form-group">
            <label>Stock:</label>
            <input type="text" name="pstock" value="<?php echo $row['pstock']?>" class="form-control" readonly>
          </div>
        </div>

      </div>



      <hr>
      <span>User Rating</span>
      <span class="fa fa-star" style="color:gold"></span>
      <p> &nbsp; <?php echo $row['prating']?></p>
      <hr style="border:0.8px solid #101010">
    </div>
  </div>
  <p><?php echo $row['pdes']?></p>
</div>

<?php include '../../includes/foot.php'; ?>
