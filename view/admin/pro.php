<div class="jumbotron">
  <h4 class="text-monospace">Products</h4><br>
  <table class="table table-borderless table-hover">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Category</th>
        <th scope="col">Price</th>
        <th scope="col">Stock</th>
        <th scope="col">Img</th>
        <th scope="col">Edit</th>
      </tr>
    </thead>
    <tbody>
    <?php
      $sql = "select * from product";
      $result = $conn->query($sql);

      if($result->num_rows > 0){
        while ($row = $result->fetch_assoc()) {
    ?>
      <tr>
        <form action="editpro.php" method="post">
          <th scope="row">
            <?php echo $row['pid']?>
            <input type="text" name="pid" value="<?php echo $row['pid'];?>" hidden>
          </th>
          <td>
            <?php echo $row['pname'];?>
          </td>
          <td>
            <?php echo $row['pcat'];?>
          </td>
          <td>
            <?php echo $row['pprice'];?>
          </td>
          <td>
            <?php echo $row['pstock'];?>
          </td>
          <td>
            <img src="<?php echo $row['pimg'];?>" alt="" height="50" width="100">
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
