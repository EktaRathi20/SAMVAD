<?php
    header('Content-type:text/css; charset:UTF-8');
?>
*{
    margin: 0px;
    padding: 0px;
}
.question-answer-container {
    margin-left:50px;   
    margin-top:15px;
    width: 600px;
    height:300px;
    box-shadow: 0 3px 5px 0 rgba(0, 0, 0, 0.1), 0 5px 19px 0 rgba(0, 0, 0, 0.15);
    display:grid;
    grid-template-rows:13% 30% 5% 30% 5% 17%;
}
.ques , .ans{
    border-bottom:1px solid #80808040;
}
.ques-date, .ans-date{
    text-align:right;
}
.settings{
    display:flex;
    justify-content:space-evenly;
}
.delete{
    width:115px;
}
.delete input{
    border: none;
    border-radius: 55px;
    background-color:#fca139 ;
    width: 100%;
    height: 30px;
    cursor: pointer;
    margin-top:10px;
}
.profile-container{
    display:grid;
    grid-template-columns:10% 90%;  
    height:38px;
    border-bottom:1px solid #e3dbdb;
    margin-left:5px;
    margin-right:5px;
}
.profile-img{
    margin-top:2px;
    margin-right:10px;
    width:36px;
    height:36px;
    border-radius:50px;
    background-color:#e7e6e5;
    margin-bottom:2px;
}
.profile-img img{
    width:30px;
    height:30px;
    border-radius:50px;
    margin-left:3px;
    margin-top:3px;
    cursor:pointer;
}
.profile-name{
    margin-top:10px;
}
.delete input:hover{
    background-color:#ff8800 ;
}
@media(max-width:500px){
    .question-answer-container{
        width:400px;
        transition: 1s;
        transition-timing-function: ease-in-out;
    }
}