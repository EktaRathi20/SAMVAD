<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>your profile</title>
    <link rel="stylesheet" href="publicprofilecss.php">
    <script src="https://kit.fontawesome.com/2f267887a2.js"
    crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">

        <div class="nav-container">
            <div class="nav-container-img">
                <img src="/samvad/SAMVAD.jpg" onclick="window.open('/samvad/page2.php','_parent')"  style="cursor: pointer;"/>
            </div>
            <div class="nav-container-contact-us">
                <a href="/samvad/contactus.php",target="_parent">Contact Us</a>
            </div>
        </div>

        <div class="blank-container"></div>
        <div class="useraccount-main">
            <div class="useraccount">
                <div class="user-photo-m">
                    <div class="user-photo">
                        <?php
                            include '_dbconnect.php';
                            if(isset($_GET['name']))
                            {
                                $username=$_GET['name'];
                                $query="SELECT COUNT(`id`) as cnt FROM `profilephoto` WHERE `username`='$username';";
                                $exe = mysqli_query($conn,$query);
                                $output = mysqli_fetch_array($exe);
                                
                                if($output['cnt']==1){
                                    $sql="SELECT `photo` FROM `profilephoto` where `username`='$username';";
                                    $img = mysqli_query($conn,$sql );
                                    
                                    $element = mysqli_fetch_array($img);
                                    $photo = $element['photo'];
                                    echo "<img src='upload/".$photo."' >"; 
                                }
                                else{
                                    echo "<img src='/samvad/profile-img.png'>"; 
                                }
                            }
                        ?>
                    </div>
                    <div class="user-name">
                            <?php
                                include '_dbconnect.php';
                                $username=$_GET['name'];
                                $sql="select `name` from signup where `username`='$username';";
                                $name=mysqli_query($conn,$sql);
                                $element=mysqli_fetch_array($name);
                                $x=$element['name'];
                                echo "<label>$x</label>";
                            ?>
                        </div>
                </div>
                <div class="user-name-following">
                    <div class="username-following">
                        <div class="username">
                            <?php
                                $username=$_GET['name'];
                                echo"<label>$username</label>";
                            ?>
                        </div>
                        <div class="user-following">
                            <?php
                                include '_dbconnect.php';
                                $username=$_GET['name'];
                                $sql1="select `id` from signup where `username`='$username';";
                                $name1=mysqli_query($conn,$sql1);
                                $element1=mysqli_fetch_array($name1);
                                $x1=$element1['id'];//jiski profile open h uski id.
                                $query="SELECT COUNT(`followersid`) AS cnt FROM `follow` WHERE `followersid`=$x1;";
                                $res=mysqli_query($conn,$query);
                                $row=mysqli_fetch_array($res);
                                $y=$row['cnt'];
                            
                                echo"<label name='follower'>$y</label>&nbsp;Followers&nbsp;";
                                $query1="SELECT COUNT(`id`) AS cont FROM `follow` WHERE `id`=$x1;";
                                $res1=mysqli_query($conn,$query1);
                                $row1=mysqli_fetch_array($res1);
                                $y1=$row1['cont'];
                            
                                echo"<label name='follower'>$y1</label>&nbsp;Following&nbsp;";
                            ?>
                        </div>
                    </div>  
                    <div class="follow">
                            <form action="/samvad/publicprofilephp.php" method="post">
                                <?php
                                    session_start();
                                    $username=$_GET['name'];
                                    $sql1="select `id` from signup where `username`='$username';";
                                    $name1=mysqli_query($conn,$sql1);
                                    $element1=mysqli_fetch_array($name1);
                                    $x1=$element1['id'];//jiski profile open h uski id.
                                    $uid=$_SESSION['id'];
                                    $followquery="SELECT count(*) as cnt FROM `follow` WHERE `followersid`=$x1 AND `id`=$uid;";
                                    $followquery1=mysqli_query($conn,$followquery);
                                    $followquery2=mysqli_fetch_array($followquery1);
                                    $count=$followquery2['cnt'];
                                    if($count>0){
                                        echo"<input type='hidden' name='hidden' value=$x1><input type=submit value='unfollow' name='unfollow' id='unfollow'>";
                                    }
                                    else{
                                        echo"<input type='hidden' name='hidden'  value=$x1><input type=submit value='follow' name='follow' id='follow'>";
                                    }
                                ?>
                            </form>
                    </div>
                </div>
            </div>
            <div class="blank-container2"></div>
            <div class="useraccount2">
                <div class="mini-nav">
                    <ul>
                        <li><a href="#" onClick="question()">Question</a></li>
                        <li><a href="#" onClick="answer()">Answer</a></li>
                    </ul>
                </div>
                <div class="usercontent">
                    <div class="usercontent1" id="x1">
                        <?php
                            include '_dbconnect.php';
                            $username=$_GET['name'];
                            // $username=$_SESSION['username'];
                            $queryid="select `id` from `signup` where `username`='$username';";
                            $queryid2=mysqli_query($conn,$queryid);
                            $queryid3=mysqli_fetch_array($queryid2);
                            $id=$queryid3['id'];
                            $question="SELECT * FROM `questiontable`  WHERE `id`= $id;";
                            $quesres=mysqli_query($conn ,$question);
                            while($row=mysqli_fetch_array($quesres))
                            {
                                echo"<div class='question-container'>
                                        <div class='question'>
                                            <label>".$row['question']."</label>
                                        </div>
                                        <div class='question-date'>
                                            <label>".$row['postquesdate']."</label>
                                        </div>
                                    </div>";
                            }
                        ?>
                    </div>
                    <div class='usercontent2' id='x2'>
                        <?php
                            include '_dbconnect.php';
                            // $username=$_SESSION['username'];
                            $username=$_GET['name'];
                            $queryid="select `id` from `signup` where `username`='$username';";
                            $queryid2=mysqli_query($conn,$queryid);
                            $queryid3=mysqli_fetch_array($queryid2);
                            $id=$queryid3['id'];
                            $mainans="SELECT * FROM `questiontable` CROSS JOIN `answertable` ON questiontable.quesid=answertable.quesid WHERE answertable.id=$id;";
                            $mainansres=mysqli_query($conn,$mainans);
                            while($row3=mysqli_fetch_array($mainansres))
                            {   
                                echo"<div class='question-answer-container'>
                                        <div class='ques'>
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
                                    </div>";
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<script>
    function question(){
        var e1 =  document.getElementById('x1');
        var e2 =  document.getElementById('x2');
        if(e1.style.display === 'block'){
            e2.style.display='block';
            e1.style.display = 'none';
        }
       else{
           e2.style.display='none';
            e1.style.display = 'block';
        }
    }
    function answer(){
        var e1 =  document.getElementById('x1');
        var e2 =  document.getElementById('x2');
        if(e2.style.display === 'block'){
            e1.style.display='block';
            e2.style.display = 'none';
        }
       else{
           e1.style.display='none';
            e2.style.display = 'block';
        }
    }
</script>