<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>










<br>

<br>
<br>




<style>

header
{
background-image:linear-gradient(rgba(0,0,0,0.9),rgba(0,0,0,0.9)),url(https://images.pexels.com/photos/1762851/pexels-photo-1762851.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940);

height:100vh;
-webkit-background-size:cover;
background-size: cover;
background-position:center center;
}
</style>
<header>

<div class="container">
<br>
<br>
<br>
<br>
<div class="row">

<div class="col">


</div>

<style>
.card mb-3
{
    max: height 700px;
    align:center;
}
</style>


<center>
<div class="card text-dark  border-dark  mb-3" style="max-width: 700px;background-image:url(https://images.pexels.com/photos/6775241/pexels-photo-6775241.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940)">
  <div class="row g-0">
    <div class="col-md-4">
    
    </div>
    <div class="col-md-12">
      <div class="card-body">
        <tr>
       
        <h2>Registration</h2>
        <br>
        
        
        <br>
        <form action="/registerread" method="post">
{{csrf_field()}}<table class="table table-borderless">
<tr>


<tr>
 
    <input type="text" name="rname" value="{{old('rname')}}" class="form-control" placeholder="Your Name...">
    <span class="text-danger">@error('rname'){{$message}} @enderror  </span>

</tr>
<br>
<tr>
    
   <input type="text"  name="rphone"  value="{{old('rphone')}}" class="form-control" placeholder="Your Phone Number...">
    <span class="text-danger">@error('rphone'){{$message}} @enderror  </span>
   
</tr>
<br>
<tr>
   
 <input type="text" name="rplace"  value="{{old('rplace')}}" class="form-control" placeholder="Your Place...">
    <span class="text-danger">@error('rplace'){{$message}} @enderror  </span>
   
</tr>
<br>
<tr>
    
  <input type="text" name="rmailid"  value="{{old('rmailid')}}"  class="form-control" placeholder="Your Email Id...">
    <span class="text-danger">@error('rmailid'){{$message}} @enderror  </span>

</tr>
<br>

<br>
<tr>
    <input type="password" name="rpassword"   value="{{old('rpassword')}}" class="form-control" placeholder="Password...">
    <span class="text-danger">@error('rpassword'){{$message}} @enderror  </span>
    </tr>
<tr>
 <td></td>
 <td></td>
 <td></td>
 <td></td>
 <td></td>
    <td><button class="btn btn-success">REGISTER</button></td></center><td></td>
</tr>



</table>
</form>


<div>
							<a style="color:black" href="/index" class="txt1">
								Already have an account!Login
							</a>
						</div>
        
        
        <br>
        <br>
        <br>
        </tr>
        
      </div>
    </div>
  </div>
</div>

</form>

<tr>
    <td>
   
   </td>
</tr>
</div>
</div>

</div>




<div class="container">
<br>
<br>
<br>
<br>
<div class="row">









</div>

<div class="col">



</div>
</div>
</div>














</header>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>