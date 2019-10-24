@extends('layouts.master')
@section('content')
<section id="features" class="section-with-bg wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2 class="needs">CONTACT US-</h2>
          
        </div>
        @if($message = Session::get('success'))
      
      <div class="alert alert-success">  {{$message}}
      </div>
      @endif 
         <div class="form" id="enquiry_form">
          
          <div id="errormessage"></div>
          <form action="{{ route('contactus')}}" method="post" role="form" class="contactForm">
            @csrf
            <div class="form-row">
              <div class="form-group col-md-12">
                <lable>Name</lable>
                <input type="text" name="name" class="form-control" id="enq_name" placeholder="Your Name" required />
                @error('enq_name')
                    <span class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                  @enderror
              </div>
              <div class="form-group col-md-12">
                <lable>Email</lable>
                <input type="text" class="form-control" name="email" id="email" placeholder="Your Email"/>
               @error('enq_email')
                    <span class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                  @enderror
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-12">
                <lable>Mobile</lable>
                <input type="text" class="form-control" name="contact" id="contact" placeholder="Your Contact" required/>
               @error('enq_contact')
                    <span class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                  @enderror
              </div>
            </div>
            <div class="form-group">
              <lable>Message us</lable>
              <textarea class="form-control" name="message" rows="5"></textarea>
            @error('enq_detail')
                    <span class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                  @enderror
            </div>
            <div class="text-center"><button type="submit" class="btn btn-info">Send</button></div>
          </form>
        </div>
        <div class="row">
          <div class="col-md-2 col-lg-2">
            
          </div>
        	<div class="col-lg-2 col-md-2 text-center">
        		<div class="hotel-img">
                <img src="img/icons/Call.png" alt="Hotel 1" class="img-fluid cont" >
                <h5>Give us a call</h5>
                <p>+91-8815218227</p>
              </div>
        	</div>
        	<div class="col-lg-2 col-md-2 text-center">
        		<div class="hotel-img">
                <img src="img/icons/Letter.png" alt="Hotel 1" class="img-fluid cont">
                <h5>Write to us</h5>
                <p>contact@apnagps.com</p>
              </div>
        	</div>
        	<div class="col-lg-2 col-md-2 text-center">
        		<div class="hotel-img">
                <img src="img/icons/Chats.png" alt="Hotel 1" class="img-fluid cont">
                <h5>Chat with us</h5>
                <p>live:3ead5936216bbf41</p>
              </div>
        	</div>
        	<div class="col-lg-2 col-md-2 text-center">
        		<div class="hotel-img">
                <img src="img/icons/Address.png" alt="Hotel 1" class="img-fluid cont" >
                <h5>Address</h5>
                <p>Laxyo House, County Park,
                   Plot No. 2, MR-5,
                   Mahalaxmi Nagar, Indore-452010</p>
              </div>
        	</div>
          <div class="col-md-2 col-lg-2">
           
          </div>
        </div>
        </div>
    </section>
@endsection