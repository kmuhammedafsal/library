
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

<div class="col col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3"></div>
<div class="col col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">

<form action="/ordereditprocess/{{$prod->id}}" method="post" >
{{csrf_field()}}<table class="table table-borderless  table-secondary">
<br><br><br>
<tr>
    <td></td><td></td>
</tr>

<tr>
    <td>Order Id</td>
    <td>{{$prod->id}}</td>

</tr>


<tr>
    <td>Furniture Id</td>
    <td>{{$prod->abookid}}</td>
</tr>


<tr>
    <td>User Id</td>
    <td>{{$prod->rname}}</td>
</tr>


<tr>
    <td>Address</td>
    <td>{{$prod->address}}</td>
</tr>


<tr>
    <td>Payment Method</td>
    <td>{{$prod->paymentmethod}}</td>
</tr>
<tr>
    <td>Update Customer Status</td>
    <td><select class="form-select" aria-label="Default select example" name="status">
          <option selected value="pending">pending</option>
            <option value="Your Order has been placed">Your Order has been placed</option>
              <option value="Your item has been delivered">Your item has been delivered</option>
              <option value="Order Cancelled">Order Cancelled</option>
              <option value="Book Returned">Order Returned</option>
       </select></td>



</tr>

<tr>

    <td><td>  <button class="btn btn-secondary"> Update Data </button></td></td>

</tr>
</table>
</form>
</div>
</div>
<div class="col col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3"></div>
</div>
</div>
@endsection