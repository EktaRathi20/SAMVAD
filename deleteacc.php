<?php
include'_dbconnect.php';
session_start();
$id=$_SESSION['id'];
$answertable="DELETE FROM `answertable` WHERE `id`=$id;";
$res1=mysqli_query($conn,$answertable);
$bookmark="DELETE FROM `bookmark` WHERE `id`=$id;";
$res2=mysqli_query($conn,$bookmark);
$contactus="DELETE FROM `contactus` WHERE `id`=$id;";
$res3=mysqli_query($conn,$contactus);
$follow="DELETE FROM `follow` WHERE `id`=$id or `followersid`=$id;";
$res4=mysqli_query($conn,$follow);
$like="DELETE FROM `likedislike` WHERE `userid`=$id or `id`=$id;";
$res5=mysqli_query($conn,$like);
$photo="DELETE FROM `profilephoto` WHERE `id`=$id;";
$res5=mysqli_query($conn,$photo);
$questiontable="DELETE FROM `questiontable` WHERE `id`=$id;";
$res6=mysqli_query($conn,$questiontable);
$securityans="DELETE FROM `securityans` WHERE `id`=$id;";
$res7=mysqli_query($conn,$securityans);
$signup="DELETE FROM `signup` WHERE `id`=$id;";
$res8=mysqli_query($conn,$signup);
if($res1 or $res2 or $res3 or $res4 or $res5 or $res6 or $res7 or $res8)
{
    $_SESSION['delete']="Account deleted successfully!";
    header('location:page1.php');
}
else{
    $_SESSION['delete']="Problem in deleting account, please try again later!";
    header('location:page1.php');
}
?>