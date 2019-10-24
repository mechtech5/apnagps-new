@extends('admin.layouts.master')
@section('content')
<main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-truck"></i>shipping address Details</h1>
          <p>Table to display analytical data effectively</p>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active"><a href="#">Receiver address</a></li>
        </ul>
      </div>
      <div class="row">
      	<div class="col-md-4">
       </div>
        <div class="col-md-4">
          <div class="tile">
            <div class="tile-body table-responsive">
            	
              <h5>Receiver Name:-  {{ $shiping->shipping_customername." ".$shiping->shipping_lastname }}</h5>
              <h5>Contact:-   {{ $shiping->shipping_contact }}</h5>
              <h5>Address1:-   {{ $shiping->shipping_address1 }}</h5>
              <h5>Address2:-   {{ $shiping->shipping_address2 }}</h5>
              <h5>State:-   {{ $shiping->state_name }}</h5>
              <h5>District:-   {{ $shiping->city_name }}</h5>
              <h5>Pincode:-  {{ $shiping->shipping_Pincode }}</h5>

            </div>
          </div>
        </div>
       <div class="col-md-4">
       </div>
      </div>
    </main>
@endsection