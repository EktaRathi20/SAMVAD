<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" text="type/css" href="resetpasswordcss.php">
    <script src="https://kit.fontawesome.com/2f267887a2.js"
    crossorigin="anonymous"></script>
  </head>
  <body>
    <div class="container3"></div>
    <div class="m-container3">
      <div class="reset-password">
        <p>Reset Password</p>
        <form action="resetpasswordphp.php" method='POST'>
          <div class="input-field">
            <i class="fa-solid fa-lock"></i>
            <input type="password" placeholder="Enter new password" name="password" id="pass" autocomplete="off"/>
          </div>
          <div class="input-field">
            <i class="fa-solid fa-lock"></i>
            <input
              type="password"
              placeholder="Re-Enter new Password" name="repassword" id="re" autocomplete="off"
            />
          </div>
          <input type="submit" value="Reset Password" class="reset-password-btn" onclick="chk();">
        </form>
      </div>
    </div>
  </body>
</html>
<script type="text/javascript">
  function chk(){
    let pass=document.getElementById('pass').value;
    let re=document.getElementById('re').value;
    if(pass!=re){
      alert('re enter password correctly');
    }
  }
</script>