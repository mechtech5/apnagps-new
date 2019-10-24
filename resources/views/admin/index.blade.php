@extends('admin.layouts.master')
@section('content')
    <!-- Sidebar menu-->
   
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-dashboard"></i> Dashboard</h1>
          <p>Apna Gps all kind of Tracking using Device and software</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-6 col-lg-3">
          <div class="widget-small primary coloured-icon"><i class="icon fa fa-users fa-3x"></i>
            <div class="info">
              @php
              $user = App\Customer::all();
              $count = count($user)
              @endphp
              <h4>Users</h4>
              <p><b>{{$count}}</b></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="widget-small info coloured-icon"><i class="icon fa fa-thumbs-o-up fa-3x"></i>
            <div class="info">
              <h4>Likes</h4>
              <p><b>25</b></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="widget-small warning coloured-icon"><i class="icon fa fa-files-o fa-3x"></i>
            <div class="info">
              <h4>Uploades</h4>
              <p><b>10</b></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="widget-small danger coloured-icon"><i class="icon fa fa-star fa-3x"></i>
            <div class="info">
              <h4>Stars</h4>
              <p><b>500</b></p>
            </div>
          </div>
        </div>
      </div>
     
      <div class="row">
        <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">Admin Features</h3>
            <ul>
              <li>See request of all Enquiry Up to Admin</li>
              <li>See request of all Bussiness Frnds  Up to Admin</li>
              <li>See request of all Franchises  Up to Admin</li>
              <li>See request of all Complaint Frnds  Up to Admin</li>
              <li>Add Product for Selling With Price and Quantity</li>
              <li>See List of Product Added By Admin</li>
              <li>Admin Can Remove and Update All Product Any</li>
            </ul>
          </div>
        </div>
        <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">Compatibility with frameworks</h3>
            <p>Apna Gps Website and admin Panel Is build on Laravel Framwork added paytm integration for online selling product</p>
            <p>Go to <a href="" target="_blank">documentation</a> for more details about integrating this theme with various frameworks.</p>
            <p>The source code is available on GitHub. If anything is missing or weird please report it as an issue on <a href="" target="_blank">GitHub</a>. If you want to contribute to this theme pull requests are always welcome.</p>
          </div>
        </div>
      </div>
    </main>
    @endsection
    <!-- Essential javascripts for application to work-->
   