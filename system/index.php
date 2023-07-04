<?php
session_start();

    include("connection.php");
    include("functions.php");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SC Financial Assistance System</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<style>
@import url('displayswap.css');

:root{
    --black: #000000;
    --white : #ffffff;
    --darkblue: #2D59B2 ;
    --box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
}
*{
    font-family: 'Quicksand', sans-serif;
    margin: 0; padding: 0;
    box-sizing: border-box;
    outline: none;
    border: none;
    text-decoration: none;
    text-transform: none;
    transition: .2s linear;
}
body{
    background: var(--white);
    display: block;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
}
html{
    font-size: 62.5%;   
    overflow-x: hidden;
    scroll-padding-top: 7rem;
    scroll-behavior: smooth;
    border-style: ridge;
    border-color: var(--darkblue);
}
html::-webkit-scrollbar{
    width: .8rem;
}
html::-webkit-scrollbar-track{
    background: transparent;
}
html::-webkit-scrollbar-thumb{
    background-color: var(--darkblue);
    border-radius: 5rem;
}
.header{
    top: 0;right: 0;left: 0;
    background-color: var(--darkblue);
    display: flex;
    align-items: center;
    justify-content: space-between;
    position: fixed;
    padding: 1.4rem 7%; 
    z-index: 999;
}
.header .logoContent{
    display: flex;
    align-items: center;
}
.header .logoContent .logo img{
    height: 5rem;
}
.header .logoContent .logoName {
    color: var(--white);
    font-size: 1.5rem;
    font-weight: bolder;
    padding-left: 5px;
}
span{
    color: #b3dcfa;
}
.header .f{
    color: #00008b;
}
.header .a{
    color: #3aaded;
}
.header .navbar a{
    font-size: 2rem;
    margin-right: 3rem;
    color: var(--white);
    font-weight: bold;
    transition: 1s;
}
.header .navbar a:hover{
    border-bottom: .1rem solid var(--white);
    padding-bottom: .4rem;
}
.navbar .btnRegister{
    width: 125px;
    height: 48px;
    background: transparent;
    border: 2px solid var(--white);
    outline: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 1.7rem;
    font-weight: bold;
    color: var(--white);
    margin-left: 10px;
    transition: .5s;
}
.navbar .btnRegister:hover{
    background: var(--white);
    color: var(--darkblue);
}
#menu-bar{
    display: none;
}





.home {
    min-height: 100vh;
    display: flex;
    align-items: center;
    background: url(images/back.png) no-repeat;
    background-size: cover;
    background-position: center center;
}
.home .homeContent{
    width: 50%;
    float: center;
    text-align: center;
    padding: 10rem;
}
.home .homeContent h2{
    font-size: 7rem;
    font-weight: bolder;
    margin-bottom: 2rem;
    line-height: 7rem;
    color: var(--white);
    text-shadow: 0 1px #00008b, -1px 0 #326fc4, -1px 2px #00008b, -2px 1px #326fc4,
		-2px 3px #00008b, -3px 2px #326fc4, -3px 4px #00008b, -4px 3px #326fc4,
		-4px 5px #00008b, -5px 4px #326fc4, -5px 6px #00008b, -6px 5px #326fc4,
		-6px 7px #00008b, -7px 6px #326fc4, -7px 8px #00008b, -8px 7px #326fc4;
}
.home .homeContent p{
    font-size: 2.2rem;
    line-height: 2;
    font-weight: bolder;
    margin-bottom: 2rem;
    color: #00008b;
}





