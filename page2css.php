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
    background-color:#ffffff4d;
}
.main-nav-container{

    position: sticky;
    top: 0px;
    background-color:rgb(254 254 254);
    box-shadow: 0 3px 5px 0 rgba(0, 0, 0, 0.1), 0 5px 19px 0 rgba(0, 0, 0, 0.15);
}
.nav-container{
    
    max-width: 1002px;
    margin-left: auto;
    margin-right: auto;
    display: grid;
    grid-template-columns: 7% 60% 16% 8% 10%;
}
.nav-container-img img{
    width: 50px;
    height: 60px;
    padding: 5px;
}
.blank-container{
    height: 20px;
    background-color: white;
}
.nav-container-search{
    display:grid;
    grid-template-columns:80% 20%;
}
.nav-container-search-input{
   
    display:grid;
    grid-template-columns:6% 86%;   
    height:40px;
    margin-top:15px;
    background-color:#f0f0f0;
    border-radius:5px;
    margin-right:5px;
}

.nav-container-logout input{
    border: none;
    border-radius: 55px;
    background-color:#fca139 ;
    width: 70%;
    height: 30px;
    cursor: pointer;
    margin-top:17px;
    margin-left:15px;
}
i{
    opacity:50%;
    margin-top:10px;
    margin-left:10px;
}
.nav-container-search-input input{
    border:none;
    outline:none;
    background-color:#f0f0f0;
}
.nav-container-search-btn{
    outline:none;
    border:none;
}

.nav-container-search-btn input{
    border: none;
    border-radius: 55px;
    background-color:#fca139 ;
    width: 70%;
    height: 30px;
    cursor: pointer;
    margin-top:17px;
    margin-left:15px;

}
.nav-container-search-btn input:hover{
    background-color:#ff8800 ;
}
.nav-container-addques input{
    border: none;
    border-radius: 55px;
    background-color:#fca139 ;
    width: 80%;
    height: 30px;
    cursor: pointer;
    margin-top:17px;
    margin-left:5px;
}
.nav-container-addques input:hover{
    background-color:#ff8800 ;
}
.nav-container-user{
    margin-top:5px;
    margin-right:10px;
    width:56px;
    height:56px;
    border-radius:50px;
    background-color:#e7e6e5;
}
.nav-container-user img{
    width:50px;
    height:50px;
    border-radius:50px;
    margin-left:3px;
    margin-top:3px;
    cursor:pointer;
}
.m-container{

    margin-left:450px;
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
    width:100px;
    margin-top:5px;
    margin-bottom:5px;

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
.like label ,.comment label{
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
.footer-container{
    position:sticky;
    bottom:0px;
    width:100%;
    margin-top: 231px;
    height:30px;
    background-color:white;
    box-shadow: 0 0px 0px 0 rgb(0 0 0 / 0%), 0 0px 5px 0 rgb(0 0 0 / 25%);
}
.footer{
    width:800px;
    height:25px;
    margin-left:350px;
}
.footer-container .footer ul{
    display: flex;
    flex-direction: row;
    justify-content: space-evenly;
    list-style:none;
    font-size:20px;
}
.footer-container .footer ul a{
    text-decoration:none;
    color:grey;
}
.footer-container .footer ul a:hover{
    color:black;
}







@media(max-width:1158px){
    .m-container{
        margin-left:350px;
        transition: 1s;
       transition-timing-function: ease-in-out;
    }
}
@media(max-width:1146px){
    .m-container{
        margin-left:250px;
        transition: 1s;
        transition-timing-function: ease-in-out;
    }
    .footer{
        width:700px;
    }
}
@media(max-width:1046px){
    .footer{
        width:600px;
    }
}
@media(max-width:943px){
    .m-container{
        margin-left:150px;
        transition: 1s;
       transition-timing-function: ease-in-out;
    }
    .footer{
        width:500px;
    }
}
@media(max-width:847px){
    .m-container{
        margin-left:100px;
        transition: 1s;
       transition-timing-function: ease-in-out;
    }
    .footer{
        margin-left:250px;
        width:400px;
    }
}
@media(max-width:748px){
    .nav-container{
        display:grid;
        grid-template-columns:10% 60% 20% 9%;
    }
    .m-container{
        margin-left:50px;
        transition: 1s;
       transition-timing-function: ease-in-out;
    }

    .nav-container-search-input{
        grid-template-columns:11% 81%;
    }
    .footer{
        margin-left:150px;
        width:300px;
    }
}
@media(max-width:648px){
    .nav-container{
        display:grid;
        grid-template-columns:10% 60% 20% 9%;
    }
    .m-container{
        margin-left:50px;
        width:460px;
        transition: 1s;
       transition-timing-function: ease-in-out;
    }

    .nav-container-search-input{
        grid-template-columns:11% 81%;
    }
    .footer{
        margin-left:150px;
        width:250px;
    }
}
@media(max-width:552px){
    .m-container{
        margin-left:5px;
        width:460px;
        transition: 1s;
       transition-timing-function: ease-in-out;
    }
    .nav-container{
        display:grid;
        grid-template-columns:11% 50% 26% 9%;
    }
    .nav-container-search {
        display: grid;
        grid-template-columns: 65% 39%;
    }
    .nav-container-search-input {
        grid-template-columns: 18% 82%;
    }
}   
