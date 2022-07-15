<?php
    header('Content-type:text/css; charset:UTF-8');
?>

*{
    margin: 0px;
    padding: 0px;
}
.reset-password{
    opacity: 1;
    position: absolute;
    top: 305px;
    left: 500px;
    width:500px;
    height: 228px;
    background-color: white;
    border-radius: 10px;
    text-align: center;
}
.container3{
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
.m-container3{
    position: absolute;
    width: 100%;
    height: 836px;
    background: rgb(7 7  6 / 73%);
    opacity: 1;
}
.reset-password p{
    font-size: large;
    border-bottom: 1px solid;
    padding: 10px;
    margin: 15px;
}
.reset-password .input-field{
    margin: 5px;
    padding: 15px;
    border:none ;
    border-radius: 55px;
    width: 92%;
    background-color:#f0f0f0 ;
    display: grid;
    grid-template-columns: 10% 90%;
}
.reset-password .input-field input{
    border: none ;
    background-color:#f0f0f0 ;
    outline:none;
   
}
.reset-password-btn{
    border: none;
    border-radius: 55px;
    background-color:#fca139 ;
    width: 30%;
    height: 30px;
    cursor: pointer;
    outline:none;
   
}
.reset-password-btn:hover{
    background-color:#ff7b00 ;
}
i{
    opacity: 50%;
}

@media(max-width:1090px){
    .reset-password{
       position: absolute;
       top: 305px;
       left: 400px;
       width: 500px;
       height: 228px;
       transition: 1s;
       transition-timing-function: ease-in-out;
    }   
   }
   @media(max-width:900px){
       .reset-password{
          position: absolute;
          top: 305px;
          left: 250px;
          width: 500px;
          height: 228px;
          transition: 1s;
       transition-timing-function: ease-in-out;
       }   
      }
   @media(max-width:750px){
       .reset-password{
          position: absolute;
          top: 305px;
          left: 150px;
          width: 500px;
          height: 228px;
          transition: 1s;
       transition-timing-function: ease-in-out;
       }   
      }
      @media(max-width:650px){
       .reset-password{
          position: absolute;
          top: 250px;
          left: 50px;
          width: 500px;
          height: 228px;
          transition: 1s;
       transition-timing-function: ease-in-out;
       }   
      }
      @media(max-width:560px){
       .reset-password{
          position: absolute;
          top: 150px;
          left:15px;
          width: 500px;
          height: 228px;
          transition: 1s;
       transition-timing-function: ease-in-out;
       }   
      }
      @media(max-width:518px){
       .reset-password{
          position: absolute;
          top: 50px;
          left:10px;
          width: 436px;
          height: 228px;
          transition: 1s;
       transition-timing-function: ease-in-out;
       }   
       
      }
      @media(max-width:443px){
    .reset-password{
       position: absolute;
       top: 30px;
       left: 15px;
       width: 336px;
       height: 150px;
       transition: 1s;
    transition-timing-function: ease-in-out;
  }  
  .reset-password p{
    font-size:13px;
    padding:0px;
  } 
  .reset-password .input-field{
    padding:5px;
  }
}
@media(max-width:356px){
    .reset-password{
       position: absolute;
       top: 30px;
       left: 0px;
       width: 317px;
       height: 150px;
       transition: 1s;
    transition-timing-function: ease-in-out;
  }  
  .reset-password p{
    font-size:13px;
    padding:0px;
  } 
  .reset-password .input-field{
    padding:5px;
  }
}