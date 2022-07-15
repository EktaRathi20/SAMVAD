<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="commentscss.php">
</head>
<body>
<?php
        include '_dbconnect.php';
        $qid=$_GET['questionid'];
        $sql1="SELECT * FROM `answertable` LEFT JOIN `profilephoto`on answertable.id = profilephoto.id LEFT JOIN`signup`on answertable.id = signup.id where answertable.quesid = $qid;";
        $result2=mysqli_query($conn,$sql1);
        while($rows=mysqli_fetch_array($result2))
        {
            $username = $rows['username'];
            echo
                "<div class='comment-user-profile'>
                    <div class='comment-user-profile-photo'>";
                    if($rows['photo'])
                    {
                        echo"<img src='/samvad/upload/".$rows['photo']."'  onClick=window.open('/samvad/publicprofile.php?name=".$username."','_top')>";
                    }
                    else{
                        echo"<img src='/samvad/upload/profile-img.png' onClick=window.open('/samvad/publicprofile.php?name=".$username."','_top')>";
                    }
                    echo"</div>
                    <div class='comment-user-profile-name'>
                        <label>".$rows['username']."</label>
                    </div>
                </div>
                <div class='answer-container'>
                    <label>".$rows['answer']."</label>
                </div>
                <div class='post-ans-date'>
                    <label>".$rows['postansdate']."</label>
                </div>";
        }
    ?>
</body>
</html>
   