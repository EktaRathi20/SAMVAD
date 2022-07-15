<?php
    header('Content-type:text/css; charset:UTF-8');
?>
*{
    margin:0px;
    padding: 0px;
}

.bg-container{
    background-color:rgb(255 255 255 / 6%);
    width:100%;
    height:1200px;
}
.nav-container{
    position:sticky;
    top:0px;
    width: 100%;
    height: 60px;
    background-color: #fefdfd;
    box-shadow: 0 3px 5px 0 rgba(0, 0, 0, 0.1), 0 5px 19px 0 rgba(0, 0, 0, 0.15);
}
.nav-container img{
    width: 60px;
    height: 60px;
    cursor: pointer;
    margin-left: 400px;
}
.container{
    margin-top:100px;
    margin-left:470px;
    width:600px;
    height:400px;
    background-color:white;

    display: grid;
    grid-template-rows: 10% 80% 10%;
    box-shadow: 0 3px 5px 0 rgba(0, 0, 0, 0.1), 0 5px 19px 0 rgba(0, 0, 0, 0.15);
}
.s-container{
    font-family: 'Times New Roman', Times, serif;
    font-size: 30px;
    text-align: center;
    margin-top:5px;
    color: black;
    border-bottom: 1px solid grey;
    margin-left:10px;
    margin-right: 10px;
}
.m-container{
    display: grid;
    grid-template-rows:30% 10% 60% ;
    border-bottom: 1px solid #d6cece;
    margin-left:2px;
    margin-right:2px;
    
}
.l-container{
    height: 41px;
    
}
.instruction{
    background-color: rgb(198, 231, 235);  
    margin:10px;
    color: rgb(0, 0, 139);
    border-radius: 5px;
}
.question textarea{
    margin-top: 10px;
    margin-left: 6px;
    width: 585px;
    height: 173px;
    border: 1px solid #d6cece;
    outline: none;
}
.instruction ul{
    margin-left:30px;
}
.profile{
    display:grid;
    grid-template-columns:7% 93%;  
    height:35px;
    border-bottom:1px solid #d6cece;
    margin-left:5px;
    margin-right:5px;
}
.profile-img{
    margin-top:2px;
    margin-right:10px;
    width:30px;
    height:30px;
    border-radius:50px;
    background-color:#e7e6e5;
    margin-bottom:2px;
}
.profile-img img{
    width:25px;
    height:25px;
    border-radius:50px;
    margin-left:3px;
    margin-top:3px;
    cursor:pointer;
}
.profile-name{
    margin-top:7px;
}
.l-container input{
    border: none;
    border-radius: 55px;
    background-color:#fca139 ;
    width: 30%;
    height: 30px;
    cursor: pointer;
    margin-top:5px;
    margin-left:400px;
}
.l-container input:hover{
    background-color:#ff8800 ;
}
@media(max-width:1075px){
    .container{
        margin-left:250px;
        transition: 1s;
        transition-timing-function: ease-in-out;
    }
}
@media(max-width:847px){
    .container{
        margin-left:130px;
        transition: 1s;
        transition-timing-function: ease-in-out;
    }
    .nav-container img{
        width: 60px;
        height: 60px;
        cursor: pointer;
        margin-left: 300px;
    }
}
@media(max-width:728px){
    .container{
        margin-left:70px;
        transition: 1s;
        transition-timing-function: ease-in-out;
    }
    .nav-container img{
        width: 60px;
        height: 60px;
        cursor: pointer;
        margin-left: 200px;
    }
}
@media(max-width:668px){
    .container{
        margin-left:60px;
        top:30px;
        width:500px;
        transition: 1s;
    transition-timing-function: ease-in-out;
    }
    .nav-container img{
        width: 60px;
        height: 60px;
        cursor: pointer;
        margin-left: 100px;
    }
    .m-container{
        width:500px;
    }
    .instruction{
        width:470px;
    }
    .profile{
        width:490px;
    }
    .question{
        width:480px;
    }
    .question textarea{
        width:480px;
    }
    .l-container input{
        margin-left: 343px;
    }
}
@media(max-width:568px){
    .container{
        margin-left:10px;
        top:10px;
        width:430px;
        transition: 1s;
        transition-timing-function: ease-in-out;
    }
    .nav-container img{
        width: 60px;
        height: 60px;
        cursor: pointer;
        margin-left: 0px;
    }
    .m-container{
        width:419px;
    }
    .instruction{
        width:396px;
    }
    .profile{
        width:408px;
    }
    .question{
        width:420px;
    }
    .question textarea{
        width:408px;
    }
    .l-container input{
        margin-left: 300px;
    }
}