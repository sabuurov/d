<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
  <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">
    <title>PHP learn </title>

  <!-- <link rel="stylesheet" href="{{ asset('https://fonts.googleapis.com/css?family=Open+Sans|Candal|Alegreya+Sans')}}">
  <link rel="stylesheet" href="{{ asset('public\test\css\imagehover.min.css')}}">
  <link rel="stylesheet" href="{{ asset('public\test\css\bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{ asset('public\test\css\font-awesome.min.css')}}">
  <link rel="stylesheet" href="{{ asset('public\test\css\style.css')}}"> -->
  <style>
    /*
    Theme Name: Mentor
    Theme URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
*/

body {
  font-size: 15px;
    line-height: 1.52;
    color: #717f86;
    font-size: 16px;
  font-family: 'Open Sans', sans-serif;
    font-weight: 400;
}
ol, ul {
  list-style: none;
}
blockquote, q {
  quotes: none;
}
blockquote:before, blockquote:after,
q:before, q:after {
  content: '';
  content: none;
}
table {
  border-collapse: collapse;
  border-spacing: 0;
}
.section-padding{
  padding: 60px 0px;
}
h1, h2, h3, h4, h5, h6{
    font-family: Open Sans, sans-serif;
    font-weight: 700;
    color: #4B4B4C;
}
a{
    color: #5fcf80;
}
a:hover, a:focus{
    color: #5fcf80;
}
/***********************************
Navigation bar
************************************/
.navbar-default .navbar-brand {
    color: #5FCF80;
}
.navbar-default {
    background-color: #ffffff;
}
.course-text{
    padding: 84px;
}
.navbar-default .navbar-nav > li > a {
    color: #717f86;
    font-size: 14px;
    font-weight: 700;
}
.navbar-nav > li > a{
  padding: 0px;
  margin: 10px 5px;
  padding: 10px 15px;
}
.navbar-default .navbar-nav > li > a:focus, .navbar-default .navbar-nav > li > a:hover
{
  color: #5FCF80;
}

.navbar-nav .active a{
    background: none !important;
    color: #5FCF80 !important;
    outline: none;
}

.btn-trial a{
  background-color: #5FCF80;
  border-radius: 25px;
  color: #ffffff !important;
  border: 1px solid #5FCF80;
}
.btn-trial a:hover, .btn-trial a:focus{
  border: 1px solid #5FCF80;
  background-color: #fff;
  color: #5FCF80 !important;
}
.navbar-default .navbar-brand {
    font-family: 'Dosis', sans-serif !important;
    font-weight: 700;
    text-transform: uppercase;
    padding: 0px;
    height: inherit;
    font-size: 36px;
    margin: 20px 0px;
}
.navbar-default .navbar-brand span{
  font-weight: 100 !important;
}
.navbar {
    margin-bottom: 0px;
}
.padding-zero{
  padding: 0px;
}
.mart20{
  margin-top: 20px;
}
/***********************************
Banner
************************************/
.banner{
  background: url('../img/bg-banner.jpg') no-repeat center top;
    background-size: cover;
  min-height: 580px;
    position: relative;
}
.bg-color{
  background-color: RGBA(12, 11, 11, 0.82);
  min-height: 580px;
}
.text-dec{
  font-size: 24px;
  padding: 10px 20px;
    margin: 15px 0;
  text-transform: uppercase;
    color: #fff;
}
.text-border{
  border: 5px solid #5FCF80;
  display: inline-block;
  margin-top: 150px;
}
.intro-para{
  font-family: 'Alegreya Sans', sans-serif;
  font-size: 45px;
  color: #fff;
  margin-top: 30px;
}
.quote .btn{
    background-color: #adadad;
}
.modal-dialog {
    width: 600px;
    margin: 150px auto;
}
.mouse {
    width: 25px;
    height: 45px;
    border: 2px solid #fff;
    position: absolute;
    bottom: 40px;
    left: 50%;
    margin-left: -12.5px;
    border-radius: 12px;
}
@-webkit-keyframes rotateplane {
    0%   {top:10px;}
    25%  {top:14px;}
    50%  {top:19px;}
    75%  {top:24px;}
    100% {top:28px;}
}
@-moz-keyframes rotateplane {
    0%   {top:10px;}
    25%  {top:14px;}
    50%  {top:19px;}
    75%  {top:24px;}
    100% {top:28px;}
}
@-o-keyframes rotateplane {
    0%   {top:10px;}
    25%  {top:14px;}
    50%  {top:19px;}
    75%  {top:24px;}
    100% {top:28px;}
}
.mouse::after {
    content: "";
    position: absolute;
    height: 5px;
    width: 5px;
    background-color: #fff;
    border-radius: 100%;
    left: 50%;
    top:10px;
    margin-left: -2.5px;
    transition:all 0.3s ease-in;

     -webkit-animation-name: rotateplane; /* Chrome, Safari, Opera */
    -webkit-animation-duration: 2s; /* Chrome, Safari, Opera */
    animation-name: rotateplane;
    animation-duration: 2s;
    animation-iteration-count: infinite;
}
.modal-content h4 {
    font-size: 1.5em;
    font-weight: 700;
}
.login-box-body {
    padding: 15px 30px;
}
.login-box-msg, .register-box-msg {
    margin: 0px;
    text-align: center;
    padding: 0px 20px 20px;
}
.modal-sm {
    width: 400px;
}
.padleft-right{
    padding-left: 5px;
    padding-right: 0px;
}
.big-text{
    font-size: 35px;
}
.small-text{
    font-size: 16px;
}
.quote .btn{
    background-color: #5fcf80;
    color: #fff;
    -webkit-transition: all 0.3s ease-in-out;
  -moz-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
  margin-top: 10px;
}
.quote .btn:hover, .quote .btn:focus{
    background-color: #fff;
    color: #5fcf80;
    border-color: #fff;
     -webkit-transition: all 0.3s ease-in-out;
  -moz-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}
