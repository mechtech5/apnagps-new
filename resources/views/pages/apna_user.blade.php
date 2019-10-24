@extends('layouts.master')
@section('content')
<section id="contact" class="section-with-bg wow fadeInUp">
      <div class="container">
        <div class="section-header text-light bg-dark">
          <h2 class="apnagps">Demo For New User</h2>
          
        </div>
        <div class="row">
          <div class="col-lg-12 col-md-12 text-center">
        		<div class="hotel">
        			<h3 style="color:black">Register To Take Apna Gps Software Demo</h3>
               <p class="text-justify"></p>
              </div>
          </div>
      </div>
      
       <div class="row">
          <div class="col-lg-12 col-md-12">
        		<div class="hotel">
               <div class="form" id="enquiry_form">
          <h3 class="text-center font-weight-bold">Registration</h3>
          <div id="errormessage"></div>
          <form action="{{ route('storeuser')}}" method="post" role="form" class="contactForm">
            @csrf
            <div class="form-row">
              <div class="form-group col-md-6">
                <lable>First Name</lable>
                <input type="text" name="firstname" class="form-control" id="enq_name" placeholder="Your Name" value="{{ old('firstname')}}"/>
                @error('firstname')
                    <span class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                  @enderror
              </div>
              <div class="form-group col-md-6">
                <lable>Last Name</lable>
                <input type="text" class="form-control" name="lastname" id="email" placeholder="Your last Name" value="{{ old('lastname')}}"/>
               @error('lastname')
                    <span class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                  @enderror
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <lable>Email Id</lable>
                 <input type="email" class="form-control" name="email" id="subject" placeholder="Your Email Id" value="{{ old('email')}}"/>
             @error('email')
                    <span class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                  @enderror
              </div>
              <div class="form-group col-md-6">
                <lable>mobile No.</lable>
                <input type="text" class="form-control" name="mobile" placeholder="mobile No." value="{{ old('mobile')}}" />
               @error('mobile')
                    <span class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                  @enderror
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <lable>Address</lable>
                <textarea class="form-control" name="address" rows="3">{{ old('address')}}</textarea>
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