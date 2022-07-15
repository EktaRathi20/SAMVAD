<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>forgot-password</title>
    <link rel="stylesheet" text="type/css" href="forgotpasswordcss.php">
    <script src="https://kit.fontawesome.com/2f267887a2.js"
    crossorigin="anonymous"></script>
</head>
<body>
    <div class="container2"></div>
        <div class="m-container2">
        <div class="forgot-password">
            <p>Answer the below security questions to reset your password!</p>
            <form action="/samvad/forgotpasswordphp.php " method="POST" name="myform">
              <div class="input-field">
                <i class="fa-solid fa-envelope"></i>
                <input type="email" placeholder="Enter E-mail Id"  name="email" autocomplete="off"/>
              </div>
              <select id="sq" name="sques">
                  <option value="sq1"> Enter your Birth Place</option>
                  <option value="sq2"> Enter your Favourite Subject</option>
                  <option value="sq3"> Enter your Favourite Place</option>
              </select>
              <div class="input-field">
                <i class="fa-solid fa-check"></i>
                <input type="text" placeholder="Enter your Answer" name="sans" autocomplete="off" />
              </div>
              <div class="forgot-password-next">
                  <input type="submit" value="Next" class="next">
              </div>
          </form>
        </div>
    </div>
</body>
</html>