/***********************************
Features
************************************/
h2{
  font-size: 24px;
  padding-bottom: 15px;
}
.bottom-line{
  width: 25px;
  height: 3px;
  background-color: rgb(99, 122, 145);
}
.fea{
  margin-top: 25px;
}
.fea-img {
  width: 20%;
}
.heading {
    width: 80%;
}
.fea i {
    font-size: 39px;
    color: #5FCF80;
    margin-top: 7px;
}
.heading h4 {
    font-size: 17px;
    line-height: 1.25;
    font-weight: 700;
    color: #000;
    margin: 10px 0px;
    text-align: left;
}
.heading p {
  text-align: left;
}
/***********************************
Course
************************************/
[class*=" imghvr-"] figcaption, [class^="imghvr-"] figcaption {
    background-color: #5FCF80;
}
[class*=" imghvr-"], [class^="imghvr-"] {
    background-color: #5FCF80;
    color: #fff;
}
/***********************************
Contact Us
************************************/
.contact form .form {
    width: 100%;
    height: auto;
    padding: 15px 15px 12px;
    font-size: 18px;
    margin-bottom: 18px;
    color: #7f7f7f;
    letter-spacing: 0.5px;
}
#contact .form-control {
    background: #fafafa;
    border: 1px solid rgba(119, 81, 81, 0.34);
    width: 285px;
    margin-bottom: 15px;
    border-radius: 0;

}
.textarea {
    height: 228px;
    max-width: 100%;
    max-height: 229px;
}
.light {
    font-weight: 100;
}
.white{
    color: #fff !important;
}

.validation {
    color: red;
    display:none;
    margin: 0 0 20px;
    font-weight:400;
    font-size:13px;
}

#sendmessage {
    color: green;
    border:1px solid green;
    display:none;
    text-align:center;
    padding:15px;
    font-weight:600;
    margin-bottom:15px;
}

#errormessage {
    color: red;
    display:none;
    border:1px solid red;
    text-align:center;
    padding:15px;
    font-weight:600;
    margin-bottom:15px;
}

#sendmessage.show, #errormessage.show, .show {
  display:block;
}
/***********************************
Footer
************************************/
.footer {
    padding: 60px 0 20px;
    background: #111;
    color: #ccc;
}
.footer a {
    color: #fff;
}

.footer h3{
  font-weight: 300;
  letter-spacing: 0.05em;
  margin: 0 0 40px;
  font-size: 24px;
}
.footer .form-control {
    border-radius: 30px;
    border: none;
    background: rgba(255,255,255,.1);
    padding-left: 30px;
    color: #e5e6e7;
    margin-bottom: 0;
    height: 40px;
}
.footer .social-links li a {
    color: #fff;
    font-size: 32px;
    line-height: 50px;
    border-radius: 50%;
    text-align: center;
    -webkit-transition: all .3s ease-out;
    transition: all .3s ease-out;
}
.footer .social-links li {
    display: inline-block;
    margin: 0 25px 25px;
    -webkit-transition: all .3s ease-out;
    transition: all .3s ease-out;
}
.footer .mc-trial {
    margin: 20px 0;
}
.footer .social-links {
    list-style: none;
    padding: 0;
    margin: 30px 0 40px;
    padding: 40px 0 0;
    border-bottom: 1px solid rgba(255,255,255,0.2);
}
.btn-submit:hover, .btn-submit:focus{
    background-color: #5fcf80;
    color: #fff;
}
.btn-submit{
  padding: 14px 12px;
  border-radius: 50px;
  text-transform: uppercase;
    background-color: #5fcf80;
    color: #fff;
}
.btn-submit i{
  padding-left: 8px;
}

