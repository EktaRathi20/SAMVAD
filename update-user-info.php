<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/2f267887a2.js"
    crossorigin="anonymous"></script>
    <link rel="stylesheet" href="update-user-infocss.php">
</head>
<body>
    <div class="container">

        <div class="nav-container">
            <div class="nav-container-img">
                <img src="/samvad/SAMVAD.jpg" onclick="window.open('page2.php','_parent')"  style="cursor: pointer;"/>
            </div>
            <div class="nav-container-contact-us">
                <a href="contactus.php">Contact Us</a>
            </div>
        </div>

        <div class="blank-container"></div>

        <div class="form">
            <form action="updateuserinfo.php" method="post" enctype="multipart/form-data">
                <div class="input-field">
                    <i class="fa-solid fa-camera"></i>
                    <input type="file" name="files">
                </div>
                <div class="input-field">
                    <i class="fa-solid fa-user"></i>
                    <input type="text" name="name" placeholder="Enter your Name">
                </div>
                <div class="input-field">
                    <i class="fa-solid fa-user"></i>
                    <input type="text" name="username" placeholder="Enter your Username">
                </div>
                <div class="input-field">
                    <i class="fa-solid fa-envelope"></i>
                    <input type="email" name="useremail" placeholder="Enter your E-mail">
                </div>
                    <input type="submit"  class="btn" value = "Save" name="submit">
            </form>
        </div>
    </div>
</body>
</html>
