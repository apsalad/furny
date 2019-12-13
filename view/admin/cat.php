<div class="jumbotron">
  <h4 class="text-monospace">Product Categories</h4><br>
  <table class="table table-borderless table-hover">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Img</th>
        <th scope="col">Edit</th>
      </tr>
    </thead>
    <tbody>
    <?php
      $sql = "select * from prodcat";
      $result = $conn->query($sql);

      if($result->num_rows > 0){
        while ($row = $result->fetch_assoc()) {
    ?>
      <tr>
        <form action="editcat.php" method="post">
          <th scope="row">
            <?php echo $row['slno']?>
            <input type="text" name="slno" value="<?php echo $row['slno'];?>" hidden>
          </th>
          <td>
            <?php echo $row['catname'];?>
          </td>
          <td>
            <img src="<?php echo $row['cimg'];?>" alt="" height="50" width="100">
          </td>
          <td>
            <button type="submit" class="btn btn-warning">
              <span class="fa fa-pencil-alt"></span>
            </button>
          </td>
        </form>
      </tr>
    <?php
        }
      }else{
        echo "No records available";
      }
    ?>
    </tbody>
  </table>
</div>
