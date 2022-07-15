<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        include '_dbconnect.php';
        $email=$_POST['email'];
        $problem=$_POST['problem'];
        $sql="select `id` from `signup` where `email`='$email';";
        $res=mysqli_query($conn,$sql);
        $row=mysqli_fetch_array($res);
        $uid=$row['id'];
        if(isset($email)and isset($topic) && isset($problem)){
            $query="INSERT INTO `contactus`(`id`, `email`, `problem`) VALUES ($uid,'$email','$problem');";
            $output=mysqli_query($conn,$query);
            if($output){
                echo "<script>alert('Thank you! We will resolve your problem soon')</script>";
            }
            else{
                echo"<script>alert('error,please try again.')</script>";
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
    <title>Contact Us</title>
    <link rel="stylesheet" type="text/css" href="contactuscss.php">
</head>
<body>
    <div class="container">
        <div class="nav-container">
            <img src="/samvad/SAMVAD.jpg"onclick="window.open('/samvad/page2.php','_parent')"  style="cursor: pointer;"/>
            <h3>CONTACT US</h3>
        </div>
        <div class="blank-container"></div>
        <div class="form-container">
            <h3>Contact Support</h3>
            <form action="contactus.php" method="post">
                <input type="email" placeholder="xyz@gmail.com" name="email" autocomplete="off">
                <br>
                <textarea placeholder="please describe your problem" name="problem" autocomplete="off"></textarea>
                <br>
                <input type="submit" class="btn" name='submit'>
            </form>
        </div>
    </div>
</body>
</html>