@extends("admintheme")
@section("content")
<style>

 .bgnew
{
background-image:linear-gradient(rgba(0,0,0,0.9),rgba(0,0,0,0.9)),url(https://images.unsplash.com/photo-1618221941443-9ca819da798c?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=889&q=80);

height:100vh;
-webkit-background-size:cover;
background-size: cover;
background-position:center center;
}
</style>



<div class="bgnew">
<div class="container">
<div class="row">
<div class="col col-12 col-sm-10 col-md-10 col-lg-10" >
<form action="/adminregisterread" method="post">
{{csrf_field()}}
<table class="table table-borderless">

<br>

<center><h1 style="color:white"><b>REGISTRATION</b></h1></center>

<br>
<br>
<br>
<tr>
    <td style="color:white"><b>NAME</b></td>
    <td><input type="text" class="form-control" name="arname" value="{{old('rname')}}"><span class="text-danger">@error('arname'){{$message}} @enderror  </span></td>
</tr>
<tr>
    <td style="color:white"><b>PHONE</b></td>
    <td><input type="text" class="form-control" name="arphone" value="{{old('rphone')}}"><span class="text-danger">@error('arphone'){{$message}} @enderror  </span></td>
</tr>
<tr>
    <td style="color:white"><b>PLACE</b></td>
    <td><input type="text" class="form-control" name="arplace" value="{{old('rplace')}}"><span class="text-danger">@error('arplace'){{$message}} @enderror  </span></td>
</tr>
<tr>
    <td style="color:white"><b>MAIL ID</b></td>
    <td><input type="text" class="form-control" name="armailid" value="{{old('rmailid')}}"><span class="text-danger">@error('armailid'){{$message}} @enderror  </span></td>
</tr>
<tr>
    <td style="color:white"><b>PASSWORD</b></td>
    <td><input type="password" class="form-control" name="arpassword" value="{{old('rpassword')}}"><span class="text-danger">@error('arpassword'){{$message}} @enderror  </span></td>
</tr>
<tr>
    <td></td>
    <td><a href="/"><button class="btn btn-success">REGISTER</button></a></td>
</tr>



</table>

</form>



<br>
<br>






<table class="table table table-dark" style="display: block;overflow-x: auto;white-space: nowrap;" >
<tr><th scope="row">Name</th>
    <th scope="row">Phone</th>
    <th scope="row">Place</th>
    <th scope="row">Mailid</th>
    <th scope="row">Password</th></tr>
    
@foreach($adminregistrations as $adminregistration)

<tr class="table-primary">
   
    <td>{{$adminregistration->arname}}</td>
  
    <td>{{$adminregistration->arphone}}</td>
  
    <td>{{$adminregistration->arplace}}</td>
    
    <td>{{$adminregistration->armailid}}</td>
   
    
    <td>{{$adminregistration->arpassword}}</td>
</tr>

@endforeach
</table>

</div>
</div>
</div>
</div>
@endsection