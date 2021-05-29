@extends("admintheme")
@section("content")
<section style="background-color:black;height:300vw" >

<style type="text/css">
@media print {
    #hide {
        display :  none;
    }
}
</style>

<br>

<div class="container">
<div class="row">
<div class="col col-12 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-xxl-2 ">

 </div>
 
 <div class="col col-12 col-sm-8 col-md-8 col-lg-8 col-xl-8 col-xxl-8 ">
 <div style="text-align:right"><button id="hide" class="btn btn-outline-warning" onclick="window.print()">Print</button></div>
 <br>
 <table class="table  table-success table-striped" style="display: block;overflow-x: auto;white-space: nowrap;" >

<tr><th>Order Id</th>
    <th >Book Id</th>
    <th >User Name</th>
    <th >Address</th>
    <th >Booking date</th>
    <th >Status</th>
    <th >Payment Method</th>
    <th></th> 
    </tr>

@foreach($prod as $prods)

<tr >

    <td>{{$prods->id}}</td>
    <td>{{$prods->abookid}}</td>
    <td>{{$prods->rname}}</td>
    <td>{{$prods->address}}</td>
    <td>{{$prods->bookingdate}}</td>
    <td>{{$prods->status}}</td>
    <td>{{$prods->paymentmethod}}</td>
    
    <td><a class="btn btn-warning"  href="/order/{{$prods->id}}/edit" id="hide" >UPDATE</a></td>
    
</tr>

@endforeach
</table>
</div>
 <div class="col col-12 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-xxl-2">
</div>
</div>
</div>
</section>
@endsection