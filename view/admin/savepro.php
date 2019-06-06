<?php
session_start();
include '../../connect.php';

$pid = $_POST['pid'];
$pname =  $_POST['pname'];
$pcat =  $_POST['pcat'];
$pdes =  $_POST['pdes'];
$pprice =  $_POST['pprice'];
$pstock =  $_POST['pstock'];

$sql = "update product set pname='".$pname."',pcat='".$pcat."',pdes='".$pdes."',pprice='".$pprice."',pstock='".$pstock."' where pid='".$pid."'";
if($conn->query($sql)){
  $_SESSION['success']="Product updated successfully!";
  echo "success";
}
else {
  echo $conn->error;
}

if(basename($_FILES['pimg']['name'])===""){
  header("refresh:0.0001;index.php");
}
else{
$dirup ="../..";

$sql = "select pimg from product where pid='".$pid."'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

unlink($dirup.$row['pimg']);

$uploaddir = '../../static/product/';
$dirname = "/static/product/";

$newname = time() . basename($_FILES['pimg']['name']);

$fileup = $dirname . $newname;
$uploadfile = $uploaddir . $newname;
//echo $_FILES['cimg']['tmp_name'];

if (move_uploaded_file($_FILES['pimg']['tmp_name'], $uploadfile)) {
    echo "File is valid, and was successfully uploaded.\n";
}
else{
  echo "<script>alert('Check if write permission is available to /static/product')</script>";
}

$sql = "update product set pimg='".$fileup."' where pid='".$pid."'";
if($conn->query($sql)){
  echo "success img";
  //header("refresh:0.0001;index.php");
}
else {
  echo $conn->error;
}
}
?>
