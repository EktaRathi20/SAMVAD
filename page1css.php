<?php
    header('Content-type:text/css; charset:UTF-8');
?>
*{
    margin: 0px;
    padding: 0px;
    
    
}
.container{
    position:absolute;
    width: 100%;
    height: 830px;
   background-position: center center;
    background-attachment: fixed;
    background-repeat: no-repeat; background-size: cover;
    background-image: url(//qsf.fs.quoracdn.net/-4-ans_frontend_assets.images.home_page_bg_desktop.png-26-4770753d59b970e1.png);
    /* background-image: url(/project-bg.jpg); */
    opacity: 0.7;
}
.m-container{
    box-sizing: border-box;
    position: absolute;
    width: 100%;
    height: 836px;
}
.s-container{
    transition: 1s;
    transition-timing-function: ease-in-out;
    position: absolute;
    top: 200px;
    left: 440px;
    background-color: white;
    display: grid;
    border: 2px outset;
    border-radius: 5px;
    width: 635px;
    height: 560px;
    display: grid;
    grid-template-rows:93% 7%;
    <!-- grid-auto-rows: 93% 7%; -->
    opacity: 1;
}
.form-container{  
    padding: 10px;
    background-color: white;
    display: grid;
    grid-template-rows:15% 85%
}

.form_bottom_footer-container{
    background-color: rgb(236, 231, 231);
    
    
}
.form_bottom_footer-container ul{
    display: flex;
    flex-direction: row;
    justify-content:center;
    
    
}
.form_bottom_footer-container li{
    list-style: none;
    
   margin: 10px;
   
}
.form_bottom_footer-container li a{
    text-decoration: none;
    color: rgb(92, 90, 90);
}
.form_top-container{
    margin-top: 4px;
    margin-bottom: 4px;
    border-bottom: 1px solid;
}
.form_top_title-container{
    font-family: Georgia, 'Times New Roman', Times, serif;
    font-size: 30px;
    text-align: center;
    color: rgb(220, 93, 3);
}
.form_top_tagline-container{
    text-align: center;
    font-weight: 900;
}
.form_middle-container{
    margin-top: 10px;
    display: grid;
    grid-template-columns:308px  300px;
    
}
.form_middle_left_signup-container{
    
    text-align: center;
    margin-left: 5px;
}
.form_middle_right_signin-container{
    text-align: center;
    margin-left: 5px;
    border-left: 1px solid;
    padding-left: 10px;
   
}
.signup-para{
    font-size: 11px;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    color: rgb(113, 113, 113);
    padding-bottom: 10px;
}
.form-btn a{
    padding: 2px;
    color: rgb(113, 113, 113);
    text-decoration: none;
    cursor: pointer;   
  }

.form_middle_left_signup-container .input-field ,.form_middle_right_signin-container .input-field{
    margin: 5px;
    padding: 10px;
    border:none ;
    border-radius: 55px;
    width: 90%;
    display: grid;
    grid-template-columns: 10% 90%;
    background-color:#f0f0f0 ;
}
input{
    border: none;
    outline: none;
    background:none;
}
select{
   
    padding: 10px;
    border:none ;
    border-radius: 55px;
    width: 95%;
    
    background-color:#f0f0f0 ;
}
option{
    border: none;
    outline: none;
    background:none;
}
i{
    opacity: 50%;
}
.signup-btn,.signin-btn{
    border: none;
    border-radius: 55px;
    background-color:#fca139 ;
    width: 50%;
    height: 30px;
    cursor: pointer;
}
.signup-btn:hover,.signin-btn:hover{
    background-color:#ff7b00 ;
}
.form_bottom_footer-container ul li a:hover{
    color:black;
}
@media(max-width:1150px){


.m-container{
    width: 100%;
}
.s-container{
    position: absolute;
    top: 200px;
    left: 250px;
    transition: 1s;
    transition-timing-function: ease-in-out;
}
}
@media(max-width:890px){

    .m-container{
        width: 100%;
    }
    .s-container{
        position: absolute;
        top: 200px;
        left: 150px;
        transition: 1s;
        transition-timing-function: ease-in-out;
    }
}
@media(max-width:790px){

    .m-container{
        width: 100%;
    }
    .s-container{
        position: absolute;
        top: 200px;
        left: 50px;
        transition: 1s;
        transition-timing-function: ease-in-out;
    }
}
@media(max-width:700px){
    
    .m-container{
        width: 100%;
    }
    .s-container{
        position: absolute;
        
        height: 540px;
        top: 100px;
        left: 50px;
        transition: 1s;
        transition-timing-function: ease-in-out;
    }
}
@media(max-width:670px) {
    .m-container{
        width: 100%;
    }
    .s-container{
        position: absolute;
        height: 540px;
        top: 50px;
        left: 10px;
        transition: 1s;
        transition-timing-function: ease-in-out;
    }
}
@media(max-width:642px) {
    .m-container{
        width: 100%;
    }
    .s-container{
        position: absolute;
        width: 500px;
        height: 500px;
        top: 50px;
        left: 10px;
        transition: 1s;
        transition-timing-function: ease-in-out;
    }
    .form-container{
        width:500px;
        padding:0px;
        display: grid;
        grid-template-rows: 15% 85%;
    }
    .form_top-container{
        width:500px;
        margin-left:0px;
        margin-right:0px;
    }
    .form_middle-container{
        width:500px;
        display:grid;
        grid-template-columns:250px 250px;
    }
    .form_middle_left_signup-container{
        width:250px;
    }
    .form_middle_left_signup-container .input-field, .form_middle_right_signin-container .input-field{
        padding:5px;
    }
    .signup-btn, .signin-btn{
        width:45%;
    }
    .form_middle_right_signin-container{
        margin-bottom:3px;
    }
} 
@media(max-width:515px) {
    .m-container{
        width: 100%;
    }
    .s-container{
        position: absolute;
        width: 400px;
        height: 370px;
        top: 30px;
        left: 10px;
        transition: 1s;
        transition-timing-function: ease-in-out;
    }
    .form-container{
        width:400px;
        padding:0px;
        display: grid;
        grid-template-rows: 15% 85%;
    }
    .form_top-container{
        width:400px;
        margin-left:0px;
        margin-right:0px;
    }
    .form_middle-container{
        width:400px;
        display:grid;
        grid-template-columns:200px 200px;
    }
    .form_middle_left_signup-container{
        width:200px;
    }
    .form_middle_left_signup-container .input-field, .form_middle_right_signin-container .input-field{
        padding:0px;
    }
    .signup-btn, .signin-btn{
        width:35%;
    }
    .form_middle_right_signin-container{
        margin-bottom:3px;
    }
    .form_top_title-container{
        font-size:20px;
    }
    .security-ques select{
        width:87%;
        padding:0px;
    }
    .form_bottom_footer-container li{
        margin:5px;
    }
} 