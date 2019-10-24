@extends('admin.layouts.master')
@section('content')
 <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-edit"></i>Edit Product</h1>
          <p>Edit Product forms</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Edit Product</li>
          <li class="breadcrumb-item"><a href="#">Edit Products</a></li>
        </ul>
      </div>
     @if($message = Session::get('message'))
      <div class="alert alert-success">  {{$message}}
      </div>
    @endif 
      <div class="row">
      	<div class="col-md-2">
      	</div>
        <div class="col-md-8">
          <div class="tile">
            <h3 class="tile-title">Edit Products Form</h3>
            <div class="tile-body">
              <form action="{{ route('admin.UPdateProduct',$product->id) }}"  method="post" enctype="multipart/form-data">
              	@csrf
              	@method('PATCH')
                <div class="form-group">
                  <label class="control-label">Device Name</label>
                  <input class="form-control" type="text" name="productname" value="{{ $product->productname }}" placeholder="Enter Device name">
                </div>
                <div class="form-group">
                  <label class="control-label">Price</label>
                  <input class="form-control" type="text" name="price" value="{{ $product->price }}" placeholder="Enter Price address">
                </div>
                <div class="form-group">
                  <label class="control-label">category</label>
                  <input class="form-control" type="text" name="category" value="{{ $cat->category }}" placeholder="Enter Price address" readonly >
                </div>
                 <div class="form-group">
                  <label class="control-label">Total Product We have</label>
                  <input class="form-control" type="number" value="{{ $product->quantity }}" name="quantity" placeholder="Total Prodcut">
                </div>
               
                <div class="form-group">
                	@if($product->image != '')
                	<img src="{{ asset('adminn/'.$product->image )}}" style="height:80px;width:100px;">
                	@else
                	<img src="{{ asset('adminn/images.jpg' )}}" style="height:80px;width:100px;">
                	@endif
                	<input type="hidden" name='old_file' value="{{ $product->image }}">
                  <input class="form-control" type="file" name="file" value="ewtw">
                </div>
            </div>
            <div class="tile-footer">
              <button class="btn btn-success" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>UPDATE</button>
            </div>
            </form>
          </div>
        </div>
        <div class="col-md-2">
      	</div>
        <div class="clearix"></div>
      </div>
    </main>
@endsection