.manage {
    padding: 50px 0px;
    width: 100%;
    background: url(images/back4.png) no-repeat center center/cover;
    min-height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
}
.manage .manageContent {
    display: flex;
    justify-content: center;
    align-items: center;
}
.manage .manageContent .box {
    position: relative;
    width: 320px;
    background: #ffffff;
    width: 350px;
    height: 350px;
    border-radius: 20px;
    box-shadow: 0 15px 45px rgba(0, 0, 0, .1);
    margin: 0 20px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    text-align: center;
}
.manage .manageContent .box:before{
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background:#00008b;
    border-radius: 20px;
    transform: scaleY(0);
    transform-origin: top;
    transition: transform 0.5s;
}
.manage .manageContent .box:hover:before{
    transform: scaleY(1);
    transform-origin: bottom;
    transition: transform 0.5s;
}
.manage .manageContent .box i {
    position: relative;
    z-index: 2;
    font-size: 60px;
    color: var(--darkblue);
    transition: 0.5s;
    margin-bottom: 20px;
}
.manage .manageContent .box:hover i{
    color: #70bff8;
}
.manage .manageContent .box h3 {
    position: relative;
    font-size: 4em;
    z-index: 2;
    color: var(--darkblue);
    transition: 0.5s;
    margin-bottom: 10px;
}
.manage .manageContent .box p {
    position: relative;
    font-size: 2em;
    z-index: 2;
    color: #326fc4;
    transition: 0.5s;
    margin-bottom: 0;
}
.manage .manageContent .box:hover h3,
.manage .manageContent .box:hover p{
    color: #99d4ff;
}





.heading3{
    text-align: center;
    font-size: 2.6rem;
    margin-bottom: 3rem;
    color: var(--white);
    text-shadow: 4px 4px 0px #0071C9, 
    6px 6px 0px #99D4FF;
}
.heading4{
    text-align: center;
    font-size: 2.6rem;
    margin-bottom: 3rem;
    color: var(--darkblue);
    text-shadow: 4px 4px 0px #A5D9Ff, 
    6px 6px 0px #5CB8FA;
}
.heading5{
    text-align: center;
    font-size: 2.6rem;
    margin-bottom: 3rem;
    color: var(--darkblue);
    text-shadow: 4px 4px 0px #A5D9FF, 6px 6px 0px #5CB8FA;
    position: absolute;
    top: 15%;
    left: 50%;
    transform: translateX(-50%);
    z-index: 1;
}





