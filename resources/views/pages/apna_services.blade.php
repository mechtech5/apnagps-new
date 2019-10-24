@extends('layouts.master')
@section('content')
<section id="contact" class="section-with-bg wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2 class="needs">Complaint</h2>
          
        </div>
        <div class="row">
        	<div class="col-lg-4 col-md-4 text-center">
        		<div class="hotel-img">
                <img src="img/school_bus/Complaint.jpg" alt="Hotel 1" class="img-fluid">
              </div>
          </div>
          <div class="col-lg-8 col-md-8 text-center">
        		<div class="hotel">
        			<h3>Your Should Write for us</h3>
               <p class="text-justify">A GPS tracking unit is a device that uses the Global Positioning System to determine the precise location of a vehicle, person, or other asset to which it is attached and to record the position of the asset at regular intervals. The recorded location data can be stored within the tracking unit, or it may be transmitted to a central location data base, or any internet-connected computer, using a Cellular ( GPRS), Radio, or a Satellite modem embedded in the unit. This allows the asset's location to be displayed against a map backdrop either in real-time or when analysing the track later, using customized software....</p>
              </div>
          </div>
      </div>
      <div class="row">
          <div class="col-lg-12 col-md-12">
        		<div class="hotel">
        			<h3 class="apnagps">Software Features</h3>
               <ul class="gps_other">
               	<li>You can easily track your person or object world wide.</li>
               	<li> Our application can provide street level map to seen your object so that you can get detail data.</li>
               	<li>This software is useful to any type of organization or company they want to monitor movable object.</li>
               </ul>
              </div>
          </div>
      </div>
       <div class="row">
          <div class="col-lg-12 col-md-12">
        		<div class="hotel">
               <div class="form" id="enquiry_form">
          <h3 class="text-center font-weight-bold">Complaint Form</h3>
          <div id="errormessage"></div>
          <form action="{{ route('complaintstore')}}" method="post" role="form" class="contactForm">
            @csrf
            <div class="form-row">
              <div class="form-group col-md-6">
                <lable>Customer Name</lable>
                <input type="text" name="customername" class="form-control" id="enq_name" placeholder="Your Name"/>
                @error('customername')
                    <span class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                  @enderror
              </div>
              <div class="form-group col-md-6">
                <lable>Vehicle No.</lable>
                <input type="text" class="form-control" name="vehicle_no" id="email" placeholder="Your Vehicle No."/>
               @error('vehicle_no')
                    <span class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                  @enderror
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <lable>Registred Email Id</lable>
                 <input type="text" class="form-control" name="reg_email" id="subject" placeholder="Your Email"/>
             @error('reg_email')
                    <span class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                  @enderror
              </div>
              <div class="form-group col-md-6">
                <lable>mobile No.</lable>
                <input type="text" class="form-control" name="mobile_no" placeholder="mobile No." />
               @error('mobile_no')
                    <span class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                  @enderror
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <lable>Address</lable>
                <textarea class="form-control" name="address" rows="3"></textarea>
             @error('address')
                    <span class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                  @enderror
              </div>
              <div class="form-group col-md-6">
                <lable>Description</lable>
                <textarea class="form-control" name="description" rows="3"></textarea>
               @error('description')
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

