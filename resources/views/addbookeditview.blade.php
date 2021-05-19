@extends("admintheme")
@section("content")
<div class="container">

<div class="row">


<div class="col">
<form action="/bookeditprocess/{{ $addbooks->id }}" method="post" enctype="multipart/form-data">
{{csrf_field()}}<table class="table table-borderless">

<tr>
    <td>book id</td>
    <td><input type="text"  name="abookid" class="form-control" value="{{$addbooks->abookid}}"></td>

</tr>
<br>

<tr>
    <td> book name</td>
    <td><input type="text"  name="abookname" class="form-control" value="{{$addbooks->abookname}}"></td>
</tr>
<br>

<tr>
    <td>author</td>
    <td><input type="text" name="aauthor" class="form-control" value="{{$addbooks->aauthor}}"></td>
</tr>
<br>

<tr>
    <td>category</td>
    <td><input type="text" name="acategory" class="form-control" value="{{$addbooks->acategory}}"></td>
</tr>
<br>

<tr>
    <td>publisher</td>
    <td><input type="text" name="apublisher" class="form-control" value="{{$addbooks->apublisher}}"></td>
</tr>
<tr>
<td>date</td>
   <td> <input type="text" name="adate" class="form-control" value="{{$addbooks->adate}}">
   </td>
          </tr>   
<tr>
    <td>image:</td>
    <td><input type="file" name="pimage"class="form-control" value="{{$addbooks->pimage}}"></td>
    
    
</tr>




<tr>
    <td>
   <center> <td><button class="btn btn-success">Insert</button></a></td></center>
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






</form>







@endsection