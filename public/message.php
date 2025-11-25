<?php

$data = implode("\n", $_POST);

$domain = $_SERVER['HTTP_HOST'];
$to = "lead@".$domain; 
$subject = "Lead";
$message = $data;
$headers = "From: sender@".$domain;

if(mail($to, $subject, $message, $headers)) {
    //echo "Письмо успешно отправлено!";
}

?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ultradesigngulp . Your request has been accepted!</title>
        <meta property="og:title" content="Ultradesigngulp . Your request has been accepted!" />
        <meta property="og:image" content="logo-black.svg"/>
        
        <meta property="og:description" content="Ultradesigngulp . Your request has been accepted!">
        <meta name="description" content="Ultradesigngulp . Your request has been accepted!">
  

        <link rel="shortcut icon" href="logo-black.svg" type="image/x-icon">
        <link href='https://fonts.googleapis.com/css2?family=Signika:wght@300..700&display=swap' rel="stylesheet">
        <link href='https://fonts.googleapis.com/css2?family=Staatliches&display=swap' rel="stylesheet">

        <style>

        body{
        font-family: 'Signika', sans-serif !important;
        direction: ltr;
        font-size: 15px;
        line-height: 1.3;
        margin: 0;
        padding: 0;
        overflow-x: hidden;
        box-sizing: border-box;
        }

        :root {
          --grey: #d9d9d9;
          --yellow: #e8b846;
          --grey-d: #666666;
          --red: #e86246;
          --blue: #25b2bf;
          --lemon: #e6e846;

          --bcg-1: #e86246;
          --bcg-2: #25b2bf;
          --bcg-3: #9fa125;

        }
        
button {
cursor: pointer;
white-space: normal;
width: fit-content;
max-width: 90%;  
white-space: normal; 
word-break: break-word; 
text-align: center;
}
      

.container-margin{
  padding: 0;
  margin: 0 auto;
  box-sizing: border-box;
  }

.container-padding{
 padding: 124px 20px;
  }

  img {
max-width: 100%;
height: auto;
margin: auto;
  }
ul {
padding-left: 0;
padding-right: 0;
list-style: none;
}

a {
text-decoration: none;
}

.header-section {
  background-color: #fff;
  position: relative;
  z-index: 1000;
}