.assistance {
    padding: 50px 0px;
    width: 100%;
    background: url(images/back5.png) no-repeat center center/cover;
    min-height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    position: relative;
}
.assistance .assistanceContent {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-wrap: wrap;
}
.assistance .assistanceContent .card {
    position: relative;
    width: 400px;
    height: 180px;
    background: var(--darkblue);
    transition: 0.5s;
    margin: 15px;
}
.assistance .assistanceContent .card:hover{
    height: 450px;
}
.assistance .assistanceContent .card .lines{
    position: absolute;
    inset: 0;
    background: var(--darkblue);
    overflow: hidden;
}
.assistance .assistanceContent .card .lines::before{
    content: '';
    position: absolute;
    top: 50%;
    left: 50%;
    width: 600px;
    height: 120px;
    background: linear-gradient(transparent, #A5D9FF, #A5D9FF, #A5D9FF, transparent);
    animation: animate 4s linear infinite;
    animation-play-state: paused;
}
.assistance .assistanceContent .card:hover .lines::before{
    animation-play-state: running;
}
@keyframes animate{
    0%
    {
        transform: translate(-50%, -50%) rotate(0deg);
    }
    100%
    {
        transform: translate(-50%, -50%) rotate(360deg);
    }
}
.assistance .assistanceContent .card .lines::after{
    content: '';
    position: absolute;
    inset: 3px;
    background: var(--white);
}
.assistance .assistanceContent .card .imgBx{
    position: absolute;
    top: -60px;
    left: 50%;
    width: 150px;
    height: 150px;
    transform: translateX(-50%);
    background: var(--darkblue);
    transition: 0.5s;
    z-index: 10;
    overflow: hidden;
    display: flex;
    justify-content: center;
    align-items: center;
}
.assistance .assistanceContent .card:hover .imgBx{
    top: 25px;
    width: 200px;
    height: 200px;
}
.assistance .assistanceContent .card .imgBx::before{
    content: '';
    position: absolute;
    top: 50%;
    left: 50%;
    width:500px;
    height: 150px;
    transform: translate(-50%, -50%);
    background: linear-gradient(transparent, #ff3c7b, #ff3c7b, #ff3c7b, transparent);
    animation: animate2 6s linear infinite;
    animation-play-state: paused;
}
.assistance .assistanceContent .card:hover .imgBx::before{
    animation-play-state: running;
}
@keyframes animate2{
    0%
    {
        transform: translate(-50%, -50%) rotate(360deg);
    }
    100%
    {
        transform: translate(-50%, -50%) rotate(0deg);
    }
}
.assistance .assistanceContent .card .imgBx::after{
    content: '';
    position: absolute;
    inset: 3px;
    background: var(--white);
}
.assistance .assistanceContent .card .imgBx img{
    position: absolute;
    width: 100px;
    z-index: 1;
    opacity: 0.5;
    transition: 0.5s;
}
.assistance .assistanceContent .card:hover .imgBx img{
    opacity: 1;
}
.assistance .assistanceContent .card .content{
    position: absolute;
    width: 100%;
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: flex-end;
    overflow: hidden;
}
.assistance .assistanceContent .card .content .details {
    padding: 30px 20px;
    text-align: center;
    width: 100%;
    transition: 0.5s;
    transform: translateY(95px);
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}
.assistance .assistanceContent .card:hover .content .details{
    transform: translateY(0px);
}
.assistance .assistanceContent .card .content .details h2 {
    margin: 0;
    font-size: 2em;
    color: var(--darkblue);
    line-height: 1.2em;
    text-align: center;
    display: flex;
    justify-content: center;
    align-items: center;
}
.assistance .assistanceContent .card .content .details p {
    color: #0071C9;
    opacity: 0;
    transition: 0.5s;
    font-size: 1.5em;
    text-align: center;
    margin: 0;
}
.assistance .assistanceContent .card:hover .content .details p{
    opacity: 1;
}





.about{
    padding: 50px 0px;
    width: 100%;
    background: url(images/back2.png) no-repeat;
    min-height: 100vh;
}
.about .aboutContent{
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(50rem, 1fr));
    gap: 2rem;
    width: 1180px;
    max-width: 100%;
    margin: 0 auto;
    display: flex;
    align-items: center;
    justify-content: space-around;
}
.about .aboutContent .box{
    border: var(--white);
    border-style: dashed;
}
.about .aboutContent .box .image{
    height: 55rem;
    overflow: hidden;
    width: 100%;
}
.about .aboutContent .box .image img{
    height: 100%;
    object-fit: cover;
    width: 100%;
}
.about .aboutContent .box:hover .image img{
    transform: scale(1.2);
}
.about .aboutContent .box .aboutText h5{
    font-size: 2.7rem;
    line-height: 1.5;
    color: var(--white);
    font-weight: bolder;
    text-align: center;
}
.aboutText .f{
    color: #00008b;
}
.aboutText .a{
    color: #3aaded;
}
.aboutText span{
    color: #b3dcfa;
}
.about .aboutContent .box .aboutText p{
    font-size: 1.8rem;
    line-height: 1.8;
    color: #ffffff;
    padding: 1rem 0;
}





.contact{
    position: relative;
    padding: 5  0px 0px;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background: url(images/back3.png) no-repeat;
    background-size: cover;
    background-position: center center;
    flex-direction: column;
}
.contactContent{
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 30px;
}
.contactInfo{
    width: 25%;
    padding: 40px;
    height: 400px;
    max-width: 820px;
    background: var(--darkblue);
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 0 20px var(--black);
    border: 2px solid var(--white);
    border-style: dashed;
}
.contactContent .contactInfo h2{
    color: var(--white);
    font-size: 3em;
    text-align: left;
    text-shadow: -3px -3px #00008b;
    padding-left: 65px;
}
.contactContent .contactInfo .contactBox{
    position: relative;
    padding-left: 20px;
    padding-top: 28px;
    display: flex;
}
.contactContent .contactInfo .contactBox .contactIcon{
    min-width: 60px;
    height: 60px;
    background: var(--white);
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 50%;
    font-size: 30px;
    color: var(--darkblue);
}
.contactContent .contactInfo .contactBox .contactText{
    display: flex;
    margin-left: 20px;
    font-size: 16px;
    flex-direction: column;
    font-weight: 300;
    padding-left: 12px;
    padding-top: 3px;
}
.contactContent .contactInfo .contactBox .contactText h3{
    font-weight: bold;
    color: var(--white);
}
.contactContent .contactInfo .contactBox .contactText p{
    font-weight: 100;
    color: var(--white);
}
.contactForm{
    width: 40%;
    padding: 40px;
    height: 400px;
    background: transparent;
    border: 2px solid var(--darkblue);
    border-radius: 20px;
    backdrop-filter: blur(5px);
    box-shadow: 0 0 20px var(--black);
    border-style: dashed;
}
.contactForm h2{
    color: var(--darkblue);
    font-size: 3em;
    text-align: center;
    text-shadow: 3px -3px #A5D9FF;
}
.contactForm .inputBox{
    position: relative;
    width: 100%;
    margin-top: 10px;
}
.contactForm .inputBox input,
.contactForm .inputBox textarea{
    width: 100%;
    padding: 5px 0;
    font-size: 16px;
    margin: 10px 0;
    border: none;
    border-bottom: 2px solid var(--darkblue);
    outline: none;
    resize: none;
    background: transparent;
    color: var(--darkblue);
}
.contactForm .inputBox span{
    position: absolute;
    left: 0;
    padding: 5px 0;
    font-size: 16px;
    margin: 10px 0;
    pointer-events: none;
    transition: 0.5s;
    color: var(--darkblue);
}
.contactForm .inputBox input:focus ~ span,
.contactForm .inputBox input:valid ~ span,
.contactForm .inputBox textarea:focus ~ span,
.contactForm .inputBox textarea:valid ~ span{
    color: #64a1f4;
    font-size: 12px;
    transform: translateY(-20px);
}
.submitBtn {
    width: 50%;
    height: 45px;
    background: var(--darkblue);
    border: none;
    outline: none;
    border-radius: 6px;
    cursor: pointer;
    font-size: 1.7em;
    color: var(--white);
    font-weight: 600;
    transform: translate(50%, 50%);
}





.footer {
    background: var(--white);
    background-size: cover;
    background-position: center center;
    padding: 15px 23px;
    color: var(--black);
    text-align: center;
}
.footer .share{
    padding: 1rem 0;
    text-align: center;
}
.footer span {
    color: var(--black);
    text-decoration: none;
    font-weight: 300px;
}
.footer span a{
    color: var(--darkblue);
    text-decoration: none;
}
.footer .share a{
    height: 4rem;
    width: 4rem;
    line-height: 4rem;
    font-size: 2rem;
    color: var(--white);
    background: var(--darkblue);
    margin: 0 .3rem;
    border-radius: 50%;
}
.footer .share a:hover{
    background: var(--darkblue);
    color: var(--white);
}
</style>

<body>
    <header class="header">
        <div class="logoContent">
            <a href="#" class="logo"><img src="images/logo.png" alt=""></a>
            <h1 class="logoName">SC<span class="f">F</span><span class="a">A</span><span>S</span></h1>
        </div>
        <nav class="navbar">
            <a href="#home">Home</a>
            <a href="#manage">Manage System</a>
            <a href="#assistance">Assistance</a>
            <a href="#about">About</a>
            <a href="#contact">Contact</a>
        </nav>
    </header>

    <section class="home" id="home">
        <div class="homeContent" id="homeContent">
            <h2>Make life easier for elders</h2>
            <p>obtaining the financial assitance will be a hassle-free process for the involved individuals.</p>
        </div>
    </section>

    <section class="manage" id="manage">
        <div class="manageContent">
            <a href="masterlist.php" class="card">
                <div class="box">
                    <i class="fas fa-users"></i>
                    <h3>Master List</h3>
                    <p>All registered senior citizen</p>
                </div>
            </a>
            <a href="login.php" class="card">
                <div class="box">
                    <i class="fas fa-money-bill-wave"></i>
                    <h3>Payout</h3>
                    <p>Cash Assistance</p>
                </div>
            </a>
            <a href="deceased.php" class="card">
                <div class="box">
                    <i class="fas fa-dizzy"></i>
                    <h3>Deceased List</h3>
                    <p>People who have passed away</p>
                </div>
            </a>
        </div>
    </section>

    <section class="assistance" id="assistance">
        <div class="heading5">
            <h2>Our Assistance</h2>
        </div>
        <div class="assistanceContent">
            <div class="card">
                <div class="lines"></div>
                <div class="imgBx">
                    <img src="images/orlogo.PNG">
                </div>
                <div class="content">
                    <div class="details">
                        <h2>Online Registration</h2>
                        <p>Our user-friendly online registration for acquiring the financial assistance allows senior citizens 
                        to conveniently register from the comfort of their homes. Through a simple and intuitive process, seniors 
                        can easily create an account.</p>
                    </div>                
                </div>
            </div>

            <div class="card">
                <div class="lines"></div>
                <div class="imgBx">
                    <img src="images/palogo.png">
                </div>
                <div class="content">
                    <div class="details">
                        <h2>Personalized Assistance</h2>
                        <p>Our dedicated support team is available to assist senior citizens throughout the registration process.
                        We provide personalized guidance, answer queries, and offer technical assistance to ensure that a smooth 
                        and hassle-free experience forindividuals.</p>
                    </div>                
                </div>
            </div>

            <div class="card">
                <div class="lines"></div>
                <div class="imgBx">
                    <img src="images/sspplogo.png">
                </div>
                <div class="content">
                    <div class="details">
                        <h2>Secure and Swift Payout Processing</h2>
                        <p>Once approved, senior citizens can receive their financial assistance through secure manual payout method.
                        We prioritize the security of transactions and ensuring prompt and reliable disbursement of funds.</p>
                    </div>                
                </div>
            </div>
        </div>
    </section>

    <section class="about" id="about">
        <div class="heading3">
            <h2>About</h2>
        </div>
        <div class="aboutContent">
            <div class="box">
                <div class="image">
                    <img src="images/background.PNG">
                </div>
                <div class="aboutText">
                    <h5>Senior Citizen<span class="f"> Financial</span><span class="a"> Assitance</span><span> System</span></h5>
                    <p>This aims to promote and improve the quality of life of elderly people or known as "Senior Citizen". 
                    The main goal is to lessen the people queueing and give both the staff and the elders a hassle-free process.
                    This is intended to assist them and to simplify the process, which will be more convenient for individuals involved.
                    </p>
                </div>
            </div>
        </div>
    </section>

   <section class="contact" id="contact">
        <div class="heading4">
            <h2>Contact Us</h2>
        </div>
        <div class="contactContent">
            <div class="contactInfo">
                <h2>Let's get in touch!</h2>
                <div class="contactBox">
                    <div class="contactIcon"><ion-icon name="location"></ion-icon></div>
                    <div class="contactText">
                        <h3>Address</h3>
                        <p>Cebu City, Cebu, Philippines 6000</p>
                    </div>
                </div>
                <div class="contactBox">
                    <div class="contactIcon"><ion-icon name="call"></ion-icon></div>
                    <div class="contactText">
                        <h3>Phone</h3>
                        <p>123-4567<br>0912-345-6789</p>
                    </div>
                </div>
                <div class="contactBox">
                    <div class="contactIcon"><ion-icon name="mail"></ion-icon></div>
                    <div class="contactText">
                        <h3>Email</h3>
                        <p>sc.fas@gmail.com</p>
                    </div>
                </div>
            </div>
            <div class="contactForm">
                <form>
                    <h2>Send Message</h2>
                    <div class="inputBox">
                        <input type="text" name="" required="required">
                        <span>Full Name</span>
                    </div>
                    <div class="inputBox">
                        <input type="text" name="" required="required">
                        <span>Email</span>
                    </div>
                    <div class="inputBox">
                        <textarea required="required"></textarea>
                        <span>Type your Message...</span>
                    </div>
                    <button type="submit" class="submitBtn">Submit</button>
                </form>
            </div>
        </div>
   </section>
   
    <footer class="footer">
        <div class="share">
            <a href="https://www.facebook.com/" class="fab fa-facebook-f"></a>
            <a href="https://www.twitter.com/" class="fab fa-twitter"></a>
            <a href="https://www.instagram.com/" class="fab fa-instagram"></a>
        </div>
        <span>Created By:  Group 4  |  <a href="#" class="far fa-copyright"></a> 2023 All rights reserved.</span>
    </footer>

    <script type="module" src="modulescript.js"></script>
    <script nomodule src="nomodulescript.js"></script>
    <script src="swiper-bundle.js"></script>
    <script src="index.js"></script>
</body>
</html>