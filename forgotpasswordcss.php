<?php
    header('Content-type:text/css; charset:UTF-8');
?>


* {
  margin: 0px;
  padding: 0px;
}
.forgot-password {
  opacity: 1;
  position: absolute;
  top: 305px;
  left: 500px;
  width: 500px;
  height: 270px;
  background-color: white;
  border-radius: 10px;
  text-align: center;
}
.container2 {
  position: absolute;
  width: 100%;
  height: 836px;
  background-position: center center;
  background-attachment: fixed;
  background-repeat: no-repeat; background-size: cover;
  background-image: url(//qsf.fs.quoracdn.net/-4-ans_frontend_assets.images.home_page_bg_desktop.png-26-4770753d59b970e1.png);
  /* background-image: url(/project-bg.jpg); */
  
  opacity: 0.5;
}
.m-container2 {
  position: absolute;
  width: 100%;
  height: 836px;
  background: rgb(7 7 6 / 73%);
  opacity: 1;
}
.forgot-password p {
  font-size: large;
  border-bottom: 1px solid;
  padding: 10px;
  margin: 15px;
}

select{   
  padding: 10px;
  border:none ;
  border-radius: 55px;
  width: 97%;
  background-color:#f0f0f0 ;
  font-size:19px;
}
option{
  border: none;
  outline: none;
  background:none;
}
<!-- .next{
    border: none;
    border-radius: 55px;
    background-color:#fca139 ;
    width: 50%;
    height: 30px;
    cursor: pointer;
} -->

.forgot-password .input-field {
  margin: 5px;
  padding: 15px;
  border: none;
  border-radius: 55px;
  width: 92%;
  background-color: #f0f0f0;
  display: grid;
  grid-template-columns: 10% 90%;
}
.forgot-password .input-field input {
  outline: none;
  border: none;
  background-color: #f0f0f0;
}

.forgot-password-next input{
  padding: 10px;
  margin-left: 20px;
  margin-top: 2px;
  text-align: center;
  border-radius: 50px;
  border:none;
  width: 100px;
  background-color: #fca139;
  height: 35px;
  cursor: pointer;
  
}
.forgot-password-next input:hover {
    background-color: #ff7b00;
}
i {
  opacity: 50%;
}
@media(max-width:1090px){
 .forgot-password{
    position: absolute;
    top: 305px;
    left: 400px;
    width: 500px;
    height: 270px;
    transition: 1s;
    transition-timing-function: ease-in-out;
 }   
}
@media(max-width:900px){
    .forgot-password{
       position: absolute;
       top: 305px;
       left: 250px;
       width: 500px;
       height: 270px;
       transition: 1s;
    transition-timing-function: ease-in-out;
    }   
   }
@media(max-width:750px){
    .forgot-password{
       position: absolute;
       top: 305px;
       left: 150px;
       width: 500px;
       height: 270px;
       transition: 1s;
    transition-timing-function: ease-in-out;
    }   
   }
@media(max-width:650px){
    .forgot-password{
       position: absolute;
       top: 250px;
       left: 50px;
       width: 500px;
       height: 270px;
       transition: 1s;
    transition-timing-function: ease-in-out;
    }   
}
@media(max-width:560px){
    .forgot-password{
       position: absolute;
       top: 150px;
       left:15px;
       width: 500px;
       height: 270px;
       transition: 1s;
    transition-timing-function: ease-in-out;
    }   
}
@media(max-width:518px){
    .forgot-password{
       position: absolute;
       top: 50px;
       left:10px;
       width: 436px;
       height: 290px;
       transition: 1s;
    transition-timing-function: ease-in-out;
  }   
}
@media(max-width:448px){
    .forgot-password{
       position: absolute;
       top: 30px;
       left:50px;
       width: 336px;
       height: 200px;
       transition: 1s;
    transition-timing-function: ease-in-out;
  }  
  .forgot-password p{
    font-size:13px;
    padding:0px;
  } 
  .forgot-password .input-field{
    padding:5px;
  }
  .forgot-password select{
    padding:5px;
    width:95%;
}
@media(max-width:385px){
    .forgot-password{
       position: absolute;
       top: 30px;
       left: 15px;
       width: 336px;
       height: 200px;
       transition: 1s;
    transition-timing-function: ease-in-out;
  }  
  .forgot-password p{
    font-size:13px;
    padding:0px;
  } 
  .forgot-password .input-field{
    padding:5px;
  }
  .forgot-password select{
    padding:5px;
    width:95%;
}
@media(max-width:353px){
    .forgot-password{
       position: absolute;
       top: 30px;
       left: 0px;
       width: 336px;
       height: 200px;
       transition: 1s;
    transition-timing-function: ease-in-out;
  }  
  .forgot-password p{
    font-size:13px;
    padding:0px;
  } 
  .forgot-password .input-field{
    padding:5px;
  }
  .forgot-password select{
    padding:5px;
    width:95%;
}