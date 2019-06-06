<?php
include '../../connect.php';
include '../../includes/head.php';
?>
<div class="container" style="margin-top:12vh;margin-bottom:5vh;">
<div class="jumbotron" style="padding-left:20vw;padding-right:20vw;">
  <h4 class="text-monospace">Edit Product </h4><br>

  <?php

  $pid = $_POST['pid'];
  $sql = "select * from product where pid='".$pid."'";
  $result = $conn->query($sql);
  $row = $result->fetch_assoc();
  ?>

  <div class="container">
    <form enctype="multipart/form-data" action="savepro.php" method="POST" >

      <input type="hidden" name="MAX_FILE_SIZE" value="9000000" />

      <input type="text" name="pid" value="<?php echo $row['pid']?>" hidden>

      <div class="form-group">
        <label>Enter Product name:</label>
        <input type="text" name="pname" class="form-control" value="<?php echo $row['pname'];?>" required/>
      </div>

      <div class="form-group">
        <label>Enter Product category:</label>
        <select class="custom-select" name="pcat" required>
          <option value="<?php echo $row['pcat']?>" selected><?php echo $row['pcat'];?></option>
          <?php
            $sql1 = "select catname from prodcat";
            $result1 = $conn->query($sql);
            if ($result->num_rows > 0) {
              while ($row1 = $result->fetch_assoc()) {
          ?>
            <option value="<?php echo $row1['catname']?>"><?php echo $row1['catname'];?></option>
          <?php
              }
            }else {
              echo "<option value=''>First create an category</option>";
            }
          ?>
        </select>
      </div>

      <div class="form-group">
        <label>Enter Product Description:</label>
        <textarea name="pdes" rows="3" class="form-control"><?php echo $row['pdes']?></textarea>
      </div>

      <div class="form-group">
        <label>Enter Product Price:</label>
        <input type="text" name="pprice" class="form-control" value="<?php echo $row['pprice']?>">
      </div>

      <div class="form-group">
        <label>Enter Product Stock:</label>
        <input type="text" name="pstock" class="form-control" value="<?php echo $row['pstock']?>">
      </div>

      <br>
      <img src="<?php echo $row['pimg']?>" alt="" height="300" width="500">
      <br>

      <div class="form-group">
        <label>Image for Product:</label>
        <input type="file" name="pimg" class="form-control" style="padding-bottom:15px;">
      </div>
      <p class="text-center">
        <button type="button" name="" class="btn btn-dark" onclick="location='index.php'">Cancel</button>
        <button type="submit" name="button" class="btn btn-success">Update</button>
      </p>
    </form>
  </div>
</div>
</div>
<?php include '../../includes/foot.php';?>
