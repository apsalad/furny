
<div class="jumbotron">
  <h4 class="text-monospace">Add Product Category</h4><br>
  <?php
  $sql = "select * from prodcat";
  $result = $conn->query($sql);
  $count = $result->num_rows;
  ?>

  <div class="container" style="padding-left:5vw;padding-right:5vw;">
    <form enctype="multipart/form-data" action="storecat.php" method="POST" >
      <input type="hidden" name="MAX_FILE_SIZE" value="9000000" />
      <input type="text" name="slno" value="<?php echo $count+1;?>" hidden>
      <div class="form-group">
        <label>Enter Category name:</label>
        <input type="text" name="catname" class="form-control" value="">
      </div>

      <div class="form-group">
        <label>Image for Category:</label>
        <input type="file" name="cimg" class="form-control" style="padding-bottom:15px;">
      </div>
      <p class="text-center">
        <button type="submit" name="button" class="btn btn-success">store</button>
      </p>
    </form>
  </div>
</div>
