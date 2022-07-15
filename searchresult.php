<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="page2css.php">
</head>
<body>
    <div class="main-nav-container">
        <div class="nav-container">
            <div class="nav-container-img">
                <img src="/samvad/SAMVAD.jpg"onclick="window.open('/samvad/page2.php','_parent')"  style="cursor: pointer;"/>
            </div>
        </div>
    </div>
    <?php
    include '_dbconnect.php';
        session_start();
        // $quesid=$_SESSION['searchquestionid'];
        $search = $_SESSION['searchquestion'];
        $sql="SELECT * FROM `questiontable` LEFT JOIN `profilephoto`on questiontable.id = profilephoto.id LEFT JOIN`signup`on questiontable.id = signup.id where `question`LIKE '%$search%';";
                $result1=mysqli_query($conn,$sql);
                while($row=mysqli_fetch_array($result1))
                {
                   $questionid=$row['quesid'];
                   $height="select count(answer) as ans from `answertable` where `quesid`=$questionid;";
                   $heightres=mysqli_query($conn,$height);
                  
                   $heightresult=mysqli_fetch_array($heightres);
                   
                   $heightcontainer=$heightresult['ans'];
                   echo"<div class='m-container' >
                            <form action='searchresultphp.php' method='post'>
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
                                                <label>".$row['name']."</label>
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
                                                echo"<div class='bookmark' id='c' >
                                                        <input type='submit' value='Bookmark' name='bookmark'>
                                                    </div>";
                                                   
                                            }
                                            echo"<div class='comment'>
                                                    <input type='button' value='Comment' name='comment' onClick='comment1(".$row['quesid'].");'>
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
                                                <input type='text' placeholder='Add Your Answer' name='answer'>
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
</body>
</html>
<script>
    function comment1(y)
    {
        console.log(y);
        var e =  document.getElementById(y);
        console.log(e);
        if(e.style.display === 'none')
        {
            e.style.display = 'grid';
        }
        else{
            e.style.display = 'none';
        }
    }
</script>