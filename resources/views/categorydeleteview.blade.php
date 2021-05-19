@extends("admintheme")
@section("content")
<div class="container">

<div class="row">


<div class="col">
<form action="/categorydeleteprocess/{{ $categorys->id }}" method="post" enctype="multipart/form-data">
{{csrf_field()}}<table class="table table-borderless">

<tr>
    <td>category id</td>
    <td><input type="text"  name="cid" class="form-control" value="{{$categorys->cid}}"></td>

</tr>
<br>

<tr>
    <td>category name</td>
    <td><input type="text"  name="cname" class="form-control" value="{{$categorys->cname}}"></td>
</tr>


<tr>
    <td></td>
   <center> <td><td> <button onclick="return confirm('Are you sure want to delete ?')" class="btn btn-danger"> DELETE  </button></td></td></center>
   
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






</form>







@endsection