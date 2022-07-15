<?php
    include '_dbconnect.php';
    if(isset($_POST['deleteans']))
    {
        session_start();
        $uid=$_SESSION['id'];
        $hidden=$_POST['hidden'];
        $query="delete from `answertable` where `quesid`=$hidden AND `id`=$uid;";
        $res=mysqli_query($conn,$query);
        header('location:answers.php');
    }    
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>your profile</title>
        <link rel="stylesheet" href="answerscss.php">
        <script src="https://kit.fontawesome.com/2f267887a2.js"
        crossorigin="anonymous"></script>
    </head>
    <body>
        <?php
            include '_dbconnect.php';
            session_start();
            $uid=$_SESSION['id'];
            $mainans="SELECT * FROM `questiontable` CROSS JOIN `answertable`  ON questiontable.quesid=answertable.quesid LEFT JOIN `profilephoto`on questiontable.id = profilephoto.id LEFT JOIN`signup`on questiontable.id = signup.id WHERE answertable.id=$uid;";
            $mainansres=mysqli_query($conn,$mainans);
            while($row3=mysqli_fetch_array($mainansres))
            {   
            echo"<form action='answers.php' method='post'>
                    <div class='question-answer-container'>
                        <div class='profile-container'>
                            <div class='profile-img'>";
                                if($row3['photo'])
                                {
                                    $id=$row3['id'];
                                    $sql1="SELECT `username` FROM `profilephoto` where `id`=$id";
                                    $user = mysqli_query($conn,$sql1 );
                                    $element1 = mysqli_fetch_array($user);
                                    $username=$element1['username'];
                                    echo "<img src='upload/".$row3['photo']."' onClick=window.open('/samvad/publicprofile.php?name=".$username."','_parent')>";
                                }
                                else
                                {
                                    $id=$row3['id'];
                                    $sql1="SELECT `username` FROM `signup` where `id`=$id";
                                    $user = mysqli_query($conn,$sql1 );
                                    $element1 = mysqli_fetch_array($user);
                                    $username=$element1['username'];
                                    echo "<img src='/samvad/profile-img.png' onClick=window.open('/samvad/publicprofile.php?name=$username','_parent')>"; 
                                }
                        echo"</div>
                            <div class='profile-name'>
                                <label>".$row3['name']." (".$row3['username'].")</label>
                            </div>
                        </div>
                        
                        <div class='ques'>";
                            $quesid=$row3['quesid'];
                            echo"<input type='hidden' name='hidden' value='$quesid'>
                            <label >QUESTION:<br>".$row3['question']."</label>
                        </div>
                        <div class='ques-date'>
                            <label>".$row3['postquesdate']."</label>
                        </div>
                        <div class='ans'>
                            <label>ANSWER:<br>".$row3['answer']."</label>
                        </div>
                        <div class='ans-date'>
                            <label>".$row3['postansdate']."</label>
                        </div>
                        <div class='settings'>
                            <div class='delete'>
                                <input type='submit' name='deleteans' value='Delete Answer'>
                            </div>
                        </div>
                    </div>
                </form>";
            }
        ?>
    </body>
</html>