@extends('layouts.master')
@section('content')
<section id="contact" class="section-with-bg wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2>SERVICES REQUEST</h2>
          
        </div>
        <div class="row">
        	<div class="col-lg-4 col-md-4 text-center">
        		<div class="hotel-img">
                <img src="img/image/ser11.jpg" alt="Hotel 1" class="img-fluid">
              </div>
          </div>
          <div class="col-lg-8 col-md-8 text-center">
        		<div class="hotel">
        			<h3>Service Request Form</h3>
               <p class="text-justify">A GPS tracking unit is a device that uses the Global Positioning.
               Here we have form avaiable with all our feature you can send us detail with this form we will be happy to serve you .pls fill this form</p>
              </div>
          </div>
      </div>
       <div class="row" id="etrete">
          <div class="col-lg-12 col-md-12">
        		<div class="hotel">
               <div class="form" id="enquiry_form">
          <h3 class="text-center font-weight-bold">Services Form</h3>
          <div id="errormessage"></div>
          <form action="{{ route('allservices_store')}}" method="post" role="form" class="contactForm">
            @csrf
            <div class="form-row">
              <div class="form-group col-md-4">
                <lable>Customer Name</lable>
                <input type="text" name="customername" class="form-control" id="custname" placeholder="Your Name" required />
              </div>
              <div class="form-group col-md-4">
                <lable>Contact No.</lable>
                <input type="text" class="form-control" name="contact_no" id="email" placeholder="Your Contact No." required />
              </div>
               <div class="form-group col-md-4">
                <lable>Need gps Device</lable>
               <select name="device_for" class="form-control">
               	<option value="commercial">commercial</option>
               	<option value="personal">personal</option>
               	<option value="pets">pets</option>
               	<option value="other">other</option>
               </select>
              </div>
            </div>
            <h3 class="apnagps">Please choose services You want</h3>
            <div class="form-row">
              <div class="form-group col-md-8">
                <lable>Services For Period</lable>
              </div>
              <div class="form-group col-md-2">
                <lable>6TH Month Services</lable>
                <input type="radio"  name="period" value="6month"/>
              </div>
              <div class="form-group col-md-2">
                <lable> 1 year Services</lable>
                <input type="radio"  name="period"  value="1year"/>
              </div>
            </div>
               <div class="form-row">
              <div class="form-group col-md-8">
                <lable>Geo Fancing</lable>
              </div>
              <div class="form-group col-md-2">
                <lable>Yes</lable>
                <input type="radio"  name="geofance" value="Yes"/>
              </div>
              <div class="form-group col-md-2">
                <lable>No</lable>
                <input type="radio"  name="geofance" value="No" />
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-8">
                <lable>Route Assigned for Device</lable>
              </div>
              <div class="form-group col-md-2">
                <lable>Yes</lable>
                <input type="radio"  name="assigned" value="Yes"/>
              </div>
              <div class="form-group col-md-2">
                <lable>No</lable>
                <input type="radio"  name="assigned" value="No" />
              </div>
            </div>
             <div class="form-row">
              <div class="form-group col-md-8">
                <lable>Cut-off services</lable>
              </div>
              <div class="form-group col-md-2">
                <lable>Yes</lable>
                <input type="radio"  name="cut_off" value="Yes"/>
              </div>
              <div class="form-group col-md-2">
                <lable>No</lable>
                <input type="radio"  name="cut_off"  value="No"/>
              </div>
            </div>
             <div class="form-row">
              <div class="form-group col-md-8">
                <lable>Message Alert</lable>
              </div>
              <div class="form-group col-md-2">
                <lable>Yes</lable>
                <input type="radio"  name="mgs_alert" value="Yes"/>
              </div>
              <div class="form-group col-md-2">
                <lable>No</lable>
                <input type="radio"  name="mgs_alert"  value="No"/>
              </div>
            </div>
              <div class="form-row">
              <div class="form-group col-md-8">
                <lable>Email Alert</lable>
              </div>
              <div class="form-group col-md-2">
                <lable>Yes</lable>
                <input type="radio"  name="email_alert" value="Yes" />
              </div>
              <div class="form-group col-md-2">
                <lable>No</lable>
                <input type="radio"  name="email_alert"  value="No" />
              </div>
            </div>
             <div class="form-row">
              <div class="form-group col-md-8">
                <lable>Over speed Alert</lable>
              </div>
              <div class="form-group col-md-2">
                <lable>Yes</lable>
                <input type="radio"  name="over_speed" value="Yes" />
              </div>
              <div class="form-group col-md-2">
                <lable>No</lable>
                <input type="radio"  name="over_speed"  value="No" />
              </div>
            </div>
               <div class="form-row">
              <div class="form-group col-md-8">
                <lable>Theift Alert</lable>
              </div>
              <div class="form-group col-md-2">
                <lable>Yes</lable>
                <input type="radio"  name="theft" value="Yes" />
              </div>
              <div class="form-group col-md-2">
                <lable>No</lable>
                <input type="radio"  name="theft"  value="No" />
              </div>
            </div>
              <div class="form-row">
              <div class="form-group col-md-8">
                <lable>Event services</lable>
              </div>
              <div class="form-group col-md-2">
                <lable>Yes</lable>
                <input type="radio"  name="event" value="Yes" />
              </div>
              <div class="form-group col-md-2">
                <lable>No</lable>
                <input type="radio"  name="event"  value="No" />
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-8">
                <lable>Fule Sensor</lable>
              </div>
              <div class="form-group col-md-2">
                <lable>Yes</lable>
                <input type="radio"  name="fulesensor" value="Yes" />
              </div>
              <div class="form-group col-md-2">
                <lable>No</lable>
                <input type="radio"  name="fulesensor"  value="No" />
              </div>
            </div>
             <div class="form-row">
              <div class="form-group col-md-8">
                <lable>Data Timing</lable>
              </div>
              <div class="form-group col-md-2">
                <lable>Yes</lable>
                <input type="radio"  name="datatime" value="Yes"/>
              </div>
              <div class="form-group col-md-2">
                <lable>No</lable>
                <input type="radio"  name="datatime" value="Yes" />
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <lable>Total Device you want</lable>
               <input type="number" class="form-control" name="total" />
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
          </div>
      </div>
  </div>
</section>
@endsection