<div class="jumbotron">
  <h4 class="text-monospace">User Details</h4><br>
  <table class="table table-borderless table-hover">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Address</th>
        <th scope="col">Mobile</th>
        <th scope="col">Admin</th>
      </tr>
    </thead>
    <tbody>
    <?php
      $sql = "select * from login";
      $result = $conn->query($sql);
      $i=1;
      if($result->num_rows > 0){
        while ($row = $result->fetch_assoc()) {
    ?>
      <tr>
        <form action="editcat.php" method="post">
          <th scope="row">
            <?php echo $i;?>
            <input type="text" name="slno" value="<?php echo $row['sno'];?>" hidden>
          </th>
          <td>
            <?php echo $row['name'];?>
          </td>
          <td>
            <?php echo $row['email'];?>
          </td>
          <td>
            <?php echo $row['address'];?>
          </td>
          <td>
            <?php echo $row['phone'];?>
          </td>
          <td>
            <?php if ($row['admin']==="0") {
                echo "<button type=\"submit\" class=\"btn btn-warning\" disabled>Make admin</button>";
            }else {
              echo "<button type=\"submit\" class=\"btn btn-danger\" disabled>Remove admin</button>";
            }
            ?>

          </td>
        </form>
      </tr>
    <?php
      $i++;
          }
      }else{
        echo "No records available";
      }
    ?>
    </tbody>
  </table>
</div>
