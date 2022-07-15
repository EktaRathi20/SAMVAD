<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="searchusercss.php">
</head>
<body>
<div class='container'>
        <div class="nav-container">
            <img src="/samvad/SAMVAD.jpg"onclick="window.open('/samvad/page2.php','_parent')"  style="cursor: pointer;"/>
        </div>
        <div class='m-container'>
            <?php
                include'_dbconnect.php';
                session_start();
                $uid=$_SESSION['id'];
                $select="SELECT * FROM `follow` LEFT JOIN `signup` on follow.id=signup.id where follow.followersid=$uid;";
                $query=mysqli_query($conn,$select);
                while($row=mysqli_fetch_array($query))
                {
                    echo"
                    <div class='s-container'>
                        
                        <div class='profilephoto'>";
                                $id=$row['id'];
                                $query1="select * from `profilephoto`where `id`=$id;";
                                $res=mysqli_query($conn,$query1);
                                $row1=mysqli_fetch_array($res);
                                if(isset($row1['photo']))
                                {
                                    $username=$row['username'];
                                    echo "<img src='upload/".$row1['photo']."' onClick=window.open('/samvad/publicprofile.php?name=".$username."','_parent')>";
                                }
                                else
                                {
                                    $username=$row['username'];
                                    echo "<img src='/samvad/profile-img.png' onClick=window.open('/samvad/publicprofile.php?name=$username','_parent')>"; 
                                }
                        echo"
                        </div>
                        <div class='username'>
                            <label>".$row['username']."</label>  
                        </div>
                    </div>
                    ";
                }
            ?>
        </div>
    </div>
</body>
</html>