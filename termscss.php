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
.s-container1{
    width: 800px;
    height: 400px;
    margin-left: 450px;
    /* border: 1px solid; */
    display: flex;
    flex-direction: row;
    padding: 20px;
    margin-bottom: 20px;
    background-color:rgb(249 249 249 / 91%);
    transition: 1s;
    transition-timing-function: ease-in-out;
}

.s-container1-img img{
    width: 300px;
    height: 395px;
}
.s-container1-content{
    padding: 40px;
    /* border: 1px solid; */
}
.s-container1-content h4{
    border-bottom:1px solid #dee0e1;
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    font-size: 25px;
}
.s-container1-content ul{
    box-sizing: border-box;
    list-style:disc ;
   
}
.s-container1-content li{
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    font-size: 20px;
    padding: 10px;
    margin: 5px;  
}
.s-container2{
    width: 840px;
    height: 450px;
    margin-left: 450px;
    background-color:rgb(249 249 249 / 91%);
    /* border: 1px solid; */
    transition: 1s;
    transition-timing-function: ease-in-out;
}
.s-container2 h4{
    border-bottom:1px solid #dee0e1;
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    font-size: 25px;
    text-align: center;
    padding: 20px;
}
.s-container2 h5{
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    font-size: 20px;
}
.s-container2 ul{
    padding: 20px;
    box-sizing: border-box;
    list-style:disc ;
}
.s-container2 li{
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    font-size: 20px;
    padding: 10px;
    margin: 5px;  
}
@media(max-width:1342px){
    .s-container1{
        margin-left: 300px;
    }
    .s-container2{
        margin-left: 300px;
    }
}
@media(max-width:1140px){
    .s-container1{
        margin-left: 170px;
    }
    .s-container2{
        margin-left: 170px;
    }
}
@media(max-width:1000px){
    .s-container1{
        margin-left: 100px;
    }
    .s-container2{
        margin-left: 100px;
    }
}
@media(max-width:940px){
    .s-container1{
        margin-left: 50px;
    }
    .s-container2{
        margin-left: 50px;
    }
}
@media(max-width:887px){
    .s-container1{
        margin-left: 0px;
    }
    .s-container2{
        margin-left: 0px;
    }
}
@media(max-width:884px){
    .s-container1{
        margin-left: 60px;
        width: 700px;
    }
    .s-container2{
        margin-left: 60px;
        width: 740px;
    }
}   
@media(max-width:800px){
    .s-container1{
        margin-left: 60px;
        width: 600px;
    }
    .s-container2{
        margin-left: 60px;
        width: 640px;
    }
}  
@media(max-width:700px){
    .s-container1{
        margin-left: 60px;
        width: 500px;
        height: 515px;
    }
    .s-container2{
        margin-left: 60px;
        width: 540px;
        height: 525px;
    }
    .s-container1-content{
        padding: 15px;
       
    }
}  
@media(max-width:596px){
    .s-container1{
        margin-left: 0px;
        width: 500px;
        height: 515px;
    }
    .s-container2{
        margin-left: 0px;
        width: 540px;
        height: 525px;
    }
    .s-container1-content{
        padding: 15px;
        
    }
} 