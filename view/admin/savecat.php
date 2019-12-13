<?php
session_start();
include '../../connect.php';

$slno = $_POST['slno'];
$catname = $_POST['catname'];

$sql = "update prodcat set catname='".$catname."' where slno='".$slno."' ";
if($conn->query($sql)){
  $_SESSION['success']="Category updated successfully!";
  echo "success";
}
else {
  echo $conn->error;
}

if(basename($_FILES['cimg']['name'])===""){
  header("refresh:0.0001;index.php");
}
else{
$dirup ="../..";

$sql = "select cimg from prodcat where slno='".$slno."'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

unlink($dirup.$row['cimg']);

$uploaddir = '../../static/category/';
$dirname = "/static/category/";

$newname = time() . basename($_FILES['cimg']['name']);

$fileup = $dirname . $newname;
$uploadfile = $uploaddir . $newname;
//echo $_FILES['cimg']['tmp_name'];

if (move_uploaded_file($_FILES['cimg']['tmp_name'], $uploadfile)) {
    echo "File is valid, and was successfully uploaded.\n";
}
else{
  echo "<script>alert('Check if write permission is available to /static/categories')</script>";
}

$sql = "update prodcat set cimg='".$fileup."' where slno='".$slno."'";
if($conn->query($sql)){
  echo "success img";
  header("refresh:0.0001;index.php");
}
else {
  echo $conn->error;
}
}
?>
