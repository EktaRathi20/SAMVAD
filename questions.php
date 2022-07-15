<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>your profile</title>
        <link rel="stylesheet" href="questionscss.php">
        <script src="https://kit.fontawesome.com/2f267887a2.js"
        crossorigin="anonymous"></script>
    </head>
    <body>
            <?php
                session_start();
                if(isset( $_SESSION['updateques'])){
                    $x= $_SESSION['updateques'];
                    echo"<script>alert('$x');</script>";
                    unset( $_SESSION['updateques']);
                }
                if(isset($_SESSION['deleteques'])){
                    $x=$_SESSION['deleteques'];
                    echo"<script>alert('$x');</script>";
                    unset($_SESSION['deleteques']);
                }
                include '_dbconnect.php';
                $uid=$_SESSION['id']; 
                $question="SELECT * FROM `questiontable` WHERE `id`= $uid;";
                $quesres=mysqli_query($conn ,$question);
                while($row=mysqli_fetch_array($quesres))
                {
                    $quesid=$row['quesid'];
                    echo"<div class='question-container1' id='mcontainer".$quesid."'>
                                <form action='updatequestions.php' method='post'>
                                    <div class='question'>";
                                        echo"<input type='hidden' name='hidden' value='$quesid'>
                                            <textarea name='ques'>".$row['question']."</textarea>
                                    </div>
                                    <div class='question-date'>
                                        <label>".$row['postquesdate']."</label>
                                    </div>
                                    <div class='settings'>
                                        <div class='edit'>
                                            <input type='submit' name='update' value='Update Question'>
                                        </div>
                                        <div class='delete'>
                                            <input type='submit' name='delete' value='Delete Question'>
                                        </div>
                                        <div class='comment'>
                                            <input type='button' value='Comment' name='comment' onClick='comment1(".$row['quesid'].", mcontainer".$row['quesid'].");'>
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
                                        echo"<div class='previously-posted-comment'>
                                            <iframe src='comments.php?questionid=$quesid'></iframe>
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
            
            y.style.height= 470+'px';
        }
        else{
            y.style.height= 230+'px';
            e.style.display = 'none';
        }
    }
</script>
