<?php
  if($_SERVER["REQUEST_METHOD"] == "POST")
  {
    include '_dbconnect.php';
    session_start();
    $name = $_POST["name"];
    $email=$_POST["email"];
    $username=$_POST["username"];
    $password = $_POST["password"];
    $repassword = $_POST["repassword"];
    $sans = $_POST["sans"];

    if(empty($name and $username and $email and $password and $repassword and $sans))
    {
      $_SESSION['emptyfields']="Enter all fields.";
      header('location:page1.php');
      exit();
    }
    else
    {
      $qry="select count(id) as cnt from `signup` where email='$email'";
      $res = mysqli_query($conn, $qry);
      $row = mysqli_fetch_array($res);
      if ($row['cnt']>0)
      {
        $_SESSION['Diffemail']="Please enter different E-Mail Id";
        header('location:page1.php');
        exit();
      }
      else
      {
        $qry2="select count(id) as cnt from `signup` where username='$username'";
        $res2 = mysqli_query($conn, $qry2);
        $row2 = mysqli_fetch_array($res2);
        if ($row2['cnt']>0)
        {
          $_SESSION['Diffusername']="Please enter different username";
          header('location:page1.php');
          exit();
        }
        else{
          $query = "INSERT INTO `signup`( `name`,`username`, `email`, `password`) VALUES ('$name','$username','$email','$password')";
          $output=mysqli_query($conn, $query);

          $qry3="select id from `signup` where email='$email'";
          $res3 = mysqli_query($conn, $qry3);
          $row3 = mysqli_fetch_array($res3);
          echo $row3['id'];
  
          $uid = $row3['id'];
          $sq = $_POST['sques'];
    
          $sql1="INSERT INTO `securityans`(`id`, `sqid`, `ans`) VALUES ($uid,'$sq','$sans')";
          $output2=mysqli_query($conn,$sql1);
          if($output)
          { 
            if($output2)
            {
              $_SESSION['signup']="Signup Successfully!";
              header('location:page1.php');
            }
          }
        }
      }
    }
  }
?>