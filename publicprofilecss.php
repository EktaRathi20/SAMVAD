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
    display: grid;
    grid-template-rows: 7% 2% 89%;
    background-color: rgb(253 253 253);

}
.nav-container{
    /* border: 1px solid; */
    position: sticky;
    top: 0px;
    background-color:rgb(254 254 254);
    box-shadow: 0 3px 5px 0 rgba(0, 0, 0, 0.1), 0 5px 19px 0 rgba(0, 0, 0, 0.15);
    display: flex;
    justify-content:space-around;
}
.nav-container-img img{
    width: 50px;
    height: 60px;
    padding: 5px;
}
.nav-container-contact-us{
    margin-top: 20px;
}
.nav-container-contact-us a{
    text-decoration: none;
    font-family:'Times New Roman', Times, serif;
    font-size: 25px;
    color: rgb(217, 68, 14);
}
.blank-container{
    height: 20px;
    background-color: white;
}
.useraccount-main{
    width: 700px;
    margin-left: 370px;
    display: grid;
    grid-template-rows:22% 1% 77%;
    background-color: rgb(253 253 253 / 0%);
}
.useraccount{
    display: grid;
    grid-template-columns:30% 70%;
    box-shadow: 0 3px 5px 0 rgba(0, 0, 0, 0.1), 0 5px 19px 0 rgba(0, 0, 0, 0.15);
}
.user-photo{
    box-shadow: 0 3px 5px 0 rgba(0, 0, 0, 0.1), 0 5px 19px 0 rgba(0, 0, 0, 0.15);
    /* border: 1px solid; */
    width: 150px;
    height: 150px;
    margin-top: 4px;
    border-radius: 5px;
    margin-left:20px ;
    
}
.user-photo img{
    width: 140px;
    height: 140px;
    margin-left: 5px;
    margin-top: 5px;
    border-radius: 5px;
}
.user-name-following{
    margin-top: 30px;
    width: 90%;
    margin-left: 5px;
    /* border:1px solid; */
    height: 150px;
    display: grid;
    grid-template-columns: 60% 40%;
}

.user-name label{
    font-size: 20px;
    font-family: 'Times New Roman', Times, serif;
    margin-left: 40px;
}
.username{
    font-size: 30px;
    font-family: 'Times New Roman', Times, serif;
    margin-top:20px;
    border-bottom:1px solid grey;
}
.username label{
    
    margin-left: 40px;
}
.user-following{
    margin-top:10px;
    /* border: 1px solid; */
    /* background-color: cadetblue; */
}
.user-following label{
    font-size: 20px;
    font-family: 'Times New Roman', Times, serif;
    margin-left: 20px;
}
.useraccount2{
    box-shadow: 0 3px 5px 0 rgba(0, 0, 0, 0.1), 0 5px 19px 0 rgba(0, 0, 0, 0.15);
    /* border: 1px solid; */
}
.mini-nav{
    margin-left: 10px;
    margin-right: 10px;
    border-bottom: 1px solid rgb(216, 213, 213);
    /* border: 1px solid; */
}
.mini-nav ul{
    display: flex;
    flex-direction: row;
}
.mini-nav ul li{
   
    list-style:none ;
    margin-left: 20px;
}
.mini-nav ul li a{
    text-decoration: none;
    color: grey;
    font-size: 20px;
}
.blank-container2{
    height: 5px;
    /* border: 1px solid; */
}
.add-user-photo a , .edit-user a{
    
    text-decoration:none;
    color:grey;
}
.add-user-photo a:hover , .edit-user a:hover{
    opacity:100%;
    color:black;
}
.mini-nav ul li a:hover{
    color:black;
}
.edit-user{
    margin-left:10px;
    font-family: 'Times New Roman', Times, serif;

}
.add-user-photo{
    border-top:1px solid;
    margin-left:24px;
    margin-right:12px;
}
.user-photo-m{
    display:grid;
    grid-template-rows:80% 14%;
    border-right: 1px solid;
    margin: 5px;
    
}
i{
    opacity:50%;
}
.user{
    display:grid;
    grid-template-columns:50% 50%;
}
.follow{
    margin-top:10px;
}
.follow input{
    background-color:blue;
    color:white;
    border:none;
    border-radius:2px;
    padding:5px;
    cursor:pointer;
    margin-top:20px;
}
.follow input:hover{
    background-color:#185a73;
}
.usercontent1 ,.usercontent2{
    width: 700px;
    height:750px;
}
.question-container {
    margin-left:50px;   
    margin-top:15px;
    width: 600px;
    height:200px;
   
    display:grid;
    box-shadow: 0 3px 5px 0 rgba(0, 0, 0, 0.1), 0 5px 19px 0 rgba(0, 0, 0, 0.15);
    grid-template-rows:80% 20%;;
    
}
.question-date {
    border-bottom:1px solid #80808040;
}
.question{

    border-bottom:1px solid #80808040;
}

.ques-date{
    text-align:right;
    border-bottom:1px solid #80808040;
}
.ans-date{
    text-align:right;
    border-bottom:1px solid #80808040;
}


.question-answer-container{
    margin-left:50px;   
    margin-top:15px;
    width: 600px;
    height:200px;
    display:grid;
    box-shadow: 0 3px 5px 0 rgba(0, 0, 0, 0.1), 0 5px 19px 0 rgba(0, 0, 0, 0.15);
    grid-template-rows:40% 10% 40% 10% ;

}
#x1{
    display:block;
}
#x2{
    display:none;
}
.username-following{
    display: grid;
    grid-template-rows: 50% 50%
}
@media(max-width:1063px){
    .useraccount-main{
        margin-left:270px;
    }
}
@media(max-width:969px){
    .useraccount-main{
        margin-left:170px;
    }
}
@media(max-width:868px){
    .useraccount-main{
        margin-left:70px;
    }
}
@media(max-width:759px){
    .useraccount-main{
        margin-left:0px;
        width:550px;
    }
    .useraccount{
        width:550px;
        display: grid;
        grid-template-columns: 35% 65%;
    }
    .user-name-following{
        display: grid;
        grid-template-columns: 66% 34%;
    }
    .blank-container2{
        width:550px;
    }
    .useraccount2,.usercontent1,.usercontent2{
        width:550px;
    }
    .question-container,.question-answer-container{
        width:520px;
        margin-left:10px;
    }
}