.btn-sec {
    margin-top: 20px;
}
.ser-btn {
    padding: 10px 18px;
    border: 0px;
    background-color: #222935;
    color: #fff;
    border-radius: 3px;
    display: inline-block;
    margin-bottom: 20px;
}
.mem-info{
    padding: 45px 10px 0px;
    background-color: #eee;
}
.mem-info h4 {
    font-size: 18px;
    padding: 10px 0px;
}
.mem-info h3{
    font-size: 24px;
    padding: 15px 0px;
}
.mem-info h5
{
    margin-top: 10px;
    margin-bottom: 10px;
}
.mem-info p {
    margin: 0 0 10px;
}
.agent-social li {
    display: inline-block;
    padding: 0px 10px 0px 0px;
    margin-bottom: 10px;
}
.btn {
    padding: 10px 20px;
    height: 35px;
}
.light-form-button{
    background: #5fcf80;
    border: 1px solid rgba(119, 81, 81, 0.34);
    width: 24%;
    padding: 10px 10px;
    margin-bottom: 15px;
    color: #fff;: #fafafa;
    border: 1px solid rgba(119, 81, 81, 0.34);
    width: 24%;
    margin-bottom: 15px;
     -webkit-transition: all 0.3s ease-in-out;
  -moz-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}
.btn-green, .btn-green:hover{
    background-color: #5fcf80;
    color: #fff;
}
.footer .form-control:focus{
    box-shadow: none;
}

  </style>
</head>

<body>

    @include('layout\navbarSign')
  <div class="banner"><center>
    <div class="bg-color">
      <div class="container">
        <div class="row">
          <div class="banner-text text-center">
            <div class="text-border">
              <h2 class="text-dec"> PHP Tutorial </h2>
            </div>
            <div class="intro-para text-center quote">
              <p class="big-text"> Learn PHP is finally available! </p>
              <p class="small-text"> Continue your FREE PHPLearner web development training today, by learning the most widely used web programming language in the world! </p>
              <a href="#footer" class="btn get-quote"> START </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div></center>
  <!--Feature-->
  <section id="feature" class="section-padding"><center>
    <div class="container">
      <div class="row">
        <div class="header-section text-center">
          <h2> PHP enables... </h2>
        </div>
        <div class="feature-info">
          <ul class="heading pull-right">
            <li>Create dynamic web pages</li>
            <li>Develop websites</li>
            <li>Generate dynamic content</li>
          </ul>
        </div>
      </div>
    </div></center>
  </section>
  <!--/ feature-->

  <section id="faculity-member" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="header-section text-center">
          <h2><center> TOP Learners </center></h2>
          <hr class="bottom-line">
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="pm-staff-profile-container">
            <div class="pm-staff-profile-image-wrapper text-center">
              <div class="pm-staff-profile-image">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQZy4BvkX3TiM3KXGzxHJd9UdB4ooaTYKcbtZyvh1Ioxz-Jju61&usqp=CAU" alt="" class="img-thumbnail img-circle" />
              </div>
            </div>
            <div class="pm-staff-profile-details text-center">
              <p class="pm-staff-profile-name">Saburov Asylbek</p>
              <p class="pm-staff-profile-title">32 Level</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="pm-staff-profile-container">
            <div class="pm-staff-profile-image-wrapper text-center">
              <div class="pm-staff-profile-image">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQZy4BvkX3TiM3KXGzxHJd9UdB4ooaTYKcbtZyvh1Ioxz-Jju61&usqp=CAU" alt="" class="img-thumbnail img-circle" />
              </div>
            </div>
            <div class="pm-staff-profile-details text-center">
              <p class="pm-staff-profile-name">Kulbekova Aliya</p>
              <p class="pm-staff-profile-title">30 Level</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="pm-staff-profile-container">
            <div class="pm-staff-profile-image-wrapper text-center">
              <div class="pm-staff-profile-image">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQZy4BvkX3TiM3KXGzxHJd9UdB4ooaTYKcbtZyvh1Ioxz-Jju61&usqp=CAU" alt="" class="img-thumbnail img-circle" />
              </div>
            </div>
            <div class="pm-staff-profile-details text-center">
              <p class="pm-staff-profile-name">Marat Aktoty</p>
              <p class="pm-staff-profile-title">28 Level</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ Faculity member-->
  <!--Contact-->
  <section id="contact" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="header-section text-center">
          <h2>Contact Us</h2>
        </div>
        <div id="sendmessage">Your message has been sent. Thank you!</div>
        <div id="errormessage"></div>
        <form action="" method="post" role="form" class="contactForm">
          <div class="col-md-6 col-sm-6 col-xs-12 left">
            <div class="form-group">
              <input type="text" name="name" class="form-control form" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
              <div class="validation"></div>
            </div>
          </div>

          <div class="col-md-6 col-sm-6 col-xs-12 right">
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
              <div class="validation"></div>
            </div>
          </div>

          <div class="col-xs-12">
            <!-- Button -->
            <button type="submit" id="submit" name="submit" class="form contact-form-button light-form-button oswald light"> SEND EMAIL </button>
          </div>
        </form>

      </div>
    </div>
  </section>
  @include('layout\footer')
</body>
</html>
