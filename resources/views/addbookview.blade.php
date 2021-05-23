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

<div class="col col-12 col-sm-4 col-md-4 col-lg-4" >
<br>
<br>
<br>
<br>
<br>
</div>

<form class="d-flex" method="post" action="/adsearch" >
      {{csrf_field() }}
<input class="form-control me-2" type="search" placeholder="Search book name" aria-label="Search" name="abookname"  >
        <button class="btn btn-primary" type="submit">Search</button>
      </form>


<table class="table table table-dark">
<tr><th scope="row">book id</th>
    <th scope="row">book name</th>
    <th scope="row">author</th>
    <th scope="row">category</th>
    <th scope="row">Publisher</th>
    <th scope="row">date</th>
    <th scope="row">rent amount</th>
    <th scope="row">image</th>
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

@endsection

</div>
</div>