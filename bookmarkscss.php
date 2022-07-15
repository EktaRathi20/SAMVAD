<?php
    header('Content-type:text/css; charset:UTF-8');
?>

*{
    margin: 0px;
    padding: 0px;
}
.m-container{
margin-left:50px;
margin-top:10px;
width:600px;
height:250px;
}
.s-container{
display:grid;
grid-template-rows:50% 50%;
height:500px;

}
.post-container{
height:250px;
display:grid;
grid-template-rows:15% 62% 7% 15%;
box-shadow: 0 3px 5px 0 rgba(0, 0, 0, 0.1), 0 5px 19px 0 rgba(0, 0, 0, 0.15);
}
.post-date{
text-align:right;
}
.profile-container{
display:grid;
grid-template-columns:10% 90%;  
height:38px;
border-bottom:1px solid #e3dbdb;
margin-left:5px;
margin-right:5px;
}
.question-container{
height:174px;
margin-left:5px;
margin-right:5px;
border-bottom:1px solid #e3dbdb;    
}
.reaction-container{
display:flex;
justify-content: flex-start;
flex-direction: row;

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
.reaction-container button{
border:none;
outline:none;
width:50px;
}
.like{

width:90px;
margin-left:15px;
margin-top:5px;
margin-bottom:5px;
}
.dislike{

width:70px;
margin-left:0px;
margin-top:5px;
margin-bottom:5px;
background-color:#ffb733;
border-radius:5px;
}
.comment{
width:70px;
margin-top:5px;
margin-bottom:5px;
background-color:#ffb733;
border-radius:5px;
margin-left:15px;
}
.bookmark{

width:70px;
margin-top:5px;
margin-bottom:5px;
margin-left:15px;
background-color:#ffb733;   
border-radius:5px;
}
.removebookmark{

width:118px;
margin-top:5px;
margin-bottom:5px;
margin-left:15px;
background-color:#ffb733;   
border-radius:5px;
}
.comment input{
width:70px;
height:28px;
border:none;
border-radius:5px;
background-color:#ffb733;  
}
.bookmark input {
width:70px;
height:28px;
border:none;
border-radius:5px;
background-color:#ffb733;  
}
.removebookmark input {
width:118px;
height:28px;
border:none;
border-radius:5px;
background-color:#ffb733;  
}
.like input{
width:60px;
height:28px;
border:none;
border-radius:5px;
background-color:#ffb733; 
}
.dislike input{
width:70px;
height:27px;
border:none;
border-radius:5px;
background-color:#ffb733; 
}
iframe{
width: 100%;
height: 196px;
}

.like input:hover, .comment input:hover, .bookmark input:hover , .dislike input:hover , .removebookmark input:hover{
cursor:pointer;
background-color:#ff8800 ;
}
.like label{
margin-top:10px;
opacity:50%;
}
.reaction-container form{
display: flex;
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
    .post-container{
        width:400px;
        transition: 1s;
        transition-timing-function: ease-in-out;
    }
}