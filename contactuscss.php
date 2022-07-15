<?php
    header('Content-type:text/css; charset:UTF-8');
?>
*{
    margin: 0px;
    padding: 0px;
}
.container{
    width: 100%;
    height: 1100px;
    background-color:#f1ede705;
}
.nav-container{
    position: sticky;
    top: 0px;
    background-color:rgb(254 254 254);
    display: grid;
    grid-template-columns: auto auto;
    box-shadow: 0 3px 5px 0 rgba(0, 0, 0, 0.1), 0 5px 19px 0 rgba(0, 0, 0, 0.15);
}
.nav-container img{
    width: 50px;
    height: 60px;
    padding: 5px;
}
.nav-container h3{
    color: #b53a0d;
    margin-top: 10px;
    text-align:right;
    padding: 5px;
}
.blank-container{
    height: 20px;
    background-color: white;
}
.form-container{
   border-radius: 5px; 
    margin-left: 600px;
    width: 350px;
    height: 280px;
    text-align: center;
    padding: 10px;
    background-color:#e9e9e91f;
    transition: 1s;
    transition-timing-function: ease-in-out;
    box-shadow: 0 3px 5px 0 rgba(0, 0, 0, 0.1), 0 5px 19px 0 rgba(0, 0, 0, 0.15);
}
.form-container h3{
    border-bottom: 1px solid rgb(194, 190, 190);
    padding-bottom: 10px;
}
.form-container form{
    margin-top: 10px;
}
input{
    padding: 5px;
    margin: 5px;
    width: 90%;
    border: none;
    border-radius: 5px;
    background-color: rgb(247 246 246);
}
.btn{
    background-color: #ff7f1d;
}
.btn:hover{
    background-color: #ff5100;
}
textarea{
    margin: 0px;
     width: 325px;
      height: 120px;
       background-color: rgb(247 246 246);
       border-radius: 5px;
       border: none;
}
@media(max-width:1065px){
    .form-container{
        margin-left: 400px;
    }
}
@media(max-width:771px){
    .form-container{
        margin-left: 200px;
    }
}
@media(max-width:565px){
    .form-container{
        margin-left: 100px;
    }
}
@media(max-width:473px){
    .form-container{
        margin-left: 0px;
    }
}