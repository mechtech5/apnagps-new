@extends('layouts.master')
@section('content')
<section id="contact" class="section-with-bg wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2 class="needs">PLAN RENEWABLE REQUEST</h2>
        </div>
        <div class="row">
          <div class="col-lg-8 col-md-8">
            <div class="hotel">
              <div class="hotel">
              	<h2 class="apnagps">Why GPS Renewable Required</h2>
               <p class="text-justify">GPS required renewable as time provide by company for last term is over or goinng to be over shortly the services provide by company will be intrrupted dontworry where as we are here to help you please share you device information with us we will be happpy to help you</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-4">
            <div class="hotel-img">
                <img src="img/image/instl.jpg" alt="Hotel 1" class="img-fluid">
              </div>
          </div>
        </div>

            <div class="form"  id="enquiry_form">
          <h3 class="text-center font-weight-bold">Gps Renewable Form</h3>
          <div id="errormessage"></div>
          <form action="{{ route('renewable_store')}}" method="post" role="form" class="contactForm">
            @csrf
            <div class="form-row">
              <div class="form-group col-md-6">
                <lable>Name</lable>
                <input type="text" name="cust_name" class="form-control" id="custname" placeholder="Your Name"/>
                @error('cust_name')
                    <span class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                  @enderror
              </div>
              <div class="form-group col-md-6">
                <lable>Contact No.</lable>
                <input type="text" class="form-control" name="contact_no" id="email" placeholder="Your Contact"/>
               @error('contact_no')
                    <span class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                  @enderror
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <lable>Device Expiry Date</lable>
                 <input type="date" class="form-control" name="ondate" id="subject" />
             @error('ondate')
                    <span class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                  @enderror
              </div>
              <div class="form-group col-md-6">
              	<lable>choose To Renew Plan</lable>
                <input type="date" class="form-control" name="dateto" id="" />
               @error('dateto')
                    <span class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                  @enderror
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <lable>Device Name</lable>
                 <input type="text" class="form-control" name="devicename" id="subject" />
             @error('devicename')
                    <span class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                  @enderror
              </div>
              <div class="form-group col-md-6">
                <lable>Where(mention the address)</lable>
                <textarea class="form-control" name="address" rows="5"></textarea>
            @error('address')
                    <span class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                  @enderror
              </div>
            </div>
            <div class="text-center"><button type="submit">Submit</button></div>
          </form>
           @if($message = Session::get('success'))
      <div class="alert alert-success">  {{$message}}
      </div>
    @endif 
        </div>
    </div>
</section>
@endsection