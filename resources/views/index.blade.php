
@extends('layouts.master')
@section('content')
  <!--==========================
    Intro Section
  ============================-->
  @include('layouts.slider')
  <main id="main">
    <!--==========================
      Speakers Section
    ============================-->
    <section id="speakers" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2>Our Services</h2>
          <p>Here are some of our Information</p>
        </div>

<div class="left_position">
<div class="renaw-css2">
<a href="{{route('renewablereq')}}" target="_blank">
<span class="renaw-icon-css "><img src="img/school_bus/Renew.png" style="width:80px"></span>
{{-- <span class="renaw-text-css">Plan</span>  
 --}}</a>
</div>
</div>


        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="speaker">
              <img src="img/image/Fleet Management3.jpg" alt="Speaker 1" class="img-fluid">
              <div class="details">
                <h3><a href="speaker-details.html">The Fleet Managment</a></h3>
                <p>The Tracker</p>
              </div>
              </div>
              <div class="social">
                <p class="text-justify">APNAGPS uses gps tracking to provide fleet management solution to efficiently manage your fleet and to monitor driver activities to prevent any vehicle misuse. Our fleet management solutions can help decrease costs and …</p>
                </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="speaker">
              <img src="img/image/Tracking & Monetoring3.jpg" alt="Speaker 2" class="img-fluid">
              <div class="details">
                <h3><a href="speaker-details.html">For Tracking & Monitoring</a></h3>
                <p>The Tracker</p>
              </div>
               </div>
               <div class="social">
                  <p class="text-justify">APNAGPS offers real time GPS vehicle tracking solution. Our GPS tracking software enables you to track accurate location and movement of your commercial vehicles, bikes & trucks at an affordable price. Apnagps provides…</p>
                </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="speaker">
              <img src="img/image/Personal Tracker3.jpg" alt="Speaker 3" class="img-fluid">
              <div class="details">
                <h3><a href="speaker-details.html">For Personal</a></h3>
                <p>The Tracker</p>
              </div>
            </div>
            <div class="social">
                 <p class="text-justify">Track your personal car using APNAGPS based car tracking solution. APNAGPS enables you to track your personal car movement in real time from web and smartphone. Ensure safety of your Kids, Parents, Teen also Identify car misuse…</p>
                </div>
          </div>
         
        </div>
      </div>

    </section>
 <!--============================
      About Section
    ============================-->
    <section id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h2>About Us</h2>
            <p class="text-justify">Whether the owner of a single private car or commercial purpose truck or a fleet of vehicles or even movable and or portable equipment, all become apprehensive about safety the moment it hits the road. Time overrun on arrival at destination or late return from expected time of return are the constant worry for the owner. Fuel efficiency, deviation from pre-set route, exceeding the halt time limits set for nourishment/refreshing the driver etc are the source of constant worry. The fear of mishap always creeps up. The Drivers submit the desired report on vital parameters of the journey still the owner likes independent monitoring throughout the journey.</p>
          </div>
          <div class="col-lg-3">
            <h3>Also</h3>
            <p class="text-justify">APNAGPS is available to set right the worries of the Owners. The APNAGPS system monitors the various activities of the vehicle throughout its journey period. The system tracks the vehicle and also the driver to provide the different sets of information required by the owner. The system assists the management/owner in formulating policies of the organization, setting different standards of performance, search for improvement in efficiency of vehicle and driver, locating avenues for cost cutting and ultimately increase the profitability.</p>
          </div>
          <div class="col-lg-3">
            <h3>Quick Contact</h3>
            <p>Contact@apnagps.com</p>
          </div>
        </div>
      </div>
    </section>


 

    <!--==========================
      Hotels Section
    ============================-->
    <section id="features" class="section-with-bg wow fadeInUp">

      <div class="container">
        <div class="section-header">
          <h2 class="apnagps">APNAGPS FEATURES</h2>
          <p>Here Is Our Accessories</p>
        </div>
        <div class="row">
          <div class="col-lg-6 col-md-6">
            <div class="hotel">
              <div class="hotel-img">
                <img src="img/hotels/feature-img.jpg" alt="Hotel 1" class="img-fluid">
              </div>
            </div>
          </div>

          <div class="col-lg-6 col-md-6">
            <div class="hotel">
              <div class="row">
                <div class="col-lg-12 col-md-12">
             <h5 class="font-weight-bold">Live tracking</h5>
             <p class="text-justify">APNAGPS gives you a hawk-eye to track vehicles that are beyond your line of sight. You can see the actual position of your vehicle any where in the country..</p>
            </div>
            
              <div class="col-lg-12 col-md-12">
            <h5 class="font-weight-bold">MIS Reports</h5>
            <p class="text-justify">APNAGPS is a compact solution for remote vehicle tracking. It offers you an easy to use web and mobile application platform with intuitive interface and detailed & readymade MIS reports..</p>
            </div>
            
              <div class="col-lg-12 col-md-12">
            <h5 class="font-weight-bold">Accurate & Faster</h5>
            <p class="text-justify">APNAGPS Accurate Real Time Vehicle Tracking & Monitring of your vehicles. You will also re rereceive the SMS notications for major events..</p>
            </div>
             <div class="col-lg-12 col-md-12 text-right">
              <button class="btn btn-primary">Read More</button>
             </div>
            </div>
            </div>
          </div>
          

        </div>
      </div>

    </section>

    <!--==========================
      Gallery Section
    ============================-->
    

    <!--==========================
      Sponsors Section
    ============================-->
    <section id="supporters" class="section-with-bg wow fadeInUp">

      <div class="container">
        <div class="section-header">
          <h2>Sponsors</h2>
        </div>

        <div class="row no-gutters supporters-wrap clearfix">

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <img src="img/supporters/agro.png" class="img-fluid" alt="">
            </div>
          </div>
          
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <img src="img/supporters/birla-corporation.jpg" class="img-fluid" alt="">
            </div>
          </div>
        
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <img src="img/supporters/damtuk.png" class="img-fluid" alt="">
            </div>
          </div>
          
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <img src="img/supporters/global-waste.png" class="img-fluid" alt="">
            </div>
          </div>
          
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <img src="img/supporters/man1.png" class="img-fluid" alt="">
            </div>
          </div>
        
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <img src="img/supporters/management.png" class="img-fluid" alt="">
            </div>
          </div>
          
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <img src="img/supporters/railwaw.png" class="img-fluid" alt="">
            </div>
          </div>
          
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <img src="img/supporters/ujjain.png" class="img-fluid" alt="">
            </div>
          </div>

        </div>

      </div>

    </section>

   


    <!--==========================
      Contact Section
    ============================-->
   {{--  <section id="contact" class="section-bg wow fadeInUp">

      <div class="container">

        <div class="section-header">
          <h2  class="apnagps">Contact Us</h2>
          <p>We Will Be Available Here</p>
        </div>

        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address font-weight-bold">
              <i class="ion-ios-location-outline"></i>
              <h3>Address</h3>
              <address>Laxyo House, County Park, Plot No. 2, MR-5, Mahalaxmi Nagar, INDORE-452010</address>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone font-weight-bold">
              <i class="ion-ios-telephone-outline"></i>
              <h3>Phone Number</h3>
              <p><a href="tel:+155895548855">452010</a></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email font-weight-bold">
              <i class="ion-ios-email-outline"></i>
              <h3>Email</h3>
              <p><a href="mailto:info@example.com">contact@apnagps.com</a></p>
            </div>
          </div>

        </div>
 <div class="section-header">
          <h2>CATCH US FOR</h2>
          <p>We Will Contact You Soon</p>
          <div class="text-center"> <button class="btn btn-success" id="bussiness">Bussiness</button>
          <button class="btn btn-primary" id="enquiry">Enquiry</button> <button class="btn btn-info" id="franchise">Franchise</button></div>
        </div>
         @if($message = Session::get('success'))
      
      <div class="alert alert-success">  {{$message}}
      </div>
    @endif 
<!-- for Enquiry -->
        <div class="form" style="font-family: fantasy;" id="enquiry_form">
          <h3 class="text-center font-weight-bold apnagps">ApnaGps Enquiry Form</h3>
          <div id="errormessage"></div>
          <form action="{{ route('enquiryform')}}" method="post" role="form" class="contactForm">
            @csrf
            <div class="form-row">
              <div class="form-group col-md-6">
                <lable>Name</lable>
                <input type="text" name="enq_name" class="form-control" id="enq_name" placeholder="Your Name"/>
                @error('enq_name')
                    <span class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                  @enderror
              </div>
              <div class="form-group col-md-6">
                <lable>Email</lable>
                <input type="text" class="form-control" name="enq_email" id="email" placeholder="Your Email"/>
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
                 <input type="text" class="form-control" name="enq_subject" id="subject" placeholder="Subject"/>
             @error('enq_subject')
                    <span class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                  @enderror
              </div>
              <div class="form-group col-md-6">
                <lable>Contact</lable>
                <input type="text" class="form-control" name="enq_contact" id="contact" placeholder="Your Contact" />
               @error('enq_contact')
                    <span class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                  @enderror
              </div>
            </div>
            <div class="form-group">
              <lable>Details</lable>
              <textarea class="form-control" name="enq_detail" rows="5"></textarea>
            @error('enq_detail')
                    <span class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                  @enderror
            </div>
            <div class="text-center"><button type="submit">Submit</button></div>
          </form>
        </div>
        <!-- for Bussiness Purpose -->
        <div class="form" style="font-family: fantasy;display:none;"  id="bussiness_form">
          <h3 class="text-center font-weight-bold apnagps">Start Bussiness With ApnaGps</h3>
          <div id="errormessage"></div>
          <form action="{{ route('businessstore')}}" method="post" role="form" class="contactForm">
            @csrf
            <div class="form-row">
              <div class="form-group col-md-6">
                 <lable>Business Owner</lable>
                <input type="text" name="business_owner" class="form-control" id="name" placeholder="Business Owner"/>
                @error('business_owner')
                    <span class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                  @enderror
              </div>
              <div class="form-group col-md-6">
                <lable>Business Name</lable>
                <input type="text" class="form-control" name="business_name" id="email" placeholder="Business Name"/>
               @error('business_name')
                    <span class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                  @enderror
              </div>
            </div>
             <div class="form-row">
              <div class="form-group col-md-6">
                 <lable>Contact Number</lable>
              <input type="text" class="form-control" name="contact_number" id="subject" placeholder="Contact Number"/>
              @error('contact_number')
                    <span class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                  @enderror
              </div>
              <div class="form-group col-md-6">
                <lable>E-mail</lable>
                <input type="text" class="form-control" name="email_id" id="email" placeholder="Your Email"/>
                @error('email_id')
                    <span class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                  @enderror
              </div>
            </div>
            <div class="form-group">
              <div class="form-row">
              <div class="form-group col-md-4">
                 <lable>State</lable>

                 @php 
                   $state=App\state::all();
                 @endphp
              <select name="state" class="form-control" id="state_id">
                @foreach($state as $states)
                <option value="{{ $states->state_code }}">{{ $states->state_name }}</option>
                @endforeach
              </select>
              @error('state')
                    <span class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                  @enderror
              </div>
              <div class="form-group col-md-4">
                <lable>District</lable>
                <select name="district" class="form-control" id="set_district">
                  
                </select>
               @error('district')
                    <span class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                  @enderror
              </div>
              <div class="form-group col-md-4">
                <lable>Town</lable>
                <input type="text" class="form-control" name="town" id="email" placeholder="Your Town"/>
              @error('town')
                    <span class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                  @enderror
              </div>
            </div>
            <lable>Address Details</lable>
              <textarea class="form-control" name="address" rows="5" ></textarea>
              @error('address')
                    <span class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                  @enderror
            </div>
             <div class="form-row">
              <div class="form-group col-md-3">
                 <lable>Business Type</lable>
                <input type="text" name="business_type" class="form-control" id="name" placeholder="Your Bussiness"/>
                @error('business_type')
                    <span class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                  @enderror
              </div>
              <div class="form-group col-md-9">
                <lable>Message</lable>
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                @error('message')
                    <span class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                  @enderror
              </div>
            </div>
            <div class="text-center"><button type="submit">Submit</button></div>
          </form>
        </div>
        <!-- franchise -->
        <div class="form" style="font-family: fantasy;display:none" id="franchise_form">
         <h3 class="text-center font-weight-bold apnagps">ApnaGps Franchise Form</h3>
          <div id="errormessage"></div>
          <form action="{{ route('franchisestore')}}" method="post" role="form" class="contactForm">
            @csrf
            <div class="form-row">
              <div class="form-group col-md-4">
                <lable>Full Name</lable>
                <input type="text" name="full_name" class="form-control" id="name" />
                @error('full_name')
                    <span class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                  @enderror
              </div>
              <div class="form-group col-md-4">
                <lable>E-mail</lable>
                <input type="text" class="form-control" name="email" id="email" />
               @error('email')
                    <span class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                  @enderror
              </div>
              <div class="form-group col-md-4">
                <lable>Age</lable>
                <input type="number" class="form-control" name="age" id="email" />
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
                <input type="text" name="contact_number" class="form-control" id="name" />
                 @error('contact_number')
                    <span class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                  @enderror
              </div>
              <div class="form-group col-md-4">
                <lable>Landline Number</lable>
                <input type="text" class="form-control" name="landline" id="email" />
                @error('landline')
                    <span class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                  @enderror
              </div>
              <div class="form-group col-md-4">
                <lable>TOTAL Cash available to invest (Rand amount)</lable>
                <input type="number" class="form-control" name="total_cash" id="email" />
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
                <input type="text" name="free_cash" class="form-control" id="name" />
                 @error('free_cash')
                    <span class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                  @enderror
              </div>
              <div class="form-group col-md-6">
                <lable>Funds you will borrow (Rand amount)</lable>
                <input type="text" class="form-control" name="cash_from" id="email"/>
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
                <input type="text" name="total_store" class="form-control" id="name" />
                 @error('total_store')
                    <span class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                  @enderror
              </div>
               <div class="form-group col-md-6">
                <lable>When do you plan to open your first store?</lable>
                <input type="date" class="form-control" name="startdate" id="email"/>
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
                <input type="text" class="form-control" name="borrower_name" id="borrower_name" />
                 @error('borrower_name')
                    <span class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                  @enderror
              </div>
              <div class="form-group col-md-6">
                <lable>Interest - list the area(s) in which you would like to open a store(s)</lable>
               <textarea class="form-control" name="message" rows="5"></textarea>
                 @error('message')
                    <span class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                  @enderror
              </div>
            </div>
            <div class="text-center"><button type="submit">Submit</button></div>
          </form>
        </div> --}}

      </div>
    </main>
    <!-- #contact -->

  
  <script>

    $(document).ready(function() {
      $("#bussiness").click(function(){

        $("#bussiness_form").show();
        $("#enquiry_form").hide();
        $("#franchise_form").hide();

      });
      $("#enquiry").click(function(){

        $("#enquiry_form").show();
        $("#bussiness_form").hide();
        $("#franchise_form").hide();

      });
      $("#franchise").click(function(){

        $("#franchise_form").show();
        $("#bussiness_form").hide();
        $("#enquiry_form").hide();

      });
      $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
  });
      $("#state_id").on("change",function(){
           var id = $(this).val();
           //alert(id);
          $.ajax({
                 type: "GET",
                 url: "{{ route('getdistrict')}}?id="+id,
                 success: function(res){
                 if(res){
              //alert(res);
                        $("#set_district").empty();
                        $("#set_district").append('<option value="0">Select District</option>');
                        $.each(res,function(index, district){
                        $("#set_district").append('<option value="'+district.city_code+'">'+district.city_name+'</option>');
              });

                      }
                      else{
                      $("#set_district").empty();
                      }
                    }
                      });

            
      });
    });
  </script>

@endsection
  <!--==========================
    Footer
  ============================-->


  
