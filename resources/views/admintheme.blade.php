<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book World</title>
</head>
<body>
<style>
* {box-sizing: border-box}
body {font-family: Arial, Helvetica, sans-serif;}

.navbar {
  width: 100%;
  background-color: #555;
  overflow: auto;
}

.navbar a {
  float: left;
  padding: 12px;
  color: white;
  text-decoration: none;
  font-size: 17px;
  width: 10%; /* Four links of equal widths */
  text-align: center;
}

.navbar a:hover {
  background-color: #000;
}

.navbar a.active {
  background-color: #4CAF50;
}

@media screen and (max-width: 500px) {
  .navbar a {
    float: none;
    display: block;
    width: 100%;
    text-align: left;
  }
}
</style>
<body>

<div id="hide">

<div class="navbar">
  <a class="active" href="home"><i class="fa fa-fw fa-home"></i> Home</a> 

  <a href="/categorys"><i class="fa fa-fw fa-search"></i>Category</a> 
  <a href="/addcategory"><i class="fa fa-fw fa-envelope"></i>Books</a>
  <a href="/addbooks"><i class="fa fa-fw fa-envelope"></i>Bookview</a>
  <a href="/adminregistrations"><i class="fa fa-fw fa-envelope"></i>Adminregistration</a>
  <a href="/registerview"><i class="fa fa-fw fa-envelope"></i>User Register View</a> 
  <a href="/vieworders"><i class="fa fa-fw fa-envelope"></i>BookIssues</a> 
 
  
  
      <a href="/alogout"><button class="btn btn-outline-success" >logout</button></a>
      <td style="color:white"><b>welcome {{session('loggeduser')}}</b></td>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>


</div>

@yield("content")
