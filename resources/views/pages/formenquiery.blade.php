@extends('layouts.master')
@section('content')
<section id="features" class="section-with-bg wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2 class="font-weight-bold apnagps">Enquiry Form</h2>
        </div>
            @if($message = Session::get('success'))
      
      <div class="alert alert-success">  {{$message}}
      </div>
    @endif 
<!-- for Enquiry -->
        <div class="form"  id="">
          <h3 class="text-center font-weight-bold apnagps"></h3>
          <div id="errormessage"></div>
          <form action="{{ route('enquiryform')}}" method="post" role="form" class="contactForm">
            @csrf
            <div class="form-row">
              <div class="form-group col-md-6">
                <lable>Name</lable>
                <input type="text" name="enq_name" class="form-control" id="enq_name" placeholder="Your Name" value="{{ old('enq_name')}}" />
                @error('enq_name')
                    <span class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                  @enderror
              </div>
              <div class="form-group col-md-6">
                <lable>Email</lable>
                <input type="text" class="form-control" name="enq_email" id="email" placeholder="Your Email"  value="{{ old('enq_email')}}" />
               @error('enq_email')
                    <span class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                  @enderror
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <lable>subject</lable>
                 <input type="text" class="form-control" name="enq_subject" id="subject" placeholder="Subject" value="{{ old('enq_subject')}}" />
             @error('enq_subject')
                    <span class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                  @enderror
              </div>
              <div class="form-group col-md-6">
                <lable>Contact</lable>
                <input type="text" class="form-control" name="enq_contact" id="contact" placeholder="Your Contact" value="{{ old('enq_contact')}}" />
               @error('enq_contact')
                    <span class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                  @enderror
              </div>
            </div>
            <div class="form-group">
              <lable>Details</lable>
              <textarea class="form-control" name="enq_detail" rows="5">{{ old('enq_detail')}}</textarea>
            @error('enq_detail')
                    <span class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                  @enderror
            </div>
            <div class="text-center"><button type="submit" class="btn btn-success">Submit</button></div>
          </form>
        </div>
        
          
      </div>
  </section>
@endsection