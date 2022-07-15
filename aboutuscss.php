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
.container2{
    display: grid;
    grid-template-rows: 400px 270px 270px;
    
}
.s-container1{
    margin-top: 10px;
    margin-left: 450px;
    background-color:#ededed33;
    box-sizing: border-box;
    width: 750px;
    display: flex;
    flex-direction:column;
    justify-content: center;
    text-align: center;
    border-radius: 10px;
    transition: 1s;
    transition-timing-function: ease-in-out;
}
.s-container1 .img1{
    box-sizing: border-box;
    width: 600px;
    height: 350px;
    margin-left: 50px;
}
.s-container2{
    border-radius: 10px;
    margin-top: 20px;
    margin-left: 450px;
    background-color:#ededed33;
    box-sizing: border-box;
    width: 750px;
    display: flex;
    flex-direction:row;
    justify-content: center;
    text-align: center;
    transition: 1s;
    transition-timing-function: ease-in-out;
}
.s-container2 .img2{
    box-sizing: border-box;
    width: 600px;
    height: 250px;
    margin-left: 50px;
}
.s-container3{
    border-radius: 10px;
    margin-top: 20px;
    margin-left: 450px;
    background-color:#ededed33;
    box-sizing: border-box;
    width: 750px;
    display: flex;
    flex-direction:row;
    justify-content: center;
    text-align: center;
    transition: 1s;
    transition-timing-function: ease-in-out;
}
.s-container3 .img3{
    box-sizing: border-box;
    width: 600px;
    height: 250px;
    margin-left: 50px;
    padding: 10px;
}
h2{
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    font-size: 30px;
    border-bottom: 1px solid rgb(220, 214, 214);
    
}
p{
   font-family:'Times New Roman', Times, serif;
    font-size: 22px;
    padding: 10px;
}
@media(max-width:1310px){
    .s-container1{
        margin-left: 250px;
    }
    .s-container2{
        margin-left: 250px;
    }
    .s-container3{
        margin-left: 250px;
    }
}
@media(max-width:1050px){
    .s-container1{
        margin-left: 120px;
    }
    .s-container2{
        margin-left: 120px;
    }
    .s-container3{
        margin-left: 120px;
    }
}
@media(max-width:924px){
    .s-container1{
        margin-left: 60px;
    }
    .s-container2{
        margin-left: 60px;
    }
    .s-container3{
        margin-left: 60px;
    }
}
@media(max-width:870px){
    .s-container1{
        margin-left: 0px;
    }
    .s-container2{
        margin-left: 0px;
    }
    .s-container3{
        margin-left: 0px;
    }
}
@media(max-width:805px){
    .s-container1{
        margin-left: 100px;
        width: 600px;
    }
    .s-container2{
        margin-left: 100px;
        width: 600px;
    }
    .s-container3{
        margin-left: 100px;
        width: 600px;
    }
    .s-container1 .img1{
        width: 500px;
        height: 200px;
        
    }
    .s-container2 .img2{
        width: 400px;
        height: 300px;
       
    }
    .s-container3 .img3{
        width: 400px;
        height: 300px;
       
    }
}
@media(max-width:700px){
    .container2{
        display: grid;
        grid-template-rows: 400px 300px 300px;
        
    }
    .s-container1{
        margin-left: 50px;
        width: 500px;
        height: 400px;
    }
    .s-container2{
        margin-left: 50px;
        width: 500px;
        height: 270px;
       margin-bottom: 10px;
    }
    .s-container3{
        margin-top: 10px;
        margin-left: 50px;
        height: 270px;
        width: 500px;
    }
    .s-container1 .img1{
        width: 400px;
        height: 200px;
        
    }
    .s-container2 .img2{
        width: 650px;
        height: 200px;
        
    }
    .s-container3 .img3{
        width: 650px;
        height: 200px;
       
    }
}