<?php
  if($_SERVER["REQUEST_METHOD"] == "POST"){
    include '_dbconnect.php';
    $email=$_POST["email"];
    session_start();
    $_SESSION['email']=$email;
  
    $sqid=$_POST["sques"];
    $ans=$_POST["sans"];
  
    $query="SELECT `id`FROM `signup` WHERE `email`='$email'";

    $res = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($res);
    $uid = $row['id'];
    $sql="select count(*) as cnt from `securityans` where id= $uid and sqid='$sqid' and ans='$ans'";
    $result = mysqli_query($conn, $sql);
    $rows = mysqli_fetch_array($result);
    if ($rows['cnt']==1)
    {
      header("location:resetpassword.php");
      exit();
    }
    else{
      echo"<script>alert('details not found please enter valid details');</script>";
      header("location:forgotpassword.php");
      exit();
    }
  }
?>