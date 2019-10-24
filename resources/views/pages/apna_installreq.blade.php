@extends('layouts.master')
@section('content')
 <section id="contact" class="section-with-bg wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2>INSTALL REQUEST</h2>
        </div>
        <div class="row">
          <div class="col-lg-8 col-md-8">
            <div class="hotel">
              <div class="hotel">
              	<h2 class="apnagps">GPS Installation</h2>
               <p class="text-justify">If you want your Car tracking system to be hidden and out of view, you must use a Hardwired GPS Vehicle Tracker. A hardwired GPS tracker can also be installed on the outside of the vehicle. This can keep the device even more discreet. In the case of a hardwired tracker, the Vehicle Tracking Device draws its power from the car’s main battery. For this it’s best to ask a technician to connect the device to its power supply.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-4">
            <div class="hotel-img">
                <img src="img/school_bus/Gps Installtion.jpg" alt="Hotel 1" class="img-fluid">
              </div>
          </div>
        </div>

            <div class="form"  id="enquiry_form">
          <h3 class="text-center font-weight-bold">Fill Installtion Form</h3>
          <div id="errormessage"></div>
          <form action="{{ route('installinfo_store')}}" method="post" role="form" class="contactForm">
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
                <lable>Choose Date</lable>
                 <input type="date" class="form-control" name="ondate" id="subject" />
             @error('ondate')
                    <span class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                  @enderror
              </div>
              <div class="form-group col-md-6">
              	<lable>Device Name you have/ want</lable>
                <input type="text" class="form-control" name="devicename" id="" />
               @error('enq_contact')
                    <span class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                  @enderror
              </div>
            </div>
            <div class="form-group">
              <lable>Where(mention the address)</lable>
                <textarea class="form-control" name="address" rows="5"></textarea>
            @error('address')
                    <span class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                  @enderror
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