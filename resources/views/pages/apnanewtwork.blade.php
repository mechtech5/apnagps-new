@extends('layouts.master')
@section('content')
<section id="contact" class="section-with-bg wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2 class="needs">About Apna Gps Network</h2>
          
        </div>
          @if($message = Session::get('success'))
      
      <div class="alert alert-success">  {{$message}}
      </div>
      @endif
        <div class="row">
        	<div class="col-lg-6 col-md-6 text-center">
        		<div class="form" id="enquiry_form">
          <h3 class="text-center font-weight-bold">For Networking Details</h3>
          <div id="errormessage"></div>
          <form action="{{ route('networkdetail') }}" method="post" role="form" class="contactForm">
            @csrf
            <div class="form-row">
              <div class="form-group col-md-12">
                <input type="text" name="name" class="form-control" id="enq_name" placeholder="Your Name"/>
                @error('enq_name')
                    <span class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                  @enderror
              </div>
              <div class="form-group col-md-12">
                <input type="text" class="form-control" name="contact" id="contact" placeholder="Your Contact" />
               @error('enq_contact')
                    <span class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                  @enderror
              </div>
            </div>
            <div class="text-center"><button type="submit">Submit</button></div>
          </form>
        </div>
             
              
          </div>

          <div class="col-lg-6 col-md-6 text-center">
          	  <div class="hotel">
                <img src="img/image/India_Map.png" alt="Hotel 1" class="img-fluid fleet">
              </div>
        		
          </div>
          </div>
          	 <h3 class="text-center needs font-weight-bold">We Have Huge Netwrok All Over Country Area cities as well as Interior</h3>
          	 <div class="row">
          	 	<div class="col-md-12 col-lg-12">
          	 	However we are on the planet, at least four GPS satellites are ‘visible’ at any time. Each one transmits information about its position and the current time at regular intervals. These signals, travelling at the speed of light, are intercepted by our GPS receiver, which calculates how far away each satellite is based on how long it took for the messages to arrive.
          	 	</div>
          	 	<h4 class="mt-4 needs font-weight-bold">"GPS"-Global Positioning System</h4>
          	 	Gps is a network of about 30 satellites orbiting the Earth at an altitude of 20,000 km. Since our
          	 	Company Own this We Provide Most accurate Position And Time For Your assets Where it is Positioning On Current time.
          	 	Apna Gps Provide your the best Position of your Assest by tracking Apnagps device at any time any where you can access and achive detail of your assets through your mobile computer of laptop.
          	 	You can get all alerts mgs by getting our service for assets if over speed , on rough roads,
          	 	fuel with our vehicle and may more detail
              Businesses in India are forced to run their vehicles with extreme inefficiency and poor security. We're determined to change that. Working with 1000s of businesses across various industries, geographies, fleet types and sizes, has exposed us to a lot of multilayered and complex problems that they face daily. Through our proprietary technology, we ensure that every business benefits with lower running costs, greater security and faster turnarounds.
              You can get all alerts mgs by getting our service for assets if over speed , on rough roads,
              fuel with our vehicle and may more detail
              <p>Many advertisers are more interested in content network ads because they are more like the traditional advertisements that people are used to. Instead of being pop up ads or banners on top of a web page, they are composed to be more like advertisements that are found in newspapers and magazines, as well as other print mediums. This traditional sense of advertisement is attention grabbing on the Internet, and makes advertisers that are new to the field of paid inclusion feel more secure in the decision that has been made. Using a content network ad can also be a good way for small businesses to get started in paid inclusion advertising.</p>
          	 </div>	
             <h3 class="font-weight-bold needs text-center">ABOUT APNAGPS</h3> 
      <div class="row">
        <div class="col-md-12 col-lg-12">
        <p class="text-justify">ApnaGPS is a vehicle tracking system developed and designed by Laxyo group, included with varied features concerned towards the safety of ‘vehicles/humans’ and created as to track and assure safety for home based vehicles, personal and commercial vehicles. ApnaGPS tracker has the capability to track any single or fleet of vehicles along with safety features as to provide you a real time GPS & GSM based vehicle tracking software. Gets the complete GPS-based vehicle tracking system for personal car tracking, assets tracking, fleet tracking and fuel tracking, fleet management. Because we are concerned about safe transportation services which will helpful for commercial as well as personal usage.
We install GPS receiver unit of ApnaGPS tracker in the vehicles/fleet, which continuously receives and transmits information through GPS satellites via it’s spatial co-ordinates. Apart from this transmission of data is continuous through GSM module which can be routed through the internet or mobile phones on which a dedicated online server is installed. All the pre-programmed data will be updated on the online server, also processed and stored for future reference as and when needed and required.</p>
        <h3>After having the installation of ApnaGPS, for a user it becomes easier to track:</h3>
        <ul>
          <li>Speed of vehicles.</li>
          <li>Real time location.</li>
          <li>Stoppages frequency.</li>
          <li>Weather conditions.</li>
        </ul>
       <p class="text-justify">It helps you for safer vehicle tracking with respect to various features in ApanGPS a product offered by a Laxyo group of companies, offering the services across PAN India – For installing this GPS based fleet tracking device.</p> 
      </div>
      </div>
      
     
  </div>
</section>
@endsection