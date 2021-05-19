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
<div class="col col-12 col-sm-4 col-md-4 col-lg-4"></div>
<div class="col col-12 col-sm-10 col-md-10 col-lg-10">
<form action="/addmemberread" method="post">
{{csrf_field()}}
<table class="table table-borderless">
<tr>
<br>
<br>
<br>
<br>
<center><h1 style="color:white"><b>ADD MEMBER</b></h1></center>
<br>
<br>
</tr>
<tr>
    <td style="color:white"><b>NAME</b></td>
    <td><input type="text" class="form-control" name="mn"></td>
</tr>
<tr>
    <td style="color:white"><b>MEMBERSHIP ID</b></td>
    <td><input type="text" class="form-control" name="mid"></td>
</tr>


<tr>
    <td style="color:white"><b>JOINING DATE</b></td>
    <td><input type="DATE" class="form-control" name="jd"></td>
</tr>
<tr>
    <td style="color:white"><b>EXPIRY DATE</b></td>
    <td><input type="DATE" class="form-control" name="ed"></td>
</tr>
<tr>
    <td style="color:white"><b>PAYMENT(2000 per year)</b></td>
    <td><input type="text" class="form-control" name="am"></td>
</tr>
<tr>
    <td style="color:white"><b>PAYMENT MODE</b></td>
    <td><input type="text" class="form-control" name="pm"></td>
</tr>

    <td></td>
    <td><button class="btn btn-success">SUBMIT</button></td>
</tr>
</table>
</form>

<table class="table table table-dark">
<tr>
    <th scope="row">NAME</th>
    <th scope="row">MEMBERSHIP ID</th>
    <th scope="row">JOINING DATE</th>
    <th scope="row">EXPIRY DATE</th>
    <th scope="row">AMOUNT</th>
    <th scope="row">PAYMENT MODE</th>
    </tr>
    
@foreach($addmembers as $addmember)

<tr class="table-primary">

    <td>{{$addmember->mn}}</td>

    <td>{{$addmember->mid}}</td>
  
    <td>{{$addmember->jd}}</td>

    <td>{{$addmember->ed}}</td>
  
    <td>{{$addmember->am}}</td>
    
    <td>{{$addmember->pm}}</td>
    
</tr>

@endforeach
</table>
</div>
<div class="col"></div>
</div>
</div>
</div>
</body>
@endsection