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
    background-color: rgb(253 240 221 / 17%);

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
.form{
    margin-top: 20px;
    border-radius: 5px;
    width: 430px;
    height: 290px;
    margin-left: 550px;
    background-color: #ffe0b7;
    padding: 10px;
}
form{
    margin-top:20px;
}
input{
    border: none;
    outline: none;
    background-color:  rgb(247 246 246);
}
.input-field{
    display: grid;
    grid-template-columns: 10% 80%;
    padding: 5px;
    margin: 25px;
    width: 87%;
    border: none;
    border-radius: 5px;
    background-color: rgb(247 246 246);
}
.btn{
    padding: 5px;
    margin-left: 25px;
    width: 89%;
    border: none;
    border-radius: 5px;
    background-color: #ff7f1d;
}
.btn:hover{
    background-color: #ff5100;
}
i{
    opacity: 50%;
}