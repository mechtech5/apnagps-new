<html>
<head>
	<style>
.main{	

    width:1024px;
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
.address{
   color:#31a94d;
}
.company_detail{
  margin-left: 200px;
}



</style>
</head>
<body>
	<div class="main">
    <div class="company_detail">
     <h2>The Venture Of Laxyo</h2>
        <p>Customer Product Detail</p>
    </div>
		<div class="split left">
<h2 class="heading">Apna Gps</h2>
<p class= "title">Online Gps Device Product Receipt</p>
<p>Customer :- {{ $data->billing_firstName." ".$data->billing_lastName }}</p>
<p>Device Name :- {{ $data->productname }}</p>
<p>Total No Of Devices :- {{ $data->qty }}</p>
<p>Contact :- {{ $data->shipping_contact }}</p>
<p>Cost :- {{ $data->price }}</p>
<p>TranID :- {{ $data->transectionId }}</p>
</div>
{{-- <div class="split left">
	<div class="centered">
     <h3>Billing Address</h3>
     <p>Address:- {{ $data->billing_address1 }}</p>
     <p>State:- {{ $data->state_name }}</p>
     <p>District:- {{ $data->city_name }}</p>
     <p>Pincode:- {{ $data->billing_Pincode }}</p>
    </div>
</div> --}}
<div class="split right">
	<div class="centered">
      <h3 class="address">Address</h3>
      <p>Address:- {{ $data->billing_address1 }}</p>
     <p>State:- {{ $data->state_name }}</p>
     <p>District:- {{ $data->city_name }}</p>
     <p>Pincode:- {{ $data->billing_Pincode }}</p>
     <br><br>
     <hr>
     <p>Sign</p>
    </div>
</div>

</div>
</body>
</body>
</html>