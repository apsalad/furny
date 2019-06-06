<?php
  include "../../connect.php";
  session_start();
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $password = $_POST['password'];

  $sql="insert into login(name,email,password,phone) values('".$name."' ,'".$email."' ,'".$password."','".$phone."')";
  //echo $sql;

  if($conn->query($sql)){
    $_SESSION['success']="User added success";
    //echo $_SESSION['success'];
    header("Location: login.php");
  }
  else{
  echo  $conn->error;
  }
?>
