<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>your profile</title>
        <link rel="stylesheet" href="useraccountcss.php">
        <script src="https://kit.fontawesome.com/2f267887a2.js"
        crossorigin="anonymous"></script>
    </head>
    <body>
        <?php
            session_start();
            if(isset($_SESSION['userinfo']))
            {
                $m=$_SESSION['userinfo'];
                echo "<script>alert('$m');</script>";
                unset($_SESSION['userinfo']);
            }
            if(isset($_SESSION['updateuserinfo']))
            {
                $n=$_SESSION['updateuserinfo'];
                echo "<script>alert('$n');</script>";
                unset($_SESSION['updateuserinfo']);
            }
            if(isset($_SESSION['remove']))
            {
                $x=$_SESSION['remove'];
                echo"<script>alert('$x');</script>";
                unset($_SESSION['remove']);
            }
        ?>
        <div class="container">
            <div class="nav-container">
                <div class="nav-container-img">
                    <img src="/samvad/SAMVAD.jpg" onclick="window.open('/samvad/page2.php','_parent')"  style="cursor: pointer;"/>
                </div>
                <div class="nav-container-contact-us">
                    <a href="/samvad/contactus.php", target="_parent">Contact Us</a>
                </div>
            </div>
            <div class="blank-container"></div>
            <div class="useraccount-main">
                <div class="useraccount">
                    <div class="user-photo-m">
                        <form action="removephoto.php" method="post">
                            <div class="user-photo">
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
                                            $_SESSION['photo']=$photo;
                                            echo "<img src='upload/".$photo."' onClick=window.open('/samvad/x.php','_parent') style='cursor: pointer;' />"; 
                                        }
                                        else
                                        {
                                            echo "<img src='/samvad/profile-img.png'>"; 
                                        }
                                        
                                    }
                                ?>
                            </div>
                            <div class="user-name">
                                <?php
                                    include '_dbconnect.php';
                                    $uid=$_SESSION['id'];
                                    $sql="select `name` from signup where `id`=$uid";
                                    $name=mysqli_query($conn,$sql);
                                    $element=mysqli_fetch_array($name);
                                    $x=$element['name'];
                                    echo "<label>$x</label>";
                                ?>
                            </div>
                            <div class="add-user-photo">
                                <input type="submit" value="Remove Profile Photo" name="remove">
                            </div>
                        </form>      
                    </div> 
                    <div class="user-name-following">
                        <div class="username">
                            <?php
                                $sql1="select `username` from signup where `id`=$uid";
                                $name1=mysqli_query($conn,$sql1);
                                $element1=mysqli_fetch_array($name1);
                                $x1=$element1['username'];
                                echo"<label>$x1</label>";
                            ?>
                        </div>
                        <div class="user-following">
                            <?php
                                $uid=$_SESSION['id'];
                                $query="SELECT COUNT(`followersid`) AS cnt FROM `follow` WHERE `followersid`=$uid;";
                                $res=mysqli_query($conn,$query);
                                $row=mysqli_fetch_array($res);
                                $y=$row['cnt'];
                                echo"<label name='follower'>$y</label>&nbsp;<a href='followers.php'>Followers</a>&nbsp;";
                                $query1="SELECT COUNT(`followersid`) AS cont FROM `follow` WHERE `id`=$uid;";
                                $res1=mysqli_query($conn,$query1);
                                $row1=mysqli_fetch_array($res1);
                                $y1=$row1['cont'];
                                echo"<label name='follower'>$y1</label>&nbsp;<a href='following.php'>Following</a>&nbsp;";
                            ?>
                        </div> 
                    </div>
                    <div class="edit-user">
                        <a href="update-user-info.php"><i class="fa-solid fa-pen"></i>Edit Profile</a>
                    </div>  
                    <div class="delete-user">
                        <input type="button" value="delete account" name="delete" onClick="deleteconfirm();">
                    </div>

                    
                </div>
                <div class="blank-container2"></div>
                <div class="useraccount2">
                    <div class="mini-nav">
                        <ul>
                            <li><a href="#" onClick="question();">Question</a></li>
                            <li><a href="#" onClick="answer();">Answer</a></li>
                            <li><a href="#" onClick="rmvbookmark();">Bookmark</a></li>
                        </ul>   
                    </div>
                    <div class="usercontent1" id="x1">
                        <iframe src='questions.php'></iframe>
                    </div>
                    <div class='usercontent2' id='x2'>
                        <iframe src='answers.php'></iframe>
                    </div>
                    <div class='usercontent3' id='x3'>
                        <iframe src='bookmarks.php'></iframe>
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
        var e3 =  document.getElementById('x3');
        e1.style.display='block';
        e2.style.display='none';
        e3.style.display='none';    


    }
    function answer(){
        var e1 =  document.getElementById('x1');
        var e2 =  document.getElementById('x2');
        var e3 =  document.getElementById('x3');
        e1.style.display='none';
        e2.style.display='block';
        e3.style.display='none';
    }
    function rmvbookmark(){
        var e1 =  document.getElementById('x1');
        var e2 =  document.getElementById('x2');
        var e3 =  document.getElementById('x3');
        e1.style.display='none';
        e2.style.display='none';
        e3.style.display='block';
    }
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
    function deleteconfirm()
    {
        if(confirm("are you sure you wnt to delete your account"))
        {
            window.open('deleteacc.php','_parent');
        }
        else{
            window.open('useracc.php','_parent');
        }
    }
</script>