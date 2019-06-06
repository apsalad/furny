<?php
include '../../connect.php';
include '../../includes/head.php';
$slno = $_POST['slno'];
//echo $slno;
$sql = "select * from prodcat where slno='".$slno."'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
//print_r($row);
?>

<div class="container" style="margin-top:12vh;margin-bottom:5vh;">
  <div class="jumbotron" style="padding-left:20vw;padding-right:20vw;">

    <p class="text-center h2">Edit Category</p>

    <form enctype="multipart/form-data" action="savecat.php" method="POST">

      <input type="hidden" name="MAX_FILE_SIZE" value="9000000" />

      <input type="text" name="slno" value="<?php echo $row['slno']?>" hidden>

      <div class="form-group">
        <label>Category name:</label>
        <input type="text" name="catname" value="<?php echo $row['catname']?>" class="form-control">
      </div>

      <div class="form-group">
        <label>Current Image:</label><br>
        <img src="<?php echo $row['cimg']?>" class="img-thumbnail" height="200" width="200">

        <br><br>
        To change:
        <input type="file" name="cimg">

      </div>

      <div class="text-center">
        <button type="button" class="btn btn-dark" onclick="location='index.php'">Cancel</button>
        <button type="submit" class="btn btn-success">Update</button>
      </div>
    </form>
  </div>
</div>

<?php include '../../includes/foot.php'; ?>
