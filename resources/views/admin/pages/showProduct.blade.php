@extends('admin.layouts.master')
@section('content')
<main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-list"></i>Show Product</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active"><a href="#">Show Product</a></li>
        </ul>
      </div>
      @if($message = Session::get('message'))
      <div class="alert alert-success">  {{$message}}
      </div>
    @endif 
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
                  <tr>
                    <th>S.No.</th>
                    <th>Product Name</th>
                    <th>Category</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Product Image</th>
                    <th>button</th>
                  </tr>
                </thead>
                <tbody>
                	@php 
                	$serial_no=0;
                	@endphp
                	@foreach($product as $device)
                 
                  <tr>
                    <td>{{ ++$serial_no }}</td>
                    <td>{{ $device->productname }}</td>
                    <td>{{ $device->category }}</td>
                    <td>{{ $device->price }}</td>
                    <td>{{ $device->quantity }}</td>
                    @if($device->image != '')
                    <td><img src="{{ asset('adminn/'.$device->image) }}" style="height:80px;width:100px"></td>
                    @else
                      <td><img src="{{ asset('adminn/images.jpg') }}" style="height:80px;width:100px"></td>
                    @endif
                    <td><a href="{{ route('admin.editProduct', $device->id)}}" class="btn btn-success mr-2">Edit</a>
                    	<a href="{{ route('admin.removeProduct',$device->id)}}" class="btn btn-danger">Remove</a></td>
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