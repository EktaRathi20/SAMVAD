<?php
    include '_dbconnect.php';
    session_start();
    echo $followerid=$_SESSION['id'];//logged-in user
    echo $id=$_POST['hidden'];
    $usernamesearch="select `username` from `signup` where `id`=$id;";
    $usernamesearchout=mysqli_query($conn,$usernamesearch);
    $usernamesearchout2=mysqli_fetch_array($usernamesearchout);
    $username=$usernamesearchout2['username'];
    $search="SELECT COUNT(*) as cnt FROM `follow` where `id`=$followerid AND `followersid`=$id;";
    $searchout=mysqli_query($conn,$search);
    $searchout2=mysqli_fetch_array($searchout);
    $count=$searchout2['cnt'];
    if(isset($_POST['follow'])){
        if($count>0){
            echo"hi";
            header('location:publicprofile.php');
        }
        else{
            $follow="INSERT INTO `follow`(`id`,`followersid`)VALUES($followerid,$id)";
            echo$follow;
            mysqli_query($conn,$follow);
            header('location:/samvad/publicprofile.php?name='.$username);
        }
    }
    else if(isset($_POST['unfollow'])){
        $unfollow="DELETE FROM `follow` WHERE `id`=$followerid AND `followersid`=$id ;";
        mysqli_query($conn,$unfollow);
        header('location:/samvad/publicprofile.php?name='.$username);
    }
    
?>

