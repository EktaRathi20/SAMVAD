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
    /* background-color:#ffffff4d; */
    display: grid;
    grid-template-rows: 7% 2% 89%;
    background-color: rgb(249 244 235 / 15%);

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
    grid-template-rows: 25% 1% 74%;
    background-color:rgb(241 241 241 / 2%);
    transition: 1s;
    transition-timing-function: ease-in-out;
}
.useraccount{
    width: 700px;
    display: grid;
    grid-template-columns: 30% 42% 15% 13%;
    box-shadow: 0 3px 5px 0 rgba(0, 0, 0, 0.1), 0 5px 19px 0 rgba(0, 0, 0, 0.15);
}
.delete-user input{
    border: none;
    border-radius: 5px;
    background-color: #fca139;
    width: 98%;
    height: 20px;
    cursor: pointer;
}
.delete-user input:hover ,.add-user-photo input:hover{
    background-color:#ff8800 ;
}
.blank-container2{
    width: 700px;
}
.user-photo{
    box-shadow: 0 3px 5px 0 rgba(0, 0, 0, 0.1), 0 5px 19px 0 rgba(0, 0, 0, 0.15);
    /* border: 1px solid; */
    width: 146px;
    height: 146px;
    margin-top: 4px;
    border-radius: 5px;
    margin-left:20px ;
    
}
.user-photo img{
    width: 140px;
    height: 140px;
    margin-left: 3px;
    margin-top: 3px;
    border-radius: 5px;
}
.user-name-following{
    margin-top: 30px;
    width: 90%;
    margin-left: 5px;
    /* border:1px solid; */
    height: 150px;
    display: grid;
    grid-template-rows: 40% 60%;
}

.user-name{
    
    margin-top:15px;  
}
.user-name label{
      
    font-size: 20px;
    font-family: 'Times New Roman', Times, serif;
    margin-left: 50px;
}
.username{
    
    margin-top:15px; 
    border-bottom:1px solid #d0cfcf; 
}
.username label{
    font-size: 30px;
    font-family: 'Times New Roman', Times, serif;
    margin-left: 50px;
}
.user-following{
    margin-top:10px;
}
.user-following label{
    font-size: 20px;
    font-family: 'Times New Roman', Times, serif;
    margin-left: 20px;
}
.user-following a{
    text-decoration:none;
    color:black;
}
.useraccount2{
    box-shadow: 0 3px 5px 0 rgba(0, 0, 0, 0.1), 0 5px 19px 0 rgba(0, 0, 0, 0.15);
    width: 700px;
}
.mini-nav{
    margin-left: 10px;
    margin-right: 10px;
    border-bottom: 1px solid rgb(216, 213, 213);
  
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
  
}
.add-user-photo a , .edit-user a{
    
    text-decoration:none;
    color:grey;
}
.edit-user a:hover{
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
   
    margin-left:24px;
    margin-right:12px;
}
.add-user-photo input{
    border: none;
    border-radius: 55px;
    background-color: #fca139;
    width: 85%;
    height: 20px;
    cursor: pointer;
}
.user-photo-m{
    display:grid;
    grid-template-rows: 65% 19% 18%;
    border-right: 1px solid #dbd7d7;
    margin: 5px;
}
i{
    opacity:50%;
}
.usercontent1 ,.usercontent2, .usercontent3{
    
    width: 700px;
    height:750px;
}
.usercontent1 iframe,.usercontent2 iframe, .usercontent3 iframe{
    height:698px;
    width:696px;
    border:none;
}

<!-- #x1{
    display:block;
} -->
#x2{
    display:none;
}
#x3{
    display:none;
}
@media(max-width:1068px){
    .useraccount-main{
        margin-left:270px;
    }
}
@media(max-width:976px){
    .useraccount-main{
        margin-left:170px;
    }
}
@media(max-width:886px){
    .useraccount-main{
        margin-left:70px;
    }
}
@media(max-width:772px){
    .useraccount-main{
        margin-left:20px;
        transition: 1s;
        transition-timing-function: ease-in-out;
    }
    .useraccount-main, .useraccount,.blank-container2,.useraccount2 ,.usercontent1, .usercontent2, .usercontent3 ,.usercontent1 iframe, .usercontent2 iframe, .usercontent3 iframe {
        width:500px;
        transition: 1s;
        transition-timing-function: ease-in-out;
    }
    .useraccount{
        display: grid;
        transition: 1s;
        transition-timing-function: ease-in-out;
        grid-template-columns: 40% 45% 15%;
    }
}