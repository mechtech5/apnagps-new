@extends('admin.layouts.master')
@section('content')
<main class="app-content">
      <div class="app-title">
        <div> @php 
           $name= session::get('customername');
           @endphp
          <h1><i class="fa fa-truck font-weight-bold"></i>Product Buyer:-{{ strtoupper($name) }}</h1>
          <p>Table to display analytical data effectively</p>
         
        </div>
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Table</li>
          <li class="breadcrumb-item active"><a href="#">Product Buyer</a></li>
        </ul>
      </div>
       @if($message = Session::get('success'))
      <div class="alert alert-success">  {{$message}}
      </div>
    @endif 
      <div class="row">
        @if(!sizeof($custProduct)==0)
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body table-responsive">
              <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
                  <tr>
                    <th>S.No.</th>
                    <th>Product Name</th>
                    <th>Price(per item)</th>
                    <th>Quantity</th>
                    <th>Total Price</th>
                    <th>Product Details</th>
                  </tr>
                </thead>
                <tbody>
                	@php 
                	$s_no=0;
                	@endphp
                	@foreach( $custProduct as $cP)
                  <tr>
                    <td>{{ ++$s_no }}</td>
                    <td>{{ $cP->productname }}</td>
                    <td>{{ $cP->price }}</td>
                    <td>{{ $cP->qty }}</td>
                    <td>{{ $cP->qty*$cP->price }}</td>
                    <td><a href="{{ route('admin.deliverProduct',$cP->id) }}" class="btn btn-success">Deliver To Customer</a></td>
                  </tr>
                    @endforeach
                </tbody>
              </table>
            </div>
          </div>
          Total Amount :-{{ $total }}
        </div>
       @else
    <p class="alert alert-danger">{{strtoupper($name)}} Order is Delivered</p>
    @endif
      </div>
    </main>
@endsection