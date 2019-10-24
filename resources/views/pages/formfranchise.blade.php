@extends('layouts.master')
@section('content')
<section id="features" class="section-with-bg wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2 class="font-weight-bold apnagps">Franchise Form</h2>
        </div>
            @if($message = Session::get('success'))
      
      <div class="alert alert-success">  {{$message}}
      </div>
    @endif 
<!-- for Enquiry -->
          <div class="form" id="">
         <h3 class="text-center"></h3>
          <div id="errormessage"></div>
          <form action="{{ route('franchisestore')}}" method="post" role="form" class="contactForm">
            @csrf
            <div class="form-row">
              <div class="form-group col-md-4">
                <lable>Full Name</lable>
                <input type="text" name="full_name" class="form-control" id="name" value="{{ old('full_name')}}"/>
                @error('full_name')
                    <span class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                  @enderror
              </div>
              <div class="form-group col-md-4">
                <lable>E-mail</lable>
                <input type="text" class="form-control" name="email" id="email" value="{{ old('email')}}" />
               @error('email')
                    <span class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                  @enderror
              </div>
              <div class="form-group col-md-4">
                <lable>Age</lable>
                <input type="number" class="form-control" name="age" id="email" value="{{ old('age')}}"/>
                 @error('age')
                    <span class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                  @enderror
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-4">
                <lable>Contact Number</lable>
                <input type="text" name="contact_number" class="form-control" id="name" value="{{ old('contact_number')}}" />
                 @error('contact_number')
                    <span class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                  @enderror
              </div>
              <div class="form-group col-md-4">
                <lable>Landline Number</lable>
                <input type="text" class="form-control" name="landline" id="email" value="{{ old('landline')}}" />
                @error('landline')
                    <span class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                  @enderror
              </div>
              <div class="form-group col-md-4">
                <lable>TOTAL Cash available to invest (Rand amount)</lable>
                <input type="number" class="form-control" name="total_cash" id="email" value="{{ old('total_cash')}}" />
                 @error('total_cash')
                    <span class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                  @enderror
              </div>
            </div>
               <div class="form-row">
              <div class="form-group col-md-6">
                <lable>Your own (free) cash available to invest (Rand amount)</lable>
                <input type="text" name="free_cash" class="form-control" id="name" value="{{ old('free_cash')}}" />
                 @error('free_cash')
                    <span class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                  @enderror
              </div>
              <div class="form-group col-md-6">
                <lable>Funds you will borrow (Rand amount)</lable>
                <input type="text" class="form-control" name="cash_from" id="email"  value="{{ old('cash_from')}}"/>
                 @error('cash_from')
                    <span class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                  @enderror
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <lable>Number of stores interested in</lable>
                <input type="text" name="total_store" class="form-control" id="name" value="{{ old('total_store')}}" />
                 @error('total_store')
                    <span class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                  @enderror
              </div>
               <div class="form-group col-md-6">
                <lable>When do you plan to open your first store?</lable>
                <input type="date" class="form-control" name="startdate" id="email" value="{{ old('startdate')}}"/>
                 @error('startdate')
                    <span class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                  @enderror
              </div>
            </div>
             <div class="form-row">
               <div class="form-group col-md-6">
                <lable>Who or where will you borrow funds from?</lable>
                <input type="text" class="form-control" name="borrower_name" id="borrower_name" value="{{ old('borrower_name')}}" />
                 @error('borrower_name')
                    <span class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                  @enderror
              </div>
              <div class="form-group col-md-6">
                <lable>Interest - list the area(s) in which you would like to open a store(s)</lable>
               <textarea class="form-control" name="message" rows="5" >{{ old('message')}}</textarea>
                 @error('message')
                    <span class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                  @enderror
              </div>
            </div>
            <div class="text-center"><button type="submit" class="btn btn-success">Submit</button></div>
          </form>
        </div>
          
      </div>
  </section>
@endsection