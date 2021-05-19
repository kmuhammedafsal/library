@extends("usertheme")
@section("content")
<br>

<br>
<br>
<br>
<br>
<br>


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
</style><center>
<div class="card text-dark bg-light border-dark  mb-3" style="max-width: 700px;">
  <div class="row g-0">
    <div class="col-md-4">
    <img width="240" height="400" src="{{ URL ::asset('assets/project_img/'.$addbooks->pimage) }}">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title" >{{$addbooks->abookname}}</h5>
        <p class="card-text">{{$addbooks->abookid}}</p>
        <p class="card-text">{{$addbooks->aauthor}}</p>
        <p class="card-text">{{$addbooks->acategory}}</p>
        <p class="card-text">{{$addbooks->apublisher}}</p>
        <p class="card-text">{{$addbooks->adate}}</p>
       
      </div>
    </div>
  </div>
</div>



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
















@endsection