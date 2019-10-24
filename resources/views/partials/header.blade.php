<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Apna Gps- The Tracker</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">
  <meta name="csrf-token" content="{{ csrf_token() }}" />
  <script src="https://code.jquery.com/jquery-1.11.2.min.js" /></script>
   
  <!-- Favicons -->
  <!-- <link href="{{asset('img/favicon.png') }}" rel="icon"> -->
 <link href="{{asset('img/ALogo.png') }}" rel="apple-touch-icon" type="image/x-icon">
  <link rel = "icon" href ="{{asset('img/ALogo.png') }}" type = "image/x-icon"> 

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="{{asset('lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="{{asset('lib/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
  <link href="{{asset('lib/animate/animate.min.css') }}" rel="stylesheet">
  <link href="{{asset('lib/venobox/venobox.css') }}" rel="stylesheet">
  <link href="{{asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
  <link href="{{asset('css/tinyslide.css') }}" rel="stylesheet" />
  

  <!-- Main Stylesheet File -->
  <link href="{{asset('css/style.css') }}" rel="stylesheet">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Dancing+Script" rel="stylesheet">
    <!--testeominal-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.transitions.css">

  <!-- =======================================================
    Theme Name: TheEvent
    Theme URL: https://bootstrapmade.com/theevent-conference-event-bootstrap-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>
  <!--==========================
    Header
  ============================-->
  <div class="container text-right" id="topContent">
   <nav>
      <ul class="nav-menu topContent">
          <li class="menu upmenu"><img src="img/image/call.png" style="height: 26px;"><b>-9300391003</b></li>
          <li class="menu upmenu"><a href="http://s0.apnagps.com/track/">Login</a></li>
          <li class="nav-item dropdown"><a href=""  class="nav-link dropdown-toggle"  id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Support</a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                 <a class="dropdown-item text-dark" href="{{ route('servicesreq')}}">Services Request</a>
                 <a class="dropdown-item text-dark" href="{{ route('installreq')}}">Installation Request</a>
                 <a class="dropdown-item text-dark" href="{{ route('services')}}">Complaint Request</a>
                 <a class="dropdown-item text-dark" href="{{route('subscription')}}">Subscription</a>
              </div>
          </li> 
          <li class="nav-item dropdown upmenu"><a href=""  class="nav-link dropdown-toggle"  id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Other</a>
               <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item text-dark" href="{{ route('formenquiry') }}">Enquiry</a>
                <a class="dropdown-item text-dark" href="{{ route('formfranchise') }}">For-Franchise</a>
                <a class="dropdown-item text-dark" href="{{ route('formbussiness') }}">Bussiness-frnds</a>
              </div>
          </li>
          <li class="nav-item dropdown upmenu"><a href=""  class="nav-link dropdown-toggle"  id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Demo</a>
               <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item text-dark" data-toggle="modal" data-target="#myModal" href="{{ route('login_mobile_no') }}">Demo</a>
                <a class="dropdown-item text-dark" href="{{ route('register_newuser') }}">Demo Request</a>
              </div>
          </li>
           <li ><a href="{{ route('contact_us')}}">Contact-Form</a></li>
      </ul>
    </nav>
       
   <div id="logo" class="pull-center">
        <a href="{{url('/')}}" class="scrollto"><img src="img/logo.png" alt="" title="" style="height: 33px;"></a>
      </div>
       </div>
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close"></button>
          <h4 class="modal-title">Registerd Mobile No</h4>
        </div>
        <div class="modal-body">
          <form action="{{route('logintotracking')}}" method="post">
            @csrf
           <input type="number" name="usermobile" class="form-control" placeholder="Enter you register Mobile No." />
           <button type="submit" class="btn btn-primary mt-5">check Demo</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  <header id="header">
    <div class="container">
 <nav id="nav-menu-container" class="nav-main">
    <ul class="nav-menu">
      @php 
      $home_use = App\Product_category::where('us_age','home_use')->get();
      @endphp
       <li class="Personal">
          <a href="" class=""> Device For Personal</a>
            <ul class="for_Personal1">
              @foreach($home_use as $use)
              <li class="col-md-3"><a href="{{ route('product',$use->id)}}">{{ $use->category }}</a></li>
              @endforeach
            </ul>
        </li>
         @php 
      $comm_use = App\Product_category::where('us_age','commercial')->get();
      @endphp
           <li class="Vehicles">
          <a href="" class="Vehicles"> Device For Vehicles</a>
            <ul class="Vehicles1">
              @foreach($comm_use as $use)
              <li class="col-md-3"><a href="{{ route('product',$use->id)}}">{{ $use->category }}</a></li>
              @endforeach
            </ul>
        </li>
         <li class="Wheeler">
          <a href="" class="">Services</a>
            <ul class="Wheeler1" style="width: 175px;">
              <li class="col-md-3"><a href="{{ route('fleet')}}">Fleet Tracking System</a></li>
              <li  class="col-md-3"><a href="{{ route('fastag')}}">FAS Tag</a></li>
              <li  class="col-md-3"><a href="{{ route('heavyvehicle')}}">Heavy Vehicle Tracker</a></li>
              <li  class="col-md-3"><a href="{{ route('gpstarcking')}}">GPS Tracker</a></li>
              <li  class="col-md-3"><a href="{{ route('bustracking')}}">Passenger Bus Tracking</a></li>
              <li  class="col-md-3"><a href="{{ route('asitarcker')}}">AIS 140 Certified</a></li>
            </ul>
        </li>
          <li class="Media">
          <a href="{{ route('apnanewtwork')}}" class="">Network</a></li>
        </ul>
</nav>
</div>
  </header>
 
 <div class="wishes" style="background-color: #dccb04;">
  <p class="text-center font-weight-bold mb-1 text-danger"><img src="img/school_bus/images (2).jpg" alt="Hotel 1" class="img-fluid" width="50px">   Wish You VERY HAPPY DIWALI FROM LAXYO FAMILY    <img src="img/school_bus/images (2).jpg" alt="Hotel 1" class="img-fluid" width="50px"></p>
  <p class="text-center font-weight-bold text-muted">ApnaGps soon getting ready for online gps devices delivery and selling</p>
</div>
    @if($message = Session::get('newuser'))
      <div class="alert alert-success">  {{$message}}
      </div>
    @endif 

   

 