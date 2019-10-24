@extends('layouts.master')
@section('content')
<section id="contact" class="section-with-bg wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2 class="needs">Bus Tracking</h2>
          
        </div>
        <div class="row">
        	<div class="col-lg-8 col-md-8 text-center">
        		
               <div class="hotel">
                <img src="img/school_bus/3 School bus tracking.jpg" alt="Hotel 1" class="img-fluid fleet">
              </div>
              
          </div>
 
          <div class="col-lg-4 col-md-4 text-center">
            @if($message = Session::get('success'))
      
      <div class="alert alert-success">  {{$message}}
      </div>
      @endif 
        		<div class="form" id="enquiry_form">
          <h3 class="text-center font-weight-bold">For Bus Tracker</h3>
          <div id="errormessage"></div>
          <form action="{{ route('bustarcking') }}" method="post" role="form" class="contactForm">
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
          </div>
          	 <h3 class="text-center needs">Get a Robust Bus Tracking System For Your Tracking Needs</h3></br> 
          <div class="row">
          <div class="col-lg-4 col-md-4">
        		<div class="row">
        			<div class="col-md-12 col-lg-12">
        				<div class="hotel text-center">
        			<img src="img/icons/realtimetracking.png" alt="Hotel 1" class="img-fluid" width="100px">
        		</div>
        				<h5 class="text-center needs">INTELLIGENT BUS TRACKING</h5>
        				<p class="text-justify">Get the ability to see the real time location of all your buses at once. Now you can access all the data related to your fleet with the click of a button with our bus tracking system.</p>
        			</div>
        			<div class="col-md-12 col-lg-12">
        				<div class="hotel text-center">
        			<img src="img/icons/Give Alert.png" alt="Hotel 1" class="img-fluid" width="100px">
        		</div>
        				<h5 class="text-center needs">REAL TIME ALERTS</h5>
        				<p class="text-justify">Get live over-speeding alerts, alerts on entry and exit bus points, monitor idling in real time, etc. Manage the services and maintenance alerts with our GPS bus tracking app.</p>
        			</div>
        		</div>	
          </div>
           <div class="col-lg-4 col-md-4">
        		<div class="hotel text-center mt-5">
        			<img src="img/icons/Control Fuel.png" alt="Hotel 1" class="img-fluid" width="80%">
              </div>
          </div>
           <div class="col-lg-4 col-md-4">
        		<div class="row">
        			<div class="col-md-12 col-lg-12">
        				<div class="hotel text-center">
        			<img src="img/icons/Geo Fence.png" alt="Hotel 1" class="img-fluid" width="100px">
        		</div>
        				<h5 class="text-center needs">ROUTE OPTIMISATION AND GEOFENCE</h5>
        				<p class="text-justify">Demarcate areas of relevance for your fleet of buses using LocoNav’s bus tracking system using GPS. Get instant alerts when the buses enter or exit the defined areas with Geofencing.</p>
        			</div>
        			<div class="col-md-12 col-lg-12">
        				<div class="hotel text-center">
        			<img src="img/icons/Bus Health Diagnostic.png" alt="Hotel 1" class="img-fluid" width="100px">
        		</div>
        				<h5 class="text-center needs">BUS HEALTH DIAGNOSTICS</h5>
        				<p class="text-justify">Get diagnostic, mileage and health report of your fleet of buses with our bus location tracker. Now you can worry less about your fleet’s well-being and focus on optimisation. your business operations.</p>
        			</div>
        		</div>	
          </div>
      </div>
      <h3 class="font-weight-bold needs">why Apna Gps Tracker Is Best</h3> 
      <div class="row">
      	<div class="col-md-12 col-lg-12">
      	<p class="text-justify">When buses ferry around citizens on the roads, there are certain aspects that the fleet owners, and the passengers, are most concerned about. In lieu of that, LocoNav’s GPS bus tracking system ensures that all worries of the fleet owners and the people on board are taken care of. Passengers look for a safe and efficient transport experience, while fleet owners are concerned about optimising their business costs. LocoNav caters to both the stakeholders involved, by taking care of expenses incurred by the business owners, and keeping safety of passengers a priority.</p>
      </div>
      </div>
       <h3 class="font-weight-bold needs">School Vehicle Tracking System</h3> 
      <div class="row">
        <div class="col-md-12 col-lg-12">
        <ul class="gps_other">
          <li>Real-time monitoring of transportation assets.</li>
          <li>Regular monitoring to prevent delays in bus arrivals.</li>
          <li>Tracking of Bus Maintenance Schedules.</li>
          <li>Panic Switch (SOS) for Emergency.</li>
          <li>Route creation and POI- Point of Interest.</li>
          <li>Alerts -no bus on a particular route for the day.</li>
        </ul>
        <p class="text-justify">ApnaGPS is a leading GPS Tracking device available with the mobile application that you can purchase and engage it to your vehicle. ApnaGPS tracker transforms your device (smartphone or tablet) into a GPS tracking device. ApnaGPS mobile application is available on the various significant platform such as Android, IOS, Blackberry, etc. Connecting this app with the device that you want to track, it instantly records its location systematically and uploads to our server.</p>
         <p class="text-justify">With ApnaGPS you are free, you can use any smartphone or tablet and customize the application for what you want to track and how you can use it. Whenever, you want to access the app you can use and synchronize the tracks at the office or home.</p>
      </div>
      </div>
      <h3 class="font-weight-bold needs">Passenger Management System</h3> 
      <div class="row">
        <div class="col-md-12 col-lg-12">
        <p class="text-justify">ApnaGPS tracker is the product which makes transportation of all your business related product/employee cab facility with an ease along with safety. Every business, whether it is start-up or large scale organization requires a fleet tracking device as to run safely the entire function related to transportation smooth. ApnaGPS tracker is designed and developed to set the entire requirement to manage a complete fleet of vehicles with the features like – driver management, speed management, fuel management system, on time tracking, safety management.</p>
        <p class="text-justify">If you are in search for a complete advanced tracker/software for tracking the different variety of passenger travelling in vehicles as of taxi, school bus, travel agencies etc. ApnaGPS allow fleet owners with:</p>
        <ul class="gps_other">
          <li>Log hours of workers in vehicles and fleet – overtime/ Actual.</li>
          <li>Trips and stop logs.</li>
          <li>Over speeding vehicles, discordant breaking, acceleration.</li>
          <li>A GPS-based passenger tracking system to increase optimal utilization of vehicles and increasing safety.</li>
          <li>Fuel Monitoring System for easy fuel monitoring.</li>
          <li>Automated alerts to enhance the safety of passengers and employees, especially while alone woman is travelling.</li>
        </ul>
      </div>
      </div>
       <h3 class="font-weight-bold needs">Fuel Monitoring System</h3> 
      <div class="row">
        <div class="col-md-12 col-lg-12">
        <p class="text-justify">Fuel cost plays the vital role in cost optimization of transport business and requires extensive fuel monitoring. ApnaGPS favours transport business to focus on its core activity of transportation instead of fuel controlling only. With its improved functionality of fuel monitoring one can monitor fuel consumption with relevance to the various analytic report of Coordinate, Location, distance traveled, Speed and time. With fuel sensor any raising or lowering in the fuel level and through POI the location of the change in fuel Gives authority to the owner to know about location and quantity of fuel filling which avoids the manipulation in fuel data. The owner can see for the time, specific stop, specific stops, arrivals and departures at a specific facility, even an individual trip summary and fuel data for one particular object or many and can compare with the historical date for any particular period on the real-time basis. Even fuel theft alert helps owner a lot in saving on the cost of fuel and subsequently lower per liter per kilometer operating costs of transport.</p>

        <p class="text-justify">Refining fuel consumption rates.(very important for special equipment, where fuel is Written off according to operating hours).</p>
        <ul class="gps_other">
          <li>Improving fleet profitability.</li>
          <li>Vehicle operating time monitoring.</li>
          <li>Monitoring fuel consumption in fuel line.</li>
          <li>A GPS-based passenger tracking system to increase optimal utilization of vehicles and increasing safety.</li>
          <li>Monitoring injector pulses.</li>
          <li>Monitoring fuel level in the tank.</li>
        </ul>
        <h3 class="font-weight-bold needs">Easy Fleet Management</h3>
        <ul class="gps_other">
          <li>Vehicle tracking and Monitoring.</li>
          <li>Fuel monitoring system.</li>
          <li>MIS Reports.</li>
          <li>Additional tool for vehicle maintenance.</li>
        </ul> 
         <h3 class="font-weight-bold needs">Emergency Asset Tracking and Monitoring</h3>
         <p class="text-justify">Emergency services are crucial for ensuring public safety and health. Police departments, fire and rescue services and emergency medical teams (among many others) require a well-organized system for keeping track of tools and equipment.</p>
        <ul class="gps_other">
          <li>Ambulance Tracking.</li>
          <li>Assets Tracking: In Sonography Machine & other eqipments.</li>
          <li>Theft Control.</li>
          <li>Fire & Safety.</li>
          <li>Panic Switch. (SOS)</li>
          <li>Start and stop location of the vehicle.</li>
        </ul> 
        <h3 class="font-weight-bold needs">Enterprise Solutions</h3>
        <ul class="gps_other">
          <li>Fleet Management.</li>
          <li>Preventing Asset Theft.</li>
          <li>Tracking & Monitring.</li>
          <li>Supply Chain Distribution.</li>
          <li>Real-time monitoring of transportation assets.</li>
          <li>Reduce Asset Downtime and Improve Productivity.</li>
        </ul> 
      </div>
      </div>

  </div>
</section>
  <script>
  	$(document).ready(function(){
    $("#testimonial-slider").owlCarousel({
        items:1,
        itemsDesktop:[1000,1],
        itemsDesktopSmall:[979,1],
        itemsTablet:[768,1],
        pagination:true,
        transitionStyle:"backSlide",
        autoPlay:true
    });
});
  </script>
@endsection 