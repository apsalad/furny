<div class="jumbotron">
  <h4 class="text-monospace">Add Product </h4><br>

  <?php
  $sql = "select * from product";
  $result = $conn->query($sql);
  $count = $result->num_rows;
  ?>

  <div class="container">
    <form enctype="multipart/form-data" action="storepro.php" method="POST" >

      <input type="hidden" name="MAX_FILE_SIZE" value="9000000" />

      <input type="text" name="pid" value="<?php echo $count+1;?>" hidden>

      <div class="form-group">
        <label>Enter Product name:</label>
        <input type="text" name="pname" class="form-control" value="" required/>
      </div>

      <div class="form-group">
        <label>Enter Product category:</label>
        <select class="custom-select" name="pcat" required>
          <option value=""></option>
          <?php
            $sql = "select catname from prodcat";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
              while ($row = $result->fetch_assoc()) {
          ?>
            <option value="<?php echo $row['catname']?>"><?php echo $row['catname']?></option>
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
        <textarea name="pdes" rows="3" class="form-control"></textarea>
      </div>

      <div class="form-group">
        <label>Enter Product Price:</label>
        <input type="text" name="pprice" class="form-control">
      </div>

      <div class="form-group">
        <label>Enter Product Stock:</label>
        <input type="text" name="pstock" class="form-control">
      </div>

      <div class="form-group">
        <label>Image for Product:</label>
        <input type="file" name="pimg" class="form-control" style="padding-bottom:15px;">
      </div>
      <p class="text-center">
        <button type="submit" name="button" class="btn btn-success">store</button>
      </p>
    </form>
  </div>
</div>
