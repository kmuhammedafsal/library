@extends("admintheme")
@section("content")
<style>

 .bgnew
{
background-image:linear-gradient(rgba(0,0,0,0.9),rgba(0,0,0,0.9)),url(https://images.unsplash.com/photo-1569407228235-9a744831a150?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MjB8fGxpYnJhcnl8ZW58MHx8MHx8&ixlib=rb-1.2.1&w=1000&q=80);

height:100vh;
-webkit-background-size:cover;
background-size: cover;
background-position:center center;
}
</style>



<div class="bgnew">

<div class="container">
<div class="row">
<div class="col col-12 col-sm-10 col-md-10 col-lg-10">


<form action="/addbookread" method="post" enctype="multipart/form-data">
{{csrf_field()}}
<table class="table table-borderless">
<tr>
<br>
<br>
<br>
<br>
<center><h1 style="color:white"><b>ADD BOOK</b></h1></center>
<br>
<br>
    <td style="color:white"><b>BOOK ID</b></td>
    <td><input type="text" class="form-control" name="abookid"></td>
</tr>
<tr>
    <td style="color:white"><b>BOOK NAME</b></td>
    <td><input type="text" class="form-control" name="abookname"></td>
</tr>
<tr>
    <td style="color:white"><b>AUTHOR</b></td>
    <td><input type="text" class="form-control" name="aauthor"></td>
</tr>
<tr>
<td style="color:white"><b>CATEGORY</b></td>
<td>
    <select name="acategory" class="form-control">
    @foreach($bgenre as $bgenre)
              <option>{{$bgenre->cname }}</option>
              @endforeach</td>
</tr>
<tr>
    <td style="color:white"><b>PUBLISHER NAME</b></td>
    <td><input type="text" class="form-control" name="apublisher"></td>
</tr>
<tr>
    <td style="color:white"><b>DATE OF PUBLISHING</b></td>
    <td><input type="date" class="form-control" name="adate"></td>
</tr>
<tr>
    <td style="color:white"><b>RENT AMOUNT</b></td>
    <td><input type="text" class="form-control" name="arent"></td>
</tr>
<tr>
<td style="color:white"><b>IMAGE</b></td>
    <td><input type="file" name="pimage"class="form-control"></td>
    
    
</tr>

<tr>
    <td></td>
    <td><button class="btn btn-success">SUBMIT</button></td>
</tr>
</table>
</form>

</div>
<div class="col"></div>
</div>
</div>
</div>
</body>
@endsection