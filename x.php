<?php
    include'_dbconnect.php';
    session_start();
    $photo=$_SESSION['photo'];
    echo"<img src='upload/".$photo."' style='width: 500px; height:675px; margin-left:400px;'>";
?>