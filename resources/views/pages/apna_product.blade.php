@extends('layouts.master')
@section('content')
<section id="features" class="section-with-bg wow fadeInUp">
      <div class="container">
        <div class="section-header">
         <h2 class="text-center  mb-5 needs">APNA GPS ONLINE SHOPPING CART</h2>
        </div>
         @if($message = Session::get('success'))
      
      <div class="alert alert-success">  {{$message}}
      </div>
    @endif 
        <div class="row">
        {{--  @php 
                  
                  $ProductStore=App\Product::all();
                 @endphp   --}}
                 @foreach($ProductStore as $product) 
         <div class="col-lg-3 col-md-3 col-sm-12">
      
      <form action="{{ route('addTocart', $product)}}" method="post">
        @csrf
        <div class="card">
          <h6 class="card-title p-2 text-uppercase product">{{ $product->productname}}</h6>
           <input type="hidden" name="productname" value="{{ $product->productname}}">
           <input type="hidden" name="product_id" value="{{ $product->id}}">
          <div class="card-body">
             <img src="{{ asset('adminn/'.$product->image)}}" alt="phone" class="img-fluid mb-2"  style="height: 200px">

           <h6> <b>&#8377;</b> {{ $product->price}}<span></span> </h6> 
           <input type="hidden" name="price" value="{{ $product->price}}" >
            
           <h6 class="badge badge-success product"> 4.4 <i class="fa fa-star"> </i> </h6>

           <input type="hidden" name="quantity" class="form-control" value='1' placeholder="Quantity">

          </div>
          <div class="btn-group d-flex mb-5">
            <button class="btn btn-success flex-fill product" type="submit">Add to cart</button><button class="btn btn-success flex-fill text-white"><a href="{{route('viewcartdetails')}}" class="card-link ancore">View Cart </a></button> 

            {{-- <button class="btn btn-warning flex-fill text-white"><a href="{{ route('getpayment')}}" class="card-link"> BUy Now </a></button> --}}
          </div>


        </div>
      </form>

    </div>
   
   @endforeach

  
</div>

      </section>
@endsection
