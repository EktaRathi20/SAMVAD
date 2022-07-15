<?php
    include '_dbconnect.php';
    $statusMsg = '';    
    session_start();
    $uid=$_SESSION['id'];

    $newemail=$_POST['useremail'];
    $newusername=$_POST['username'];
    $newname=$_POST['name'];
    $targetDir = "c:/xampp/htdocs/samvad/upload/";
    $fileName = basename($_FILES["files"]["name"]);
    $_SESSION['filename']=$fileName;
    $targetFilePath = $targetDir . $fileName;
    $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

    if(isset($_POST["submit"]) && !empty($_FILES["files"]["name"]))
    {
        $allowTypes = array('jpg','png','jpeg');
        if(in_array($fileType, $allowTypes))
        {
            if(move_uploaded_file($_FILES["files"]["tmp_name"], $targetFilePath))
            {
                $qry="select `photo` from `profilephoto` where `id`=$uid;";
                $rs =mysqli_query($conn,$qry);
                $fetch = mysqli_fetch_array($rs);
                if($fetch['photo']){
                    $update="UPDATE `profilephoto` SET `photo` = '$fileName' WHERE `id`=$uid";
                    mysqli_query($conn,$update);
                    if($update){
                        $statusMsg = "updated successfully";
                        $_SESSION['updateuserinfo']=$statusMsg;
                        header('location:useracc.php');
                    }
                    else{
                        $statusMsg = "something went wrong, please try again.";
                        $_SESSION['updateuserinfo']=$statusMsg;
                        header('location:useracc.php');
                    }
                }
                else{
                    $userquery="select `username` from signup where `id`=$uid;";
                    $res=mysqli_query($conn,$userquery);
                    $user1=mysqli_fetch_array($res);
                    $user=$user1['username'];
                    $insert="INSERT INTO `profilephoto`(`id`, `username`, `photo`)VALUES ($uid,'$user','$fileName')";
                    echo $insert;
                    mysqli_query($conn,$insert);
    
                    if($insert)
                    {
                        $statusMsg = "The file ".$fileName. " has been uploaded successfully.";
                        $_SESSION['userinfo']=$statusMsg;
                        header('location:useracc.php');
    
                    }
                    else
                    {
                        $statusMsg = "File upload failed, please try again.";
                        $_SESSION['userinfo']=$statusMsg;
                        header('location:useracc.php');
                    } 
                }
                
            }
        }
    }
    
    if(isset($_POST["submit"]) && !empty($newemail)){
        $updateemail="update `signup` set `email`='$newemail' where `id`=$uid";
        mysqli_query($conn,$updateemail);
        if($updateemail){
            $statusMsg = "updated successfully";
        }
        else{
            $statusMsg = "something went wrong, please try again.";
        }
    }

    if(isset($_POST["submit"]) && !empty($newname)){
        $updatename="update `signup` set `name`='$newname' where `id`=$uid";
        mysqli_query($conn,$updatename);
        if($updatename){
            $statusMsg = "updated successfully";
        }
        else{
            $statusMsg = "something went wrong, please try again.";
        }
    }
    if(isset($_POST["submit"]) && !empty($newusername)){
        $updateusername="update `signup` set `username`='$newusername' where `id`=$uid";
        mysqli_query($conn,$updateusername);
        $updateusername2="update `profilephoto` set `username`='$newusername' where `id`=$uid";
        mysqli_query($conn,$updateusername2);
        if($updateusername){
            if($updateusername2){
                $statusMsg = "updated successfully";
            }
        }
        else{
            $statusMsg = "something went wrong, please try again.";
        }
    }

    $_SESSION['updateuserinfo']=$statusMsg;
    header('location:useracc.php');
?>