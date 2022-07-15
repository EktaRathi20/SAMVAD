<?php
    header('Content-type:text/css; charset:UTF-8');
?>

*{
    margin: 0px;
    padding: 0px;
}
.container{
    width:100%;
}
.nav-container{
    position:sticky;
    top:0px;
    width:100%;
    height:70px;
    box-shadow: 0 0px 0px 0 rgb(0 0 0 / 0%), 0 0px 5px 0 rgb(0 0 0 / 25%);
}
.nav-container img{
    width: 50px;
    height: 60px;
    padding: 5px;
}
.m-container{
    width:400px;
    margin-left:500px;
    margin-top:20px;
    <!-- box-shadow: 0 0px 0px 0 rgb(0 0 0 / 0%), 0 0px 5px 0 rgb(0 0 0 / 25%); -->
}
.s-container{
    width:100%;
    height:40px;
    display:grid;
    grid-template-columns:15%85%;
    box-shadow: 0 0px 0px 0 rgb(0 0 0 / 0%), 0 0px 5px 0 rgb(0 0 0 / 25%);
    margin-bottom:20px;
}
.profilephoto{
    margin-top:2px;
    margin-right:10px;
    width:36px;
    height:36px;
    border-radius:50px;
    background-color:#e7e6e5;
    margin-bottom:2px;
    
}
.profilephoto img{
    width:30px;
    height:30px;
    border-radius:50px;
    margin-left:3px;
    margin-top:3px;
    cursor:pointer;
}
.username{
    font-size: xx-large;
}