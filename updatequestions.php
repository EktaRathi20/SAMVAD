<?php
    include '_dbconnect.php';
    session_start();
    $question=$_POST['ques'];
    $hidden=$_POST['hidden'];
    if(isset($_POST['update'])){
        $query="UPDATE `questiontable` SET `question`='$question' WHERE `quesid`=$hidden;";
        $res=mysqli_query($conn,$query);
        
        $_SESSION['updateques']='updated succesfully !!';
        header('location:questions.php');
    }
    if(isset($_POST['delete']))
    {
        $query1 = "delete from `answertable` where `quesid`=$hidden;";
        $res1=mysqli_query($conn,$query1);

        $query2 = "delete from `likedislike` where `quesid`=$hidden;";
        $res2=mysqli_query($conn,$query2);

        $query3 = "delete from `bookmark` where `quesid`=$hidden;";
        $res3=mysqli_query($conn,$query3);



        if($res1 or $res2 or $res3){
            $qry="DELETE FROM `questiontable` WHERE `quesid`=$hidden;";
            $rs=mysqli_query($conn,$qry);
            $_SESSION['deleteques']='deleted successfully !!';
            header('location:questions.php');
        }
        
    }
   
    
?>