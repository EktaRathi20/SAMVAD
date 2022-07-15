<?php
    include'_dbconnect.php';
    session_destroy();
    header('location:page1.php');
?>