.header-menu-box {
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.top-header-logo {
  display: flex;
  align-items: center;
}
.privacy-section {
  word-break: break-all;
}
.privacy-section li {
  margin: 6px 17px;
}
.top-header-logo img,
.bottom-logo img {
  height: 55px;
  margin: 11px;
}
.top-header-logo p{
color: var(--grey-d);
font-size: 28px;
font-weight: 700;
}
.bottom-logo p{
color: var(--grey);
font-size: 28px;
font-weight: 700;
}
.menu-toggle {
  font-size: 39px;
  background: none;
  border: none;
  cursor: pointer;
  z-index: 1100;
}

.close-menu {
  display: none;
}

.heder-menu-list {
  position: fixed;
  display: none;
  flex-direction: column;
  gap: 20px;
  top: 0;
  right: 0;
  background: #fff;
  width: 25%;
  height: 100vh;
  padding: 74px 0;
  box-shadow: 0 5px 15px rgba(0,0,0,0.2);
  transform: translateY(-100%);
  transition: transform 0.5s ease-in-out;
  opacity: 0;
}

.heder-menu-list.active {
  display: flex;
  transform: translateY(0);
  opacity: 1;
}

.menu-toggle.show {
  display: block;
}

.menu-toggle.hide {
  display: none;
}

.heder-menu-list a {
  text-decoration: none;
  color: var(--grey-d);
  font-size: 34px;
  font-weight: 700;
  text-align: center;
}

.heder-menu-list a:hover{
  color: var(--bcg-2); 
}

body.no-scroll {
  overflow: hidden;
}

.head-section {
    background: url('view/graphics_header_6924b8f9d330a9.99497667.jpg') no-repeat center center/cover;
    color: white;
    padding: 124px 20px;
    display: flex;
    justify-content: flex-end;
    align-items: center;
}

.head-container {
  display: flex;
  justify-content: flex-end;
  width: 100%;
}

.head-text-btn {
    background-color: rgb(0 0 0 / 81%);
    padding: 17px;
    border-left: 11px solid var(--bcg-2); 
    width: 50%;
    animation: slideIn 1s ease-in-out;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    animation: sway 3s infinite ease-in-out;
}

@keyframes sway {
  0% { transform: translateX(0); }
  50% { transform: translateX(20px); }
  100% { transform: translateX(0); }
}

.head-text-btn h1 {
    font-size: 29px;
    margin-bottom: 17px;
}


@keyframes slideIn {
    from {
        opacity: 0;
        transform: translateY(50px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}
.head-text-btn a{
  margin: 20px;
}
.benefits-section {
    background-color: var(--grey);
}

.benefits-list {
    display: flex;
    justify-content: space-around;
    gap:  20px;
    flex-wrap: wrap;
}

.benefit-card {
    background-color: white;
    padding: 25px;
    border-radius: 25px;
    text-align: center;
    max-width: 398px;
    transition: transform 0.3s ease-in-out;
    animation: slideInFromTop 1s ease-out;
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
    position: relative;
    top: -30px;
}

.benefit-card svg {
  background-color: var(--bcg-2);
    width: 71px;
    height: 71px;
    position: relative;
    top: -50px;
    border-radius: 50%;
    fill: white;
    padding: 11px;
}

.reason-text {
    color: #666;
    font-size: 22px;
    font-style: italic;
    margin: 0;
}

.benefit-card:hover {
    transform: scale(1.1);
}

@keyframes slideInFromTop {
    from {
        opacity: 0;
        transform: translateY(-50px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.about-section {
    background-color: var(--bcg-2); 
    display: flex;
    justify-content: center;
    align-items: center;
}


.about-block {
    display: flex;
    flex-direction: row-reverse;
    align-items: flex-start;
    position: relative;
}

.about-block img {
    width: 50%;
    height: auto;
    object-fit: cover;
    position: relative;
    top: 40px;
}

.about-text {
    background-color: white;
    padding: 25px;
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
    border-radius: 25px;
    z-index: 2;
}

.about-text h2 {
    font-size: 39px;
    margin-bottom: 20px;
    color: black;
}

.about-text p {
  font-size: 22px;
  color: var(--grey-d);
}

@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(50px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.about-text {
    animation: fadeInUp 1s ease-in-out;
}

.hero-section {
    background-color: var(--grey); 
    display: flex;
    justify-content: center;
    align-items: center;
}

.hero-container {
  display: flex;
  align-items: center;
  position: relative;
  flex-direction: column;
}

.hero-img{
  display: flex;
}
.hero-img img {
    width: 50%;
    height: auto;
    object-fit: cover;
    position: relative;
    z-index: 2; 
}

.hero-title {
    background-color: white;
    padding: 25px;
    position: relative;
    top: -30px; 
    border-radius: 25px;
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
    z-index: 1;
}

.hero-title h2 {
    font-size: 39px;
    margin-bottom: 20px;
    color: #000;
}

.hero-text {
  font-size: 22px;
    color: #555; 
}
.hero-text li {
  margin: 6px   17px;
}
.price-title{
  font-size: 29px;
  color: var(--bcg-2);
}

@keyframes slideInFromBottom {
    from {
        opacity: 0;
        transform: translateY(50px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.hero-title {
    animation: slideInFromBottom 1s ease-in-out;
}

.history-section {
  background-color: var(--grey);
    display: flex;
    justify-content: center;
    align-items: center;
    position: relative;
}

.history-container {
    display: flex;
    flex-direction: column;
}

.history-title h2 {
  font-size: 39px;
    margin-bottom: 20px;
    color: var(--grey-d);
    text-align: center;
}

.history-item-fst{
  position: relative;
  display: flex;
}
.history-card-fst {
    background-color: white;
    padding: 25px;
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
    border-radius: 25px;
    width:  789px;
    top: 500px;
    position: absolute;
    z-index: 1;
}

.history-card-scnd {
    background-color: white;
    padding: 25px;
    display: flex;
    align-items: center;
    gap:  20px;
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
    position: relative;
    border-radius: 25px;
}
.history-card-fst p,
.history-card-scnd p {
    font-size: 22px;
    color: #555; 
}

.history-img-top{
  width: 398px;
    height: 555px;
    object-fit: cover;
}

.history-img-bott{
  position: relative;
    width: 555px;
    top: 50px;
    height: 372px;
    object-fit: cover;
}

.history-item-scnd{
  display: flex;
    gap: 35px;
    margin-top: 35px;
}

.tarif-section {
    background-color: var(--grey-d);
    display: flex;
    justify-content: center;
    align-items: center;
}

.tarif-list {
    display: flex;
    gap: 53px;
    justify-content: space-around;
}

.tarif-item {
    flex: 1 1 30%;
    background: white;
    padding: 25px;
    border-left: 10px solid var(--bcg-2);
    border-radius: 25px;
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;

    display: flex;
    flex-direction: column;
    align-items: center;
}

.tarif-item:hover {
    transform: translateY(-15px) scale(1.05);
    box-shadow: 0px 8px 30px rgba(0, 0, 0, 0.2);
}

.tarif-item:nth-child(2) {
    background-color: var(--bcg-2);
    color: white;
    transform: scale(1.1);
}

.tarif-item:nth-child(2) .price-tarif, 
.tarif-item:nth-child(2) .name-tarif {
    color: white;
}

.price-tarif {
  font-size: 44px;
  font-weight: 900;
    margin-bottom: 21px;
    color: #333;
}

.name-tarif {
  font-size: 28px;
  font-weight: 700;
    margin-bottom: 21px;
}

.tarif-service p {
  font-size: 22px;
    color: var(--grey-d); 
  
}
.tarif-service2 p {
  color: #fff;
}

.gallery-wrap {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    grid-template-rows: repeat(5, 1fr);
    gap: 8px;
}

.div1 img, .div2 img, .div3 img, .div6 img, .div7 img{
    width: auto;
    height: 100%;
    object-fit: cover;
}
    
.div1 {
    grid-row: span 3 / span 3;
}

.div2 {
    grid-row: span 2 / span 2;
    grid-column-start: 1;
    grid-row-start: 4;
}

.div3 {
    grid-row: span 5 / span 5;
    grid-column-start: 2;
    grid-row-start: 1;
}

.div6 {
    grid-row: span 2 / span 2;
    grid-column-start: 3;
    grid-row-start: 1;
}

.div7 {
    grid-row: span 3 / span 3;
    grid-column-start: 3;
    grid-row-start: 3;
}
     
.form-section{
  background-color: var(--bcg-2);
}
.form-container{
  display: flex;
  justify-content: center;
}
.form {
  width: 70%;
  height: auto;
  padding:  35px;
  background-color: white;
  display: flex;
  align-items: center;
  flex-direction: column;
  border-radius: 25px;
  box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
}

.input-group-section--input,
.textarea-group-section--input {
  margin: 17px 0;
  padding: 21px 11px;
  width: 70%;
  background-color: var(--grey);
  color:  #424242;
  border: none;
  outline: none;
  transition: all 400ms;
}
.textarea-group-section--input{
  height: 146px;
}
.input-group-section--input:hover,
.textarea-group-section--input:hover {
  background-color: #424242;
  color: white;
  border: none;
  border-radius: 25px;
}
.form-check{
  padding: 17px;
    display: flex;
    flex-direction: row;
    align-items: center;
}
.container-checkbox{
  margin: 17px;
}
.form-check a,
.check-form{
  color: var(--grey-d);
}
.check {
  cursor: pointer;
  position: relative;
  margin: auto;
  width: 18px;
  height: 18px;
  -webkit-tap-highlight-color: transparent;
  transform: translate3d(0, 0, 0);
}

.check:before {
  content: "";
  position: absolute;
  top: -15px;
  left: -15px;
  width: 48px;
  height: 48px;
  border-radius: 50%;
  background: rgba(34,50,84,0.03);
  opacity: 0;
  transition: opacity 0.2s ease;
}

.check svg {
  position: relative;
  z-index: 1;
  fill: none;
  stroke-linecap: round;
  stroke-linejoin: round;
  stroke: #c8ccd4;
  stroke-width: 1.5;
  transform: translate3d(0, 0, 0);
  transition: all 0.2s ease;
}

.check svg path {
  stroke-dasharray: 60;
  stroke-dashoffset: 0;
}

.check svg polyline {
  stroke-dasharray: 22;
  stroke-dashoffset: 66;
}

.check:hover:before {
  opacity: 1;
}

.check:hover svg {
  stroke: #4285f4;
}
.btn-form {
  text-align: center;
}
#cbx:checked + .check svg {
  stroke: #4285f4;
}

#cbx:checked + .check svg path {
  stroke-dashoffset: 60;
  transition: all 0.3s linear;
}

#cbx:checked + .check svg polyline {
  stroke-dashoffset: 42;
  transition: all 0.2s linear;
  transition-delay: 0.15s;
}

.footer-section{
  background-color: var(--grey-d);
  padding: 35px 20px;
}
.footer-menu{
  display: flex;
  align-items: center;
  justify-content: space-between;

}

.footer-bottom-logo{
  flex: 1;
}
.footer-menu-container{
  display: flex;
  flex: 2;
  flex-wrap: wrap;
  gap:  20px;
  justify-content: center;
}

.footer-menu-container a{
  text-decoration: none;
  color: white;
  font-size: 19px;
  font-weight: 700;
  text-align: center;
}

.footer-menu-container a:hover{
  color: var(--bcg-2); 
}

.contact-section {
  background-color: var(--bcg-2);
  display: flex;
  justify-content: center;
  align-items: center;
  flex-wrap: wrap;
  gap:  20px;
  position: relative;
}

.contact-container {
  display: flex;
  flex-direction: row-reverse;
  justify-content: space-between;
  align-items: center;
  width: 100%;
}

.contact-footer {
  background-color: #fff; 
  flex: 1;
  padding: 21px;
  margin: 8px;
  border-radius: 25px;
  box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);

}

.contact-title {
  color: var(--grey-d); 
  ont-size: 29px;
  margin-bottom: 17px;
  text-align: center;
}

.contact-list {
  display: flex;
  flex-direction: column;
  gap: 17px;
}

.contact-list div {
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 17px;
  background-color: #ccc; 
  padding: 17px;
  border-radius: 25px;
  transition: transform 0.3s ease-in-out;
}

.contact-list div:hover {
  transform: translateX(10px);
}

.contact-list svg {
  width: 55px;
  height: 55px;
  fill: var(--bcg-2); 
}

.contact-list a, .contact-list p {
  font-size: 22px;
  color: #333;
  text-decoration: none;
}

.footer-maps {
  margin: 8px;
  flex: 1;
  border-radius: 25px;
}

.container-flex {
  display: flex;
  flex-direction: column-reverse;
}

.bottom-logo{
  display: flex;
    flex-direction: row;
    align-items: center;
}



@media screen and (min-width: 480px) {
  .container-margin{
    max-width: 480px;
  }
    }
@media screen and (min-width: 768px) {
  .container-margin{
    max-width: 768px;
  }
    }
@media screen and (min-width: 1200px) {
  .container-margin{
    max-width: 1200px;
  }
}

@media (max-width: 1200px) {
  .history-item-fst{
    justify-content: center;
  }
  .history-img-top{
    display: none;
  }
.history-card-fst{
  width: auto;
  position: static;
}
.history-img-bott{
  margin: 11px;
  position: static;
}
  .tarif-list {
    flex-direction: column;
  }
}

@media (max-width: 1024px) {
  .tarif-item:nth-child(2) {
        transform: none;
    }
}
@media (max-width: 768px) {
  .benefit-card:hover {
    transform: none;
  }
  .benefit-card {
    animation: none;
  }
  .heder-menu-list a {
    font-size: 15px;
  }
  .head-text-btn h1{
    font-size: 25px;
  }
  .heder-menu-list {
    width: 100%;
  }
  .head-section {
        justify-content: center;
    }
    .head-text-btn {
        width: 90%;
        text-align: center;
    }
    .hero-title h2{
      font-size: 25px;
    }
    .benefits-list {
        flex-direction: column;
        align-items: center;
    }

    .benefit-card {
        width: 80%;
    }
    .about-block {
        flex-direction: column;
        align-items: center;
    }

    .about-block img, .about-text {
        width: 100%;
        margin: 0;
        padding: 11px;
        top: 0;
    }

    .about-text {
        text-align: center;
    }

    .hero-container {
        flex-direction: column;
        align-items: center;
    }

    .hero-img img{
        width: 100%;

    }

    .hero-title {
        text-align: center;
    }
.history-item-fst{
  display: flex;
    flex-direction: column;
    align-items: center;
}
    .history-card {
        flex-direction: column;
        align-items: flex-start;
    }

.history-item-scnd{
  flex-direction: column;
}
    .tarif-list {
        flex-direction: column;
        gap:  20px;
    }

    .tarif-item {
        flex: 1 1 100%;
    }

    .footer-menu{
      flex-direction: column;
    }

    .contact-container {
    flex-direction: column;
    align-items: stretch;
  }

  .contact-footer, .footer-maps {
    max-width: 100%;
    top: 0;
  }

}

    @media (max-width: 480px) {
  .contact-title {
    font-size: 1.5rem;
  }

  .contact-list a, .contact-list p {
    font-size: 1rem;
  }

  .footer-maps {
    height: 300px;
  }
}

@media (max-width: 425px){
  .head-text-btn h1,
  .about-text h2,
  .history-title h2,
  {
    font-size: 20px;
  }
  .history-card-fst,
  .history-card-scnd{
    padding: 11px;
  }
  .reason-text{
    font-size: 18px;
  }
  .form{
    width: 100%;
    padding: 11px;
  }
  }

    .button-1{
  position: relative;
  display: inline-block;
  background: linear-gradient(to bottom, var(--yellow), rgb(71, 55, 49));
  color: white;
  font-family: "Segoe UI", sans-serif;
  font-weight: 700;
  font-size: 18px;
  border: none;
  padding: 11px 20px;
  cursor: pointer;
  box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
  animation: button-shimmer 2s infinite;
  transition: all 0.3s ease-in-out;
}

.button-1:hover {
  background: linear-gradient(to bottom, var(--yellow), #25b2bf);
  animation: button-particles 1s ease-in-out infinite;
  transform: translateY(-2px);
}

.button-1:active {
  transform: scale(0.95);
  box-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
}

@keyframes button-shimmer {
  0% {
    background-position: left top;
  }

  100% {
    background-position: right bottom;
  }
}

@keyframes button-particles {
  0% {
    background-position: left top;
  }

  100% {
    background-position: right bottom;
  }
}

.button-2 {
 appearance: button;
 background-color: #0f373b;
 border: solid transparent;
 border-radius: 25px;
 border-width: 0 0 4px;
 box-sizing: border-box;
 color: #FFFFFF;
 cursor: pointer;
 display: inline-block;
 font-size: 14px;
 font-weight: 700;
 letter-spacing: .8px;
 line-height: 20px;
 margin: 0;
 outline: none;
 overflow: visible;
 padding: 11px 20px;
 text-align: center;
 text-transform: uppercase;
 touch-action: manipulation;
 transform: translateZ(0);
 transition: filter .2s;
 user-select: none;
 -webkit-user-select: none;
 vertical-align: middle;
}

.button-2:after {
 background-clip: padding-box;
 background-color: #0aaebd;
 border: solid transparent;
 border-radius: 25px;
 border-width: 0 0 4px;
 bottom: -4px;
 content: "";
 left: 0;
 position: absolute;
 right: 0;
 top: 0;
 z-index: -1;
}

.button-2:main, .button-2:focus {
 user-select: auto;
}

.button-2:hover:not(:disabled) {
 filter: brightness(1.1);
}

.button-2:disabled {
 cursor: auto;
}

.button-2:active:after {
 border-width: 0 0 0px;
}

.button-2:active {
 padding-bottom: 10px;
}

.button-3 {
  padding: 11px;
  border: 1px solid var(--yellow);
  border-radius: 25px;
  transition: all 0.3s;
  cursor: pointer;
  background: white;
  color: black;
  font-size: 1.2em;
  font-weight: 700;
  font-family: 'Montserrat', sans-serif;
}

.button-3:hover {
  background: var(--yellow);
  color: white;
  font-size: 1.5em;
}


.button-4{
  width: fit-content;
  padding: 11px;
  font-size: 14px;
  border-radius: 25px;
  border: 2px solid #062e18;
  box-shadow: 0px 0px 20px -20px;
  cursor: pointer;
  background-color: var(--bcg-2);
  color: black;
  transition: all 0.2s ease-in-out 0ms;
  user-select: none;
  font-family: 'Poppins', sans-serif;
}

.button-4:hover {
  background-color: #F2F2F2;
  box-shadow: 0px 0px 20px -18px;
}

.button-4:active {
  transform: scale(0.95);
}


.button-5 {
  width: fit-content;
 background-color: var(--grey);
 border: none;
 padding: 11px;
 font-size: 1rem;
 border-radius: 25px;
 color: #062e18;
 box-shadow: 0 0.4rem #dfd9d9;
 cursor: pointer;
}

.button-5:active {
 color: white;
 box-shadow: 0 0.2rem #dfd9d9;
 transform: translateY(0.2rem);
}

.button-5:hover:not(:disabled) {
 background: #333c37;
 color: white;
 text-shadow: 0 0.1rem #bcb4b4;
}

.button-5:disabled {
 cursor: auto;
 color: #2b2521;
}

       
</style>


</head>

<body>

<link rel="stylesheet" type="text/css" href="css/cookie.min.css">
<div id="cookie-banner">
  <p>We use cookies to ensure you get the best experience on our website. <a href="cookie.html">Cookie Policy</a></p>
  <div class="buttons">
    <button class="accept">Accept</button>
    <button class="close">Close</button>
  </div>
</div>
<script src="js/cookie.min.js"></script>

<header class="header-section wishlistkl-box" id="topheder">
  <div class="header-menu-box">
    <a href="./">
      <div class="top-header-logo">
        <img src="logo-black.svg">
        <p>Ultradesigngulp</p>
      </div>
    </a>

    <button class="menu-toggle open-menu" id="openMenu">&#9776;</button>


    <nav class="heder-menu-list" id="hederMenu">
      <button class="menu-toggle close-menu" id="closeMenu">&times;</button>
      <a href="./">Home</a>
      <a href="./#aboutus">About us</a>
      
    </nav>
  </div>
</header>



<section class="head-section container-padding">
    <div class="head-container container-margin">
      <div class="head-text-btn">
        <h1>Welcome to Ultradesigngulp, your trusted partner in home decore solutions. We specialize in selecting the perfect pillows, throws, and bedspreads to enhance your living space with comfort and style. Explore our curated textile collections designed to bring warmth and elegance to your home environment.</h1>
        
      </div>
    </div>
</section>

            



<style>
	* {
		padding: 0;
		margin: 0;
	}
	#mainWrapp-img__columnkc{
		margin: 0px;
		padding: 0px;
		font-family: 'Advent Pro', sans-serif;
		width: 100%;
		font-size: 17px;
		padding: 269px 0px;
	}
	.bodyClass1-img__columnkc{
		background: #fffcfa;
		color: #ffffff;
	}
	.bodyClass2-img__columnkc{
		background: #f0e4d7;
		color: #fff;
	}
	.bodyClass3-img__columnkc{
		background: #fff;
		color: #111;
	}
	.wrapage-block-img__columnkc{
		background-size: 100%;
		width: 100%;
	}
	.box_main-img__columnkc{
		width: 100%;
		margin: 0 auto;
		text-align: center;
		display: flex;
		justify-content: center;
		align-self: center;
		align-items: center;
	}
	.box_main-img__columnkc h2{
		font-size: 24px;
		padding: 0px 0px 25px;
	}
	.box_main-img__columnkc p{
		font-weight: 500;
		font-size: 18px;
	}
	p{
		margin-bottom: 10px;
	}
	.mainBlock-img__columnkc{
		text-align: start;
	}
	.mainBlock-img__columnkc ul{
		text-align: start;
		padding: 20px;
		display: flex;
		flex-direction: column;
		gap: 15px;
	}
	.mainBlock-img__columnkc ul>li span{
		font-weight: bold;
	}
	.mainBlock-img__columnkc{
		max-width: 776px;
		margin: 0 auto;
		padding: 40px;
		background: #7b7d008c;
		border-radius: 20px;
	}
	.mainBlock-img__columnkc .cBlock-img__columnkc{
		text-align: start;
	}

	.bodyClass3-img__columnkc .mainBlock-img__columnkc{
		background: none;
		border-top: 2px solid #f0e4d7;
		border-bottom: 2px solid #f0e4d7;
	}
	.bodyClass2-img__columnkc .mainBlock-img__columnkc{
		background: #202040;
		color: #fff !important;
		box-shadow: 0px 0px 20px #202040;
	}
	.bodyClass2-img__columnkc .mainBlock-img__columnkc p{
		color: #fff !important;
	}
	.bodyClass1-img__columnkc .mainBlock-img__columnkc{
		background: #5F99EB;
		color: #ffffff;
		border-left: 5px solid #151515;
	}
	.bodyClass1-img__columnkc .mainBlock-img__columnkc p{
		color: #ffffff !important;
	}
	.order-img__columnkc{
		font-size: 21px !important;
	}

	  @media screen and (max-width: 639px) {
		  .box_main-img__columnkc p{
			padding: 0px 15px;
		  }
		  .box_main-img__columnkc h2{
			  padding: 0px 10px 15px;
		  }
		.mainBlock-img__columnkc{
			padding: 15px;
		}


	}
	@media screen and (max-width: 480px) {
		#mainWrapp-img__columnkc{
			height: 100%;
		}
	}
</style>
<div class="bodyClass1-img__columnkc" id="mainWrapp-img__columnkc">


	<div class="wrapage-block-img__columnkc">
		<div class="box_main-img__columnkc">
			<div class="mainBlock-img__columnkc">
				<p>Dear Valued Client,</p>
<p>Your confidence in our services is deeply valued. We've successfully received your inquiry and are currently addressing it with the utmost care.</p>
<p>Be assured that our expert team is now diligently working to fulfill your request. Striving for excellence in servicing your needs, our primary aim is to deliver outstanding quality and achieve your complete satisfaction.</p>
<p>Should you have any further questions or need additional support, please feel free to reach out via your preferred method of communication. We cherish each client and are always here to provide assistance.</p>
<p class="cBlock-img__columnkc">Warmest regards, The Team!</p>
			</div>
		</div>
	</div>


</div>




  <section class="footer-section container-padding">
      <div class="footer-container container-margin"> 

      <div class="footer-menu">
      <div class="footer-bottom-logo">
        <a href="./">
          <div class="bottom-logo">
            <img src="logo-black.svg" alt="Logo">
            <p>Ultradesigngulp</p>
          </div>
        </a>
      </div>

      <nav class="footer-menu-container">
        <a href="./">Home</a>
        <a href="./#aboutus">About us</a>
        
        <a href="policy.html">Privacy policy</a>
        <a href="terms.html">Terms & Conditions</a>
        <a href="disclaimer.html">Disclaimer</a>
    </nav>
  </div>

      </div>
  </section>


      
<script>

    const openMenu = document.getElementById('openMenu');
    const closeMenu = document.getElementById('closeMenu');
    const menu = document.getElementById('hederMenu');
    const body = document.body;

    openMenu.addEventListener('click', () => {
      menu.classList.add('active');
      body.classList.add('no-scroll');
      openMenu.classList.add('hide');
      closeMenu.classList.add('show');
    });

    closeMenu.addEventListener('click', () => {
      menu.classList.remove('active');
      body.classList.remove('no-scroll');
      openMenu.classList.remove('hide');
      closeMenu.classList.remove('show');
    });
</script>


</body>
</html>
