@section('insides')

@if($errors->any())
	@foreach ($errors->all() as $error)
		{{error}}
	@endforeach
@endif

@endsection

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Candal|Alegreya+Sans">
  <link rel="stylesheet" type="text/css" href="public/test/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="public/test/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="public/test/css/imagehover.min.css">
  <link rel="stylesheet" type="text/css" href="public/test/css/style.css">
  <style>
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

  </style>
</head>

<body>
<center>
<div class="modal-content">
  <div class="modal-header">
      <h2 class="modal-title text-center form-title">Sign up</h2>
  </div>
  <div class="modal-body padtrbl">
      <div class="login-box-body">
      	<div class="form-group">
        	<form name="" id="loginForm" action="{{URL::to('/reg')}}" method=POST>
            <div class="form-group has-feedback">
                <div class="form-control">
                  <h3>Your email:
                 <input class="name" name="email" placeholder="email" id="loginid" type="text"/></h3>
                </div>
            </div>
  					<div class="form-group has-feedback">
                <div class="form-control">
                  <h3>First name:
  	               <input class="name" name="firstName" placeholder="name" id="loginid" type="text"/></h3>
                </div>
            </div>
          	<div class="form-group has-feedback">
            	  <div class="form-control">
                  <h3>Last name:
                  <input class="name" name="lastName" placeholder="surname" id="loginid" type="text"/></h3>
                </div>
          	</div>
          	<div class="form-group has-feedback">
                  <div class="form-control">
                    <h3>Password:
                  	<input class="name" name="password" placeholder="password" id="loginid" type="password"/></h3>
                  </div>
          	</div>
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <div class="row">
              <div class="col-xs-12">
                <input type="submit" name="submit" value="Sign up" class="sub">
                <p><i>If you have an account, go here:</p></i>
                <input type="submit" name="sub" value="Sign in" class="sub" href="/rs">
              </div>
            </div>
          </form>
        </div>
      </div>
  </div>
</div></center>
@include ('layout\footer')
</body>
</html>