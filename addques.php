<?php
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        include '_dbconnect.php';
        $question=$_POST['ques'];
        session_start();
        $add=$_POST['add'];
        $uid=$_SESSION['id'];
        if(isset($question) && isset($add)){
            $query="select count(*) as cnt from `questiontable` where `question`='$question';";
            $out=mysqli_query($conn,$query);
            $out2=mysqli_fetch_array($out);
            if($out2['cnt']==1){
                $_SESSION['addques'] = "<script>alert('question already posted!');</script>";
                header('location:page2.php');
            }
            else
            {
                $sql="insert into `questiontable`(`id`,`question`,`postquesdate`)values($uid,'$question',Now());";
                $output=mysqli_query($conn,$sql);
                if($output)
                {
                    $_SESSION['addques'] = "<script>alert('question added successfully!!');</script>";
                    header('location:page2.php');
                }
            }
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title> 
    <link rel="stylesheet" href="addquescss.php">
</head>
<body>
    <div class="bg-container">
        <div class="nav-container">
            <img src="/samvad/SAMVAD.jpg"onclick="window.open('/samvad/page2.php','_parent')"  style="cursor: pointer;"/>
        </div>
        <div class="container">
            <div class="s-container">Add Question</div>
            <form action="addques.php" method="post">
                <div class="m-container">
                    <div class="instruction">
                        Tips on getting good answers quickly
                        <ul>
                            <li>Keep your question short and to the point.</li>
                            <li>Make sure your question has not been asked already.</li>
                            <li>Double-check grammar and spelling.</li>
                        </ul>    
                    </div>
                    <div class="profile">
                        <div class="profile-img">
                        <?php
                        include '_dbconnect.php';
                        session_start();
                        if(isset($_SESSION['id']))
                        {
                            $uid=$_SESSION['id'];

                            $query="SELECT COUNT(`id`) as cnt FROM `profilephoto` WHERE `id`=$uid;";
                            $exe = mysqli_query($conn,$query);
                            $output = mysqli_fetch_array($exe);
                            if($output['cnt']==1){
                                $sql="SELECT `photo` FROM `profilephoto` where `id`=$uid";
                                $img = mysqli_query($conn,$sql );
                                    
                                $element = mysqli_fetch_array($img);
                                $photo = $element['photo'];
                                echo "<img src='upload/".$photo."' onClick=window.open('/samvad/useracc.php')>"; 
                            }
                            else{
                                echo "<img src='/samvad/profile-img.png' onClick=window.open('/samvad/useracc.php')>"; 
                            }
                        }
                    ?>
                        </div>
                        <div class="profile-name">
                            <?php
                                $uid=$_SESSION['id'];
                                $sql1="select `username` from signup where `id`=$uid";
                                $name1=mysqli_query($conn,$sql1);
                                $element1=mysqli_fetch_array($name1);
                                $x1=$element1['username'];
                                echo"<label>$x1</label>";
                            ?>
                        </div>
                    </div>
                    <div class="question">
                        <textarea name="ques" id="question" cols="70" rows="10"></textarea>
                    </div>
                </div>
                <div class="l-container">
                    <input type="submit" value="Add Question" name="add">
                </div>
            </form> 
        </div>
    </div>
</body>
</html>