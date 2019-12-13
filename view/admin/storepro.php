<?php
session_start();
include '../../connect.php';
$pid = $_POST['pid'];
$pname =  $_POST['pname'];
$pcat =  $_POST['pcat'];
$pdes =  $_POST['pdes'];
$pprice =  $_POST['pprice'];
$pstock =  $_POST['pstock'];

$uploaddir = '../../static/product/';
$dirname = "/static/product/";

$newname = time() . basename($_FILES['pimg']['name']);

$fileup = $dirname . $newname;
$uploadfile = $uploaddir . $newname;
//echo $_FILES['cimg']['tmp_name'];

if (move_uploaded_file($_FILES['pimg']['tmp_name'], $uploadfile)) {
    //echo "File is valid, and was successfully uploaded.\n";
}
else{
  echo "<script>alert('Check if write permission is available to /static/categories')</script>";
}

$sql = "INSERT INTO `product` (`pid`, `pname`, `pcat`, `pdes`, `pprice`, `pimg`, `prating`, `pstock`, `pbuyprice`, `pdisc`, `pcolour`, `updated_at`) VALUES ('".$pid."', '".$pname."', '".$pcat."', '".$pdes."', '".$pprice."', '".$fileup."', NULL, '".$pstock."', NULL, NULL, NULL, '".date('Y-m-d G:i:s')."')";
//echo $sql;
if($conn->query($sql)){
  $_SESSION['success']="Product added successfully";
  //echo "sucess";
  //header("refresh:0.0001;index.php");
}
else {
  echo "<script>alert('".$conn->error."')</script>";
}

$sql = "update prodcat set updated='".date('Y-m-d G:i:s')."' where catname='".$pcat."'";
if ($conn->query($sql)) {
  header("refresh:0.0001;index.php");
}else {
  echo "<script>alert('".$conn->error."')</script>";
}
?>
