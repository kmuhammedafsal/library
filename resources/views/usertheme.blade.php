<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<style>
{
	margin: 0;
	padding: 0;
}
body {
	text-align: center;
}
.wrapper {
	width: 1170px;
	margin: 0 auto;
}
header {
	height: 100px;
	background: #262626;
	width: 100%;
	z-index: 10;
	position: fixed;
}
.logo {
	width: 30%;
	float: left;
	line-height: 100px;
}
.logo a {
	text-decoration: none;
	font-size: 30px;
	font-family: poppins;
	color: #fff;
	letter-spacing: 5px;
}
nav {
	float: right;
	line-height: 100px;
}
nav a {
	text-decoration: none;
	font-family: poppins;
	letter-spacing: 4px;
	font-size: 20px;
	margin: 0 10px;
	color: #fff;
}
.banner-area {
	width: 100%;
	height: 500px;
	position: fixed;
	top: 100px;
	background-image: url(https://i.postimg.cc/T3B3WFcv/2.jpg);
	-webkit-background-size: cover;
	background-size: cover;
	background-position: center center;
}
.banner-area h2 {
	padding-top: 8%;
	font-size: 70px;
	font-family: poppins;
	text-transform: uppercase;
	color: #fff;
}
.content-area {
	width: 100%;
	position: relative;
	top: 450px;
	background: #ebebeb;
	height: 1500px;
}
.content-area h2 {
	font-family: poppins;
	letter-spacing: 4px;
	padding-top: 30px;
	font-size: 40px;
	margin: 0;
}
.content-area p {
	padding: 2% 0px;
	font-family: poppins;
	line-height: 30px;
}
</style>

<body>


<section>


        <MARQUEE <a class="navbar-brand" href="#" style="color:black"><b>welcome {{session('loggeduser')}}</b></a></MARQUEE>
       
<div class="box-area">




		<header>

			<div class="wrapper">
      
				<div class="logo">
					<a href="#">   </a>
				</div>
				<nav>
					<a href="/userhome">Home</a> <a href="/aboutus">T&C</a> <a href="/userview">BOOKS</a> <a href="/cartlist">CART</a> <a href="/order">booking</a><a href="/myorders">myorder</a> <a href="/ulogout">Logout</a>
					<i class="fa flaticon-open-mail"></i>
     
      <a href="/myorders" style="color:white"><img height="25px"src="https://img.favpng.com/18/21/0/email-computer-icons-message-icon-design-png-favpng-CF1hMx1H111YeRCyNpfyFsMzX.jpg">
    </img> </a></ul>
          
				</nav>
        <br>
        
        
        <br>
        <br>

       

			</div>
      
		</header>
    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>


@yield("content")