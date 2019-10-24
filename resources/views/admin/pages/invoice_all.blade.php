<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<style>
.main{	

    width:600px;
    height: 500px;
}
.heading {
  color:#d26321;
}
.left{
	float: left;
	width:400px;
    height: 250px;
   
}
.right{
	float: right;
	width:400px;
	margin-right: 250px;
    height: 250px;
   
}

.company_detail{
  margin-left: 200px;
}
.vintur{
  margin-left:50px;
}
.addr{
  font-size: 15px;
}



</style>
</head>
<body>
	<div class="main">
      <div class="company_detail">
     <h2>The Venture Of Laxyo</h2>
     <h5 class="vintur">Customer Product Detail</h5>
    </div>
    <h2 class="heading">Apna Gps</h2>
<p class= "title text-primary">Online Gps Device Product Receipt</p>
		<div class="row">
    <div class="col-md-4 col-lg-4">
@php
$totalcost =0;
@endphp

@foreach($product_all as $product)
{{-- <p>Customer :- {{ $product->billing_firstName." ".$product->billing_lastName }}</p> --}}
<p>Device Name :- {{ $product->productname }}</p>
<p>Total No Of Devices :- {{ $product->qty }}</p>
{{-- <p>Contact :- {{ $product->shipping_contact }}</p> --}}
<p>Cost :- {{ $product->price }}</p>
@php 

 $totalcost += $product->price;
@endphp
<p>---------</p>
</div>
</div>
<div class="clearfix"></div>
 @endforeach
<div class="row addr">
  <div class="center">
	<div class="float-right">
      <h3 class="address">Address</h3>
      <p>Address:- {{ $product->billing_address1 }}</p>
     <p>State:- {{ $product->state_name }}</p>
     <p>District:- {{ $product->city_name }}</p>
     <p>Pincode:- {{ $product->billing_Pincode }}</p>
    </div>
    <div class="float-left">
      <h3 class="address">Delivery detail</h3>
    <p>To :- {{ $product->billing_firstName." ".$product->billing_lastName }}</p>
    <p>Contact No. :- {{ $product->contact_no }}</p>
    <p>Final Amount:- {{ $totalcost }}</p>
    <p>TranID :- {{ $product->transectionId }}</p>
  </div>
</div>
</div>
</div>
</body>
</body>
</html>