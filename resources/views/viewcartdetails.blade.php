@extends('layouts.master')
@section('content')
<section id="features" class="section-with-bg wow fadeInUp">
	<div class="container">
		<div class="row">
		 	<div class="col-md-12 col-lg-12"><h1 class="text-center text-danger mb-5" 
  style="font-family: 'Abril Fatface', cursive; color:#e4670e !important ">YOUR CART ITEM</h1></div>
		</div> 
		<a class="dropdown-item text-dark" data-toggle="modal" data-target="#myModaladdress" href="re"><button type="submit" class="btn btn-success">Check Address</button></a>
		@if($message = Session::get('success'))
      
      <div class="alert alert-success">  {{$message}}
      </div>
    @endif 
		<div class="row">
			<div class="col-md-12 table-responsive">
@if(isset($cart) && $cart->getContents())

	<table class="table table-hover">
		<thead class="text-muted">
			<tr>
				<th scope="col">Product</th>
				<th scope="col" width="120">Quantity</th>
				<th scope="col" width="120">Price</th>
				<th scope="col" width="200" class="text-right">Action</th>
			</tr>
		</thead>
		<tbody>
			
			@foreach($cart->getContents() as $productname => $product)
			{{-- @php print_r($cart) @endphp --}}
			
				
				<tr>
					<td>
						<figure class="media">
							<div class="img-wrap mr-4"><img src="{{ asset('adminn/'.$product['product']->image)}}" class="img-responsive" style="width: 100px"></div>
							<figcaption class="media-body">
							<h6 class="title text-truncate">{{$product['product']->productname}}</h6>
							<dl class="param param-inline small">
								<dt>Apna Gps </dt>
								<dd>Laxyo Venture</dd>
							</dl>
							</figcaption>
						</figure>
					</td>
					<td>
					<form action="{{ route('updateProduct')}}"  method="post" >
						@csrf
						<input type="hidden" name="productname" value="{{ $productname }}">
							<input type="hidden" name="price" value="{{ $product['product']->price }}">
							<input type="hidden" name="product_id" value="{{ $product['product']->id }}">
						<input type="number" name="qty" id="qty"  class="form-control text-center" min="0" max="99" value="{{ $product['qty'] }}">
						<input type="submit" name="update"  value="Update" class="btn btn-block btn-outline-success btn-round">
					   </form>
					</td>
					<td>
						<div class="price-wrap">
							<span class="price">USD {{$product['price']}}</span>
							<small class="text-muted">(USD{{$product['product']->price}} each)</small>
							</div> <!-- price-wrap .// -->
						</td>
						<td class="text-right">
						<form action="{{ route('removeProduct')}}"  method="post" >
							<input type="hidden" name="productname" value="{{ $productname }}">
							<input type="hidden" name="price" value="{{ $product['price'] }}">
							<input type="hidden" name="qty" value="{{ $product['qty'] }}">
							@csrf
							<input type="submit" name="remove" value="x Remove" class="btn btn-outline-danger"/>
				        </form>
						</td>
					</tr>
				@endforeach
				<tr>
					<th colspan="2">Total Qty: </th>
					<td>{{$cart->gettotalqty()}}</td>
				</tr>
				<tr>
					<th colspan="2">Total Price: </th>
					<td>{{$cart->gettotalprice()}}</td>
				</tr>
			</tbody>
		</table>
				<a href="{{route('checkout.index')}}" class="btn btn-primary btn-lg mb-3 pull-right product">Check Out</a> 
	</div>
	</div>
</div>	

	@else
		<p class="alert alert-danger">No Products in the Cart <a href="">Buy Some Products</a></p>
	@endif
	 <div class="modal fade" id="myModaladdress" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close"></button>
          <h4 class="modal-title disp font-weight-bold">Dispatch Details</h4>
        </div>
        <div class="modal-body">
          <form action="{{ route('shippingdetails') }}" method="post">
            @csrf
           <td><input type="number" name="user_id" class="form-control" placeholder="user id" required/></td><br>
           <td><input type="number" name="mobile_" class="form-control" placeholder="Mobile No." required/></td>
           <button type="submit" class="btn btn-info mt-5 ">Shiping detail</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
</section>
@endsection
@section('scripts')
<script>
	$(function(){
		$('#same-address').on('change', function(){
			$('#shipping_address').slideToggle(!this.checked)
		})
	})
</script>
@endsection