<?php
    header('Content-type:text/css; charset:UTF-8');
?>
*{
    margin: 0px;
    padding: 0px;
}
.question-container1 {
    margin-left:50px;   
    margin-top:15px;
    width: 600px;
    height:230px;
    display:grid;
    grid-template-rows:75% 5% 20%;
    box-shadow: 0 3px 5px 0 rgba(0, 0, 0, 0.1), 0 5px 19px 0 rgba(0, 0, 0, 0.15);
    
}
.question{
    margin-left:3px;
    margin-right:3px;
   
}
.question-date {
    text-align:right;
}
.settings{
    display:flex;
    justify-content:space-evenly;
}
.edit{
    width:100px;
}
.delete{
    width:115px;
}
.comment{
    width:80px;
}
.edit input{
    border: none;
    border-radius: 55px;
    background-color:#fca139 ;
    width: 100%;
    height: 30px;
    cursor: pointer;
    margin-top:10px;
}
.edit input:hover{
    background-color:#ff8800 ;
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
.delete input:hover{
    background-color:#ff8800 ;
}
.comment input{
    border: none;
    border-radius: 15px;
    background-color: #fca139;
    width: 100%;
    height: 30px;
    cursor: pointer;
    margin-top: 10px; 
    padding: 5px;
    cursor:pointer;
}
.comment input:hover{
    background-color:#ff8800 ;
}
textarea{
    margin:3px;
    width: 587px;
    height: 150px;
    border:none;
}
iframe{
    width: 100%;
    height: 196px;
}
.comment-container{
display:grid;
grid-template-rows:17% 83%;

margin-top:10px;
}
.add-comment-container{
height:40px;
display:grid;
grid-template-columns:10% 70% 20%;
border-bottom:1px solid #e3dbdb;
margin-left:3px;
margin-right:3px;

}
.previously-posted-comment{
    display:grid;
    grid-template-rows:20% 70% 10%;
    box-shadow: 0 0px 0px 0 rgb(0 0 0 / 0%), 0 0px 5px 0 rgb(0 0 0 / 25%);
}
.comment-user-profile{
height:40px;
display:grid;
grid-template-columns:10% 90%;
border-bottom:1px solid #e3dbdb;
margin-left:3px;
margin-right:3px;
}
.answer-container{
height:135px;
border-bottom:1px solid #e3dbdb;
margin-left:3px;
margin-right:3px;   
}
.logged-in-user-img{
margin-top:2px;
margin-right:10px;
width:36px;
height:36px;
border-radius:50px;
background-color:#e7e6e5;
margin-bottom:2px;
margin-left:5px;
}
.logged-in-user-img img{
width:30px;
height:30px;
border-radius:50px;
margin-left:3px;
margin-top:3px;
cursor:pointer;
}
.add-comment-container form{
display:flex;
}
.logged-in-user-comment {
margin-top:7px;
margin-right:20px;
}
.logged-in-user-comment input{
width:100%;
border-radius:5px;
border:none;
background-color:#f3f3f3;
padding:5px;
}
.logged-in-user-add-comment-btn{
outline:none;
border:none;
margin-right:5px;
}
.logged-in-user-add-comment-btn input{
border: none;
border-radius: 55px;
background-color:#fca139 ;
width: 100%;
height: 20px;
cursor: pointer;
margin-top:10px;

}
.logged-in-user-add-comment-btn input:hover{
background-color:#ff8800 ;
}
.comment-user-profile-photo{
margin-top:2px;
margin-right:10px;
width:36px;
height:36px;
border-radius:50px;
background-color:#e7e6e5;
margin-bottom:2px;
margin-left:5px;
}
.comment-user-profile-photo img{
width:30px;
height:30px;
border-radius:50px;
margin-left:3px;
margin-top:3px;
cursor:pointer;
}
.comment-user-profile-name{
margin-top:7px;
}

@media(max-width:500px){
    .question-container1{
        width:400px;
        transition: 1s;
        transition-timing-function: ease-in-out;
    }
    textarea{
        width:390px;
        transition: 1s;
        transition-timing-function: ease-in-out;
    }
}