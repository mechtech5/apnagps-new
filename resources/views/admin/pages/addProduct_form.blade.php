@extends('admin.layouts.master')
@section('content')
 <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-plus"></i>Add Product</h1>
          <p>Product forms</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Product</li>
          <li class="breadcrumb-item"><a href="#">Add Products</a></li>
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
            <h3 class="tile-title">Products Form</h3>
            <div class="tile-body">
              <form action="{{ route('admin.storeProduct') }}"  method="post" enctype="multipart/form-data">
              	@csrf
                <div class="form-group">
                  <label class="control-label">Device Name</label>
                  <input class="form-control" type="text" name="productname" placeholder="Enter Device name">
                </div>
                @php 
                 $category = App\Product_category::all();
                 @endphp
                 <div class="form-group">
                  <label class="control-label">Category</label>
                  <select name="category" class="form-control">
                    @foreach($category as $cat)
                    <option value="{{ $cat->id }} ">{{$cat->category}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label class="control-label">Price</label>
                  <input class="form-control" type="text" name="price" placeholder="Enter Price address">
                </div>
                 <div class="form-group">
                  <label class="control-label">Total Product We have</label>
                  <input class="form-control" type="number" name="quantity" placeholder="Total Prodcut">
                </div>
               
                <div class="form-group">
                  <label class="control-label">image</label>
                  <input class="form-control" type="file" name="file">
                </div>
            </div>
            <div class="tile-footer">
              <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Add</button>
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