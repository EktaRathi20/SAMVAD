<?php
    include'_dbconnect.php';
    session_start();
    if($_POST['remove']){
        $uid=$_SESSION['id'];
        $query="delete from `profilephoto` where `id`=$uid;";
        $res=mysqli_query($conn,$query);
        if($res){
            $_SESSION['remove']="Profile Photo Removed successfully!!";
            header('location:useracc.php');
        }
    }


?>