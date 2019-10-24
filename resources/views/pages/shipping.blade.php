@extends('layouts.master')
@section('content')
<section id="contact" class="section-with-bg wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2>Shipping Address Detail For {{ $address->billing_firstName }}</h2>
        </div>
         <div class="row">
         	<div class="col-md-4 col-lg-4">
              
         	</div>	
         	<div class="col-md-2 col-lg-2">
                <p>local Address 1</p>
         		<p>local Address 2</p>
         		<p>state</p>
         		<p>District</p>
         		<p>Mobile</p>
         		<p>Date</p>
         	</div>
         	<div class="col-md-2 col-lg-2">
         		<p>{{ $address->billing_address1 }}</p>
         		<p>{{ $address->billing_address2 }}</p>
         		<p>{{ $address->state_name }}</p>
         		<p>{{ $address->city_name }}</p>
         		<p>{{ $address->contact_no }}</p>
         		<p>With in Three Day</p>
         	</div>
         	<div class="col-md-4 col-lg-4">
         	</div>

         </div>	
         
          	
         

        </div>
  </div>
</section>
@endsection