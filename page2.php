<?php
    session_start();
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        include '_dbconnect.php';
        $search=$_POST['search'];
        if( !empty($search) and isset($_POST['searchbtn']))
        {
            $select="SELECT * FROM `questiontable` LEFT JOIN `signup` on questiontable.id=signup.id where `username` LIKE '%$search%';";
            $query=mysqli_query($conn,$select);
            $result = mysqli_fetch_array($query);
            if($result)
            {
                $_SESSION['searchuser']=$search;
                header('location:searchuser.php');
            }
            else
            {
                $select2="SELECT `quesid` from `questiontable` where `question` LIKE '%$search%';";
                $query2=mysqli_query($conn,$select2); 
                $searchresult=mysqli_fetch_array($query2);
                if($searchresult){
                    // $_SESSION['searchquestionid']=$searchresult['quesid'];
                    $_SESSION['searchquestion']=$search;
                    header('location:searchresult.php');  
                }
                else
                {
                    echo"<script>alert('No search result found!');</script>";
                }
            }
        }
        else
        {
            echo"<script>alert('please first search!');</script>";
        }
            // $array = array();
            // while($row = mysqli_fetch_assoc($query))
            // {
            //     $array[] = $row;
            // }
            // for ($i=0; $i <count($array) ; $i++)
            // { 
            //     if($search == $array[$i]['username'])
            //     {
            //         $x=$search;
            //         $qry="select `id` from `signup` where `username`='$x';";
            //         $res1=mysqli_query($conn,$qry);
            //         $row1=mysqli_fetch_array($res1);
            //         $uid=$row1['id'];
            //         header('location:/samvad/publicprofile.php?name='.$search);
            //     }
            // }
            
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <script src="https://kit.fontawesome.com/2f267887a2.js"
        crossorigin="anonymous"></script>
        <link rel="stylesheet" href="page2css.php">
    </head>
    <body>
        <div class="container">
            <?php
                if(isset($_SESSION['addques']))
                {
                    echo $_SESSION['addques'];
                    unset($_SESSION['addques']);
                }
            ?>
            <div class="main-nav-container">
                <div class="nav-container">
                    <div class="nav-container-img">
                        <img src="/samvad/SAMVAD.jpg">
                    </div>
                    <form action="page2.php" method="post">
                        <div class="nav-container-search">
                            <div class="nav-container-search-input">
                                <i class="fa-solid fa-magnifying-glass"></i>
                                <input type="search" placeholder="Search Samvad" name="search" autocomplete="off">
                            </div>
                            <div class="nav-container-search-btn">
                                <input type="submit" value="Search" name="searchbtn">
                            </div>
                        </div>
                    </form>   
                    <div class="nav-container-addques">
                        <input type="submit" value="Add Question" onClick="window.open('/samvad/addques.php','_parent');">
                    </div>
                    <div class="nav-container-user">
                        <?php
                            include '_dbconnect.php';
                            if(isset($_SESSION['id']))
                            {
                                $uid=$_SESSION['id'];
                                $query="SELECT COUNT(`id`) as cnt FROM `profilephoto` WHERE `id`=$uid;";
                                $exe = mysqli_query($conn,$query);
                                $output = mysqli_fetch_array($exe);
                                if($output['cnt']==1)
                                {
                                    $sql="SELECT `photo` FROM `profilephoto` where `id`=$uid";
                                    $img = mysqli_query($conn,$sql );
                                    $element = mysqli_fetch_array($img);
                                    $photo = $element['photo'];
                                    echo "<img src='upload/".$photo."' onClick=window.open('/samvad/useracc.php','_parent')>"; 
                                }
                                else
                                {
                                    echo "<img src='/samvad/profile-img.png' onClick=window.open('/samvad/useracc.php','_parent')>"; 
                                }
                            }
                        ?>
                    </div>
                    <div class="nav-container-logout">
                        <form action="logout.php" method="post">
                            <input type="submit" value="Logout" name="logout">
                        </form>
                        
                    </div>
                </div>
            </div>
            <div class="blank-container"></div>
            <?php
                include '_dbconnect.php';
                $sql="SELECT * FROM `questiontable` LEFT JOIN `profilephoto`on questiontable.id = profilephoto.id LEFT JOIN`signup`on questiontable.id = signup.id ORDER BY `postquesdate` desc;";
                $result1=mysqli_query($conn,$sql);
                while($row=mysqli_fetch_array($result1))
                {
                    echo"<div class='m-container' id='mcontainer".$row['quesid']."'>
                            <form action='page2php.php' method='post'>
                                <div class='s-container'>
                                    <div class='post-container'>
                                        <div class='profile-container'>
                                            <div class='profile-img'>";
                                                if($row['photo'])
                                                {
                                                    $id=$row['id'];
                                                    $sql1="SELECT `username` FROM `profilephoto` where `id`=$id";
                                                    $user = mysqli_query($conn,$sql1 );
                                                    $element1 = mysqli_fetch_array($user);
                                                    $username=$element1['username'];
                                                    echo "<img src='upload/".$row['photo']."' onClick=window.open('/samvad/publicprofile.php?name=".$username."','_parent')>";
                                                }
                                                else
                                                {
                                                    $id=$row['id'];
                                                    $sql1="SELECT `username` FROM `signup` where `id`=$id";
                                                    $user = mysqli_query($conn,$sql1 );
                                                    $element1 = mysqli_fetch_array($user);
                                                    $username=$element1['username'];
                                                    echo "<img src='/samvad/profile-img.png' onClick=window.open('/samvad/publicprofile.php?name=$username','_parent')>"; 
                                                }
                                       echo"</div>
                                            <div class='profile-name'>
                                                <label>".$row['name']." (".$row['username'].")</label>
                                            </div>
                                        </div>
                                        <div class='question-container'>
                                            <input type='hidden' name='hidden' value=".$row['quesid'].">
                                            <label>".$row['question']."</label>
                                        </div>
                                        <div class='post-date'>
                                            <label>".$row['postquesdate']."</label>
                                        </div>
                                        <div class='reaction-container'>
                                            <div class='like' id='a' >";
                                                $qid=$row['quesid'];
                                                $like="select count(`quesid`) as cnt from `likedislike` where `quesid`= $qid";
                                                $likeoutput=mysqli_query($conn,$like);
                                                $likeoutput1=mysqli_fetch_array($likeoutput);
                                                $likeoutput2=$likeoutput1['cnt'];
                                               echo" <label>$likeoutput2</label>
                                                <input type='submit' value='Like' name='like' >   
                                            </div>
                                            <div class='dislike' id='b' >
                                                <input type='submit' value='Dislike' name='dislike'>
                                            </div>";
                                            $uid=$_SESSION['id'];
                                            $id=$row['id'];
                                            $qid=$row['quesid'];
                                            $bookmarkquery="SELECT COUNT(*) as cnt FROM `bookmark` WHERE `userid`=$uid AND `id`=$id AND `quesid`=$qid;";
                                            $bookmarkquery2=mysqli_query($conn,$bookmarkquery);
                                            $bookmarkquery3=mysqli_fetch_array($bookmarkquery2);
                                            $count=$bookmarkquery3['cnt'];
                                            if($count){
                                                echo"<div class='removebookmark' id='d' >
                                                <input type='submit' value='Remove Bookmark' name='removebookmark'>
                                            </div> ";
                                            }
                                            else{
                                                echo" <div class='bookmark' id='c' >
                                                <input type='submit' value='Bookmark' name='bookmark'>
                                            </div>";
                                            }
                                            
                                            echo"<div class='comment'>
                                                <input type='button' value='Comment' name='comment' onClick='comment1(".$row['quesid'].", mcontainer".$row['quesid'].");'>";
                                                $qid=$row['quesid'];
                                                $x="select count(answer) as cnt from `answertable` where `quesid`=$qid;";
                                                $xres=mysqli_query($conn,$x);
                                                $count=mysqli_fetch_array($xres);
                                                $comment=$count['cnt'];
                                                echo"<label>&nbsp;$comment</label>    
                                            </div>
                                        </div>
                                    </div>
                                    <div class='comment-container' id='".$row['quesid']."' style='display:none;'>
                                        <div class='add-comment-container'>
                                            <div class='logged-in-user-img'>";
                                                if(isset($_SESSION['id']))
                                                {
                                                    $uid=$_SESSION['id'];
                                                    $query="SELECT COUNT(`id`) as cnt FROM `profilephoto` WHERE `id`=$uid;";
                                                    $exe = mysqli_query($conn,$query);
                                                    $output = mysqli_fetch_array($exe);
                                                    if($output['cnt']==1)
                                                    {
                                                        $query2="SELECT `photo` FROM `profilephoto` where `id`=$uid";
                                                        $img = mysqli_query($conn,$query2 );
                                                        $element = mysqli_fetch_array($img);
                                                        $photo = $element['photo'];
                                                        echo "<img src='upload/".$photo."' onClick=window.open('/samvad/useracc.php','_parent')>"; 
                                                    }
                                                    else
                                                    {
                                                        echo "<img src='/samvad/profile-img.png' onClick=window.open('/samvad/useracc.php','_parent')>"; 
                                                    }
                                                }                                                                   
                                       echo"</div>
                                            <div class='logged-in-user-comment'>
                                                <input type='text' placeholder='Add Your Answer' name='answer' autocomplete='off'>
                                            </div> 
                                            <div class='logged-in-user-add-comment-btn'>
                                                <input type='submit' name='addans' value='Add Answer'>
                                            </div>             
                                        </div>";
                                        $quesid=$row['quesid'];
                                        echo"<div class='previously-posted-comment'>
                                                <iframe src='comments.php?questionid=$quesid'></iframe>
                                            </div>
                                    </div>
                                </div>
                            </form>
                        </div>";
}
            ?>
            <div class="footer-container">
                <div class="footer">
                    <ul>
                        <li><a href="aboutus.php">About</a></li>
                        <li><a href="contactus.php">Contact</a></li>
                        <li><a href="terms.php">Terms</a></li>
                        <li>Samvad@2022</li>
                    </ul>
                </div>
            </div>
        </div>
    </body>
</html>
<script>
    function comment1(x,y)
    {
        var e =  document.getElementById(x);
        
        if(e.style.display === 'none')
        {
            e.style.display = 'grid';
            
            y.style.height= 500+'px';
        }
        else{
            y.style.height= 250+'px';
            e.style.display = 'none';
        }
    }
</script>                