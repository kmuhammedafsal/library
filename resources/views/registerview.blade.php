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

<div class="col col-12 col-sm-4 col-md-4 col-lg-4" >
<br>
<br>
<br>
<br>
<br>
</div>




<table class="table table table-dark" style="display: block;overflow-x: auto;white-space: nowrap;" >
<tr><th scope="row">Name</th>
    <th scope="row">Phone</th>
    <th scope="row">Place</th>
    <th scope="row">Mailid</th>
    <th scope="row">Password</th></tr>
    
@foreach($registers as $register)

<tr class="table-primary">
   
    <td>{{$register->rname}}</td>
  
    <td>{{$register->rphone}}</td>
  
    <td>{{$register->rplace}}</td>
    
    <td>{{$register->rmailid}}</td>
   
    
    <td>{{$register->rpassword}}</td>
</tr>

@endforeach
</table>

</div>
@endsection

</div>
</div>