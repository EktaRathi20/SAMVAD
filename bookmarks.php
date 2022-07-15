<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>your profile</title>
        <link rel="stylesheet" href="bookmarkscss.php">
        <script src="https://kit.fontawesome.com/2f267887a2.js"
        crossorigin="anonymous"></script>
    </head>
    <body>
        <?php
            include '_dbconnect.php';
            session_start();
            $uid=$_SESSION['id'];
            $mark1="SELECT * FROM `bookmark` where `userid`=$uid;";
            $markres=mysqli_query($conn,$mark1);
            while($markresult=mysqli_fetch_array($markres))
            {
                $questionid=$markresult['quesid'];
                $book="SELECT * FROM `questiontable` LEFT JOIN `profilephoto` ON questiontable.id=profilephoto.id LEFT JOIN `signup` ON questiontable.id=signup.id where questiontable.quesid=$questionid;";
                $bookres=mysqli_query($conn,$book);
                $row2=mysqli_fetch_array($bookres);
                $username=$row2['username'];
                echo"<div class='m-container' id='mcontainer".$questionid."'>
                        <form action='bookmarksphp.php' method='post'>
                            <div class='s-container'>
                                <div class='post-container'>
                                    <div class='profile-container'>
                                        <div class='profile-img'>";
                                            if($row2['photo'])
                                            {
                                                echo "<img src='upload/".$row2['photo']."' onClick=window.open('/samvad/publicprofile.php?name=".$username."','_parent')>";
                                            }
                                            else
                                            {
                                                echo "<img src='/samvad/profile-img.png' onClick=window.open('/samvad/publicprofile.php?name=".$username."','_parent')>"; 
                                            }
                                    echo"</div>
                                        <div class='profile-name'>
                                            <label>".$row2['name']." (".$row2['username'].")</label>
                                        </div>
                                    </div>
                                    <div class='question-container'>
                                        <input type='hidden' name='hidden' value=".$row2['quesid'].">
                                        <label>".$row2['question']."</label>
                                    </div>
                                    <div class='post-date'>
                                        <label>".$row2['postquesdate']."</label>
                                    </div>
                                    <div class='reaction-container'>
                                        <div class='like' id='a' >";
                                            $qid=$row2['quesid'];
                                            $like="select count(`quesid`) as cnt from `likedislike` where `quesid`= $qid";
                                            $likeoutput=mysqli_query($conn,$like);
                                            $likeoutput1=mysqli_fetch_array($likeoutput);
                                            $likeoutput2=$likeoutput1['cnt'];
                                            echo"<label>$likeoutput2</label>
                                            <input type='submit' value='Like' name='like' >   
                                        </div>
                                        <div class='dislike' id='b' >
                                            <input type='submit' value='Dislike' name='dislike'>
                                        </div>";
                                        $uid=$_SESSION['id'];
                                        $id=$row2['id'];
                                        $qid=$row2['quesid'];
                                        $bookmarkquery="SELECT COUNT(*) as cnt FROM `bookmark` WHERE `userid`=$uid AND `id`=$id AND `quesid`=$qid;";
                                        $bookmarkquery2=mysqli_query($conn,$bookmarkquery);
                                        $bookmarkquery3=mysqli_fetch_array($bookmarkquery2);
                                        $count=$bookmarkquery3['cnt'];
                                        if($count)
                                        {
                                        echo"<div class='removebookmark' id='d' >
                                                <input type='submit' value='Remove Bookmark' name='removebookmark'>
                                            </div> ";
                                        }
                                        else
                                        {
                                        echo"<div class='bookmark' id='c' >
                                                <input type='submit' value='Bookmark' name='bookmark'>
                                            </div>";
                                        }
                                        echo"<div class='comment'>
                                                <input type='button' value='Comment' name='comment' onClick='comment1(".$row2['quesid'].", mcontainer".$row2['quesid'].");'>
                                            </div>
                                    </div>       
                                </div>
                                <div class='comment-container' id='".$row2['quesid']."' style='display:none;'>
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
                                echo"<div class='previously-posted-comment'>
                                        <iframe src='comments.php?questionid=$questionid'></iframe>
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