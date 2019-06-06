 <?php
  include("../../connect.php");
  session_unset();
  session_start();
  $username=$_POST['email'];
  $password = $_POST['password'];
  $count = 0;

  //echo $username." ".$password."<br />";

  $sql = "select * from login";
  //echo $sql;

  $result = $conn->query($sql);
  echo $conn->error;
  //print_r($result);

  $flag=1;

  if ($result->num_rows > 0) {
    //echo "1";
    while($row = $result->fetch_assoc()) {
        if($username === $row["email"] && $password === $row["password"]){
          //echo "match found";
          $_SESSION['name']=$row["name"];
          $_SESSION['email']=$row["email"];
          $_SESSION['address']=$row["address"];
          $_SESSION['phone']=$row["phone"];
          $_SESSION['admin']=$row["admin"];
          //echo $_SESSION['name'];
          header("refresh:0.0001 ; url='/index.php'");
          $flag=0;
          break;
        }

    }
  }
  else {
    echo "0 results";
  }
  if($flag!=0){
    echo '<script type="text/javascript"> window.alert("Username/Password do not match");</script>';
    header("refresh:0.0001 ; url=login.php");
  }
  ?>
