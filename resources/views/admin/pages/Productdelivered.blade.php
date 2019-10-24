@extends('admin.layouts.master')
@section('content')
<main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-truck font-weight-bold"></i>Product Delivered</h1>
          <p>Table to display analytical data effectively</p>
         
        </div>
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Table</li>
          <li class="breadcrumb-item active"><a href="#">Product Delivered</a></li>
        </ul>
      </div>
       @if($message = Session::get('success'))
      <div class="alert alert-success">  {{$message}}
      </div>
    @endif 
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body table-responsive">
              <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
                  <tr>
                    <th>S.No.</th>
                    <th>Customer Name</th>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Total Price</th>
                    <th>Details</th>
                  </tr>
                </thead>
                <tbody>
                	@php
                	$s_no=0;
                	@endphp
                	@foreach($Pdelivered as $Pd)
                  <tr>
                    <td>{{ ++$s_no }}</td>
                    <td>{{ $Pd->billing_firstName." ".$Pd->billing_lastName }}</td>
                    <td>{{ $Pd->productname }}</td>
                    <td>{{ $Pd->qty }}</td>
                    <td>{{ $Pd->price }}</td>
                    <td><a href="{{route('admin.Pdfcust',$Pd->id)}}" class="btn btn-success">Print</a></td>
                    <td><a href="{{route('admin.all_Product',$Pd->user_id)}}" class="btn btn-success">All</a></td> 
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