<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <!-- Twitter meta-->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:site" content="@pratikborsadiya">
    <meta property="twitter:creator" content="@pratikborsadiya">
    <!-- Open Graph Meta-->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Vali Admin">
    <meta property="og:title" content="Vali - Free Bootstrap 4 admin theme">
    <meta property="og:url" content="http://pratikborsadiya.in/blog/vali-admin">
    <meta property="og:image" content="http://pratikborsadiya.in/blog/vali-admin/hero-social.png">
    <meta property="og:description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <title>Admin Panel- Apna gps</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{asset('img/ALogo.png') }}" rel="apple-touch-icon" type="image/x-icon">
  <link rel = "icon" href ="{{asset('img/ALogo.png') }}" type = "image/x-icon"> 
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/admin/main.css') }}">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body class="app sidebar-mini rtl">
    <!-- Navbar-->
    <header class="app-header"><a class="app-header__logo" href="index.html">Apna Gps</a>
      <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
      <!-- Navbar Right Menu-->
      <ul class="app-nav">
        {{-- <li class="app-search">
          <input class="app-search__input" type="search" placeholder="Search">
          <button class="app-search__button"><i class="fa fa-search"></i></button>
        </li> --}}
        <!--Notification Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Show notifications"><i class="fa fa-bell-o fa-lg"></i></a>
          <ul class="app-notification dropdown-menu dropdown-menu-right">
            <li class="app-notification__title">Don't have notifications.</li>
          </ul>
        </li>
        <!-- User Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
          <ul class="dropdown-menu settings-menu dropdown-menu-right">
            {{-- <li><a class="dropdown-item" href="page-user.html"><i class="fa fa-cog fa-lg"></i> Settings</a></li>
            <li><a class="dropdown-item" href="page-user.html"><i class="fa fa-user fa-lg"></i> Profile</a></li>
            <li><a class="dropdown-item" href="page-login.html"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li> --}}
          </ul>
        </li>
      </ul>
    </header>
     <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="https://s3.amazonaws.com/uifaces/faces/twitter/jsa/48.jpg" alt="User Image">
        <div>
          <p class="app-sidebar__user-name">Gps</p>
          <p class="app-sidebar__user-designation">Admin Control</p>
        </div>
      </div>
      <ul class="app-menu">
        <li><a class="app-menu__item active" href="index.html"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">Recevied Details</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="{{ route('admin.enquirydetail')}}"><i class="icon fa fa-bell"></i>Enquiry</a></li>
            <li><a class="treeview-item" href="{{ route('admin.businessdetail')}}" target="" rel="noopener"><i class="icon fa fa-handshake-o"></i>Bussiness</a></li>
            <li><a class="treeview-item" href="{{ route('admin.franchise')}}"><i class="icon fa fa-cubes"></i>Franchise</a></li>
          </ul>
        </li>
        <li><a class="app-menu__item" href="{{ route('admin.complaintdetail')}}"><i class="app-menu__icon fa fa-list-alt"></i><span class="app-menu__label">Complaint list</span></a></li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-edit"></i><span class="app-menu__label">Product</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="{{ route('admin.addProduct')}}"><i class="icon fa fa-plus"></i>Add Product</a></li>
            <li><a class="treeview-item" href="{{ route('admin.showProduct')}}"><i class="icon fa fa-list"></i>Show Product</a></li>
            <li><a class="treeview-item" href="{{ route('admin.Productbuyer')}}"><i class="icon fa fa-shopping-cart"></i> Product Buyer</a></li>
             <li><a class="treeview-item" href="{{ route('admin.deliveredProduct')}}"><i class="icon fa fa-truck"></i>Delivered Product</a></li>
          </ul>
        </li>
      <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-reply"></i><span class="app-menu__label">Customer Requests</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="{{ route('admin.custservices')}}"><i class="icon fa fa-info"></i>Service Requests</a></li>
            <li><a class="treeview-item" href="{{ route('admin.installdevice')}}"><i class="icon fa fa-superpowers"></i>Installation Requests</a></li>
            <li><a class="treeview-item" href="{{ route('admin.renewbledevice')}}"><i class="icon fa fa-refresh"></i>Renewble Requests</a></li>
          </ul>
        </li>
         <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-reply"></i><span class="app-menu__label">New Visiter</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="{{ route('admin.networkvisit')}}"><i class="fa fa-internet-explorer"></i>Network Visit</a></li>
            <li><a class="treeview-item" href="{{ route('admin.bustvisitor')}}"><i class="icon fa fa-bus"></i>Bus Tracker</a></li>
            <li><a class="treeview-item" href="{{ route('admin.demovisitor')}}"><i class="icon fa fa-bus"></i>Demo user</a></li>
          </ul>
        </li>
      </ul>
    </aside>
