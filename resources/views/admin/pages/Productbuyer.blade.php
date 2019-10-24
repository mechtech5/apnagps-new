@extends('admin.layouts.master')
@section('content')
<main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-truck"></i>Product Buyer</h1>
          <p>Table to display analytical data effectively</p>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active"><a href="#">Product Buyer</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body table-responsive">
              <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
                  <tr>
                    <th>S.No.</th>
                    <th>Buyer</th>
                    <th>Email Id</th>
                    <th>Address 1</th>
                    <th>Address 2</th>
                    <th>State</th>
                    <th>District</th>
                    <th>Product Details</th>
                  </tr>
                </thead>
                <tbody>
                	@php 
                	$s_no=0;
                	@endphp
                	@foreach( $buyer as $buy)
                  <tr>
                    <td>{{ ++$s_no }}</td>
                    <td>{{ $buy->billing_firstName." ".$buy->billing_lastName}}</td>
                    <td>{{ $buy->billing_email }}</td>
                    <td>{{ $buy->billing_address1 }}</td>
                    <td>{{ $buy->billing_address2 }}</td>
                    <td>{{ $buy->state_name }}</td>
                    <td>{{ $buy->city_name }}</td>
                    <td><a href="{{ route('admin.custProductlist',$buy->id)}}" class="btn btn-success">view Order</a>
                      
                      <a href="{{ route('admin.shipingaddress',$buy->id)}}" class="btn btn-info">Address</a></td>
                  </tr>
                     @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </main>
@endsection