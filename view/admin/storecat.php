<?php
session_start();
include '../../connect.php';
$slno = $_POST['slno'];
$catname = $_POST['catname'];

$uploaddir = '../../static/category/';
$dirname = "/static/category/";

$newname = time() . basename($_FILES['cimg']['name']);

$fileup = $dirname . $newname;
$uploadfile = $uploaddir . $newname;
//echo $_FILES['cimg']['tmp_name'];

if (move_uploaded_file($_FILES['cimg']['tmp_name'], $uploadfile)) {
    //echo "File is valid, and was successfully uploaded.\n";
}
else{
  echo "<script>alert('Check if write permission is available to /static/categories')</script>";
}

$sql = "INSERT INTO `prodcat` (`slno`, `catname`, `cimg`, `updated`) VALUES ('".$slno."', '".$catname."', '".$fileup."', '".date('Y-m-d G:i:s')."')";
//echo $sql
if($conn->query($sql)){
  $_SESSION['success']="Category added successfully";
  //echo "sucess";
  header("refresh:0.0001;index.php");
}
else {
  echo $conn->error;
}

?>
