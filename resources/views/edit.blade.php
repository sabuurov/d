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
.pht{
  background-color: #fff;
  margin: 250px 5px 0px 20px;
  padding: 200px 0px -600px 0px;
  height: 272px;
  width: 226px;
}
#photo{
  margin: -240px 0px 0px 5px;
  padding: 15px 85px 0px 8px;
}

.edit{
    margin: 10px 22px;
    align-items: center; 
    width: 230px;   
}

.editt{
  width: 164px;
  float: left;
  height: 20px;
  background-color: #D3D3D3;
  margin: 0px 0px 2px -3px; 
  padding: 4px 4px 4px 19px;
  text-align: center;
  color: #5082B9;
}
.aboutme{
    width: 650px;
    background-color: #ffff;
    height: 432px;
  margin: -280px 10px 2px 310px;
  padding: 4px 4px 4px 1px;
}
.aboutnm{   
    padding: 10px;
    justify-content: space-between;
    display: flex;
}
.aboutn h1{
    margin-bottom: 5px;
}
.aboutinf{
    margin: 10px;
}
.aboutinf td{
    height: 30px;
    width: 250px;
}
.name{
      height: 25px;
      width: 250px;
      border-radius: 3px;
      font-style: normal;
      font-weight: normal;
      font-size: 15px;
      font-family: Arial, Helvetica, sans-serif;
    }
    .sub{
      color: black;
      background-color: thistle;
      height: 30px;
      width:  99px;
      font-size: 15px;
      border-radius: 7px;
    }
  </style>
</head>

<body>

  @include('layout\navbarSign')
<hr>
  <form name="" action="{{URL::to('/edit')}}" method="GET">
    <div class="pht">
      <div id="photo">
        <img src="https://simpleicon.com/wp-content/uploads/account.png" width="200"  height="200"> 
      </div>
    </div>
    <div class="form-group has-feedback">
      <div class="form-control">
       <input class="name" name="email" placeholder="new_email" id="loginid" type="text"/></h3>
      </div>
    </div>
    <div class="form-group has-feedback">
        <div class="form-control">
           <input class="name" name="firstName" placeholder="new_name" id="loginid" type="text"/></h3>
        </div>
    </div>
    <div class="form-group has-feedback">
        <div class="form-control">
          <input class="name" name="lastName" placeholder="new_surname" id="loginid" type="text"/></h3>
        </div>
    </div>
    <div class="form-group has-feedback">
      <div class="form-control">
        <input class="name" name="password" placeholder="new_password" id="loginid" type="password"/></h3>
      </div>
    </div>
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <div class="row">
      <div class="col-xs-12">
        <input type="submit" name="submit" value="Change" class="sub">
        <button type="button" onClick="history.back();" class="sub">Cancel</button>
      </div>
    </div>
  </form>

  @include('layout\footer')
</body>
</html>