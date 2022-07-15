<?php
  session_start();
  if($_SERVER["REQUEST_METHOD"] == "POST")
  {
    include '_dbconnect.php';
    if(isset($_POST['email']))
    {
      $email = $_POST['email'];
      
      $password = $_POST['password'];
      $query = "SELECT * FROM signup WHERE email='$email' AND password='$password'limit 1";
      $result = mysqli_query($conn, $query);
      $row = mysqli_fetch_array($result,MYSQLI_NUM);
    
      if(mysqli_num_rows($result)==1){
        $_SESSION['id']=$row[0];
        
        header('location:page2.php');
      }
      else{ 
          echo '<script type="text/javascript">';
          echo ' alert("Please enter correct E-Mail Id or Password")';
          echo '</script>';
      }
  }
}   
?>

<!DOCTYPE html>
<html lang="en">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign-In Sign-Up</title>
    <link rel="stylesheet" type="text/css" href="page1css.php" />
    <script src="https://kit.fontawesome.com/2f267887a2.js"
    crossorigin="anonymous"></script>
  </head>
  <body>
    <?php
      if(isset($_SESSION['status'])){
        $x=$_SESSION['status'];
        echo "<script>alert('$x');</script>";
        unset($_SESSION['status']);
      }
      if(isset($_SESSION['signup'])){
        $y=$_SESSION['signup'];
        echo "<script>alert('$y');</script>";
        unset($_SESSION['signup']);
      }
      if(isset ($_SESSION['emptyfields'])){
        $z=$_SESSION['emptyfields'];
        echo "<script>alert('$z');</script>";
        unset($_SESSION['emptyfields']);
      }
      if(isset($_SESSION['Diffemail'])){
        $a=$_SESSION['Diffemail'];
        echo "<script>alert('$a');</script>";
        unset($_SESSION['Diffemail']);
      }
      if(isset($_SESSION['Diffusername'])){
        $b=$_SESSION['Diffusername'];
        echo "<script>alert('$b');</script>";
        unset($_SESSION['Diffusername']);
      }
      if(isset($_SESSION['delete'])){
        $b=$_SESSION['delete'];
        echo "<script>alert('$b');</script>";
        unset($_SESSION['delete']);
      }
    ?>
    <div class="container"></div>
    <div class="m-container">
      <div class="s-container">
        <div class="form-container">
          <div class="form_top-container">
            <div class="form_top_title-container">
              <h3>SAMVAD</h3>
            </div>
            <div class="form_top_tagline-container">
              <p>A place to share knowledge!</p>
            </div>
          </div>        
          <div class="form_middle-container">
            <div class="form_middle_left_signup-container">
              <h3>Sign-Up</h3>
              <form action="/samvad/page1signup.php" method="post" name="myform" id="my-form-id">
              <div class="input-field">
                <i class="fa-solid fa-user"></i>
                <input type="text" placeholder="Enter Name" name="name" autocomplete="off"/>
              </div>
              <div class="input-field">
                <i class="fa-solid fa-user"></i>
                <input type="text" placeholder="Enter Username" name="username" autocomplete="off"/>
              </div>
              <div class="input-field">
                <i class="fa-solid fa-envelope"></i>
                <input type="email" placeholder="Enter E-mail Id"  name="email" autocomplete="off" />
              </div>
              <div class="input-field">
                <i class="fa-solid fa-lock"></i>
                <input type="password" placeholder="Enter Password" name="password" autocomplete="off" />
              </div>
              <div class="input-field">
                <i class="fa-solid fa-lock"></i>
                <input type="password" placeholder="Re-Enter Password" name="repassword" autocomplete="off" />
              </div>
              <div class="security-ques">
                <h4>Security Question:</h4>
                <select id="sq" name="sques">
                  <option value="sq1"> Enter your Birth Place</option>
                  <option value="sq2"> Enter your Favourite Subject</option>
                  <option value="sq3"> Enter your Favourite Place</option>
                  <option></option>
                </select>
                <div class="input-field">
                  <i class="fa-solid fa-check"></i>
                  <input type="text" placeholder="Enter your Answer" name="sans" autocomplete="off"/>
                </div>
              </div>
              <div class="signup-para">
                <p>
                  By continuing you indicate that you agree to Samvad’s Terms of
                  Service and Privacy Policy.
                </p>
              </div>
              <input type="submit" value="Sign Up" onClick="chk();" class="signup-btn" name="register">
              </form>
            </div>
          
            <div class="form_middle_right_signin-container">
              <h3>Sign In</h3>
              <form action="/samvad/page1.php" method="post" name="myform" >
              <div class="input-field">
                <i class="fa-solid fa-envelope"></i>
                <input type="email" placeholder="Enter E-mail Id" id="email" name="email" autocomplete="off"/>
              </div>
              <div class="input-field">
                <i class="fa-solid fa-lock"></i>
                <input type="password" placeholder="Enter Password" name="password" autocomplete="off" />
              </div>
              <div class="form-btn">
                <a href="forgotpassword.php" target="_parent">Forgot Password</a>
                <input type="submit" value="Sign In" class="signin-btn">
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="form_bottom_footer-container">
        <ul>
          <li><a href="aboutuswithoutlogin.php">About</a></li>
          <li><a href="termswithoutlogin.php">Terms</a></li>
          <li><a href="contactuswithoutlogin.php">Contact</a></li>
          <li>Samvad-2022</li>
        </ul>
      </div>
    </div>
  </body>
</html>


<script type="text/JavaScript">
function chk()
{
var empt1 = document.forms["myform"]["name"].value;
var empt2 = document.forms["myform"]["email"].value;
var empt3 = document.forms["myform"]["password"].value;
var empt4 = document.forms["myform"]["repassword"].value;
var empt5 = document.forms["myform"]["sans"].value;
if (empt1 == "" || empt2 == "" || empt3 == "" || empt4 == "" || empt5 == "")
{
alert("Please input a Value");
return false;
}

}
</script>
