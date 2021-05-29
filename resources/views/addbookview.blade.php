@extends("admintheme")
@section("content")
<section style="background-color:black;height:300vw" >

<div class="container">

<div class="row">

<div class="col col-12 col-sm-12 col-md-12 col-lg-12" >
<br>
<br>
<br>
<br>
<br>


<form class="d-flex" method="post" action="/adsearch" >
      {{csrf_field() }}
<input class="form-control me-2" type="search" placeholder="Search book name" aria-label="Search" name="abookname"  >
        <button class="btn btn-primary" type="submit">Search</button>
      </form>


<table class="table table table-dark" style="display: block;overflow-x: auto;white-space: nowrap;" >
<tr><th scope="row">book id</th>
    <th scope="row">book name</th>
    <th scope="row">author</th>
    <th scope="row">category</th>
    <th scope="row">Publisher</th>
    <th scope="row">date</th>
    <th scope="row">rent amount</th>
    <th scope="row">image</th>
    <th></th><th></th>
    </tr>
    
@foreach($addbooks as $addbook)

<tr class="table-primary">
   
    <td>{{$addbook->abookid}}</td>
    <td>{{$addbook->abookname}}</td>
    <td>{{$addbook->aauthor}}</td>
    <td>{{$addbook->acategory}}</td>
    <td>{{$addbook->apublisher}}</td>
    <td>{{$addbook->adate}}</td>
    <td>{{$addbook->arent}}</td>
    <td><img width="150" height="100" src="{{ URL ::asset('assets/project_img/'.$addbook->pimage) }}"></td>
    <td><a class="btn btn-warning" href={{"/addbookeditview/".$addbook->id}}>EDIT</a></td>
    <td><a class="btn btn-danger"  href={{"/addbookdeleteview/".$addbook->id}}>DELETE</a></td>
</tr>

@endforeach
</table>
</div>
</section>
@endsection

</div>
