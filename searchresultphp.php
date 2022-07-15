<?php
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        include '_dbconnect.php';
        session_start();
        $answer=$_POST['answer'];
        $uid=$_SESSION['id'];//logged in h
        $qid=$_POST['hidden'];
        echo$qid;
        $sql="select `id` from `questiontable` where `quesid`=$qid;";
        $res=mysqli_query($conn,$sql);
        $row=mysqli_fetch_array($res);
        $x=$row['id'];//jisnh question post kiya h vo
        echo$uid;
        if(isset($_POST['like']))
        {
            $check="select count('id') as cnt from `likedislike` where `userid`=$uid and `quesid`=$qid;";
            $checkout=mysqli_query($conn,$check);
            $result=mysqli_fetch_array($checkout);
            $count=$result['cnt'];
            if($count==0)
            {
                $query="insert into `likedislike`(`userid`,`id`,`quesid`) values($uid,$x,$qid);";
                $output=mysqli_query($conn,$query);
                if($output)
                {
                    header('location:searchresult.php');
                }
            }
            else
            {
                header('location:searchresult.php');
            }
        }
        if(isset($_POST['dislike']))
        {
            $delete="delete from `likedislike` where `userid`=$uid and `quesid`=$qid and `id`=$x;";
            $dislikeout=mysqli_query($conn,$delete);
            if($dislikeout)
            {
                header('location:searchresult.php');
            }
        }
        if(isset($_POST['bookmark']))
        {
            $check1="select count('id') as cnt from `bookmark` where  `userid`=$uid and `quesid`=$qid;";
            $checkout1=mysqli_query($conn,$check1);
            $result1=mysqli_fetch_array($checkout1);
            $count1=$result1['cnt'];
            if($count1==0)
            {
                $query1="insert into `bookmark`(`userid`,`id`,`quesid`) values($uid,$x,$qid);";
                $output1=mysqli_query($conn,$query1);
                if($output1)
                {
                    header('location:searchresult.php');
                }
            }
            else
            {
                header('location:searchresult.php');
            }
        }
        if(isset($_POST['removebookmark']))
        {
            $delete1="delete from `bookmark` where `userid`=$uid and `quesid`=$qid and `id`=$x;";
            $out=mysqli_query($conn,$delete1);
            if($out)
            {
                header('location:searchresult.php');
            }
        }

        if(isset($_POST['addans']))
        {
            $check="select count(*) as cnt from `answertable` where `id`=$uid and `quesid`=$qid;";
            $checkout=mysqli_query($conn,$check);
            $result=mysqli_fetch_array($checkout);
            $count=$result['cnt'];
            if($count==0){
                $query="insert into `answertable`(`id`,`quesid`,`answer`,`postansdate`)values($uid,$qid,'$answer',Now());";
                echo$query;
                $queryoutput=mysqli_query($conn,$query);
                if($queryoutput)
                {
                    header('location:searchresult.php');
                }
            }
            else{
                header('location:searchresult.php');
            }
        }
    }
?>