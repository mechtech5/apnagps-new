@extends('layouts.master')
@section('content')
      <section id="features" class="section-with-bg wow fadeInUp">
      <div class="container-fluid">
        <div class="section-header">
          <h1 class="text-center text-danger mb-5" 
  style="font-family: 'Abril Fatface', cursive;">APNA GPS ONLINE SHOPPING DETAILS</h1>
        </div>
        <div class="row">
          <div class="col-lg-12 col-md-12">
          	<h5 class="font-weight-bold"></h5>
  <div class="hotel">
          		<table class="table table-bordered">
          			<thead>
          				<tr>
          				<th>S.No.</th>
          				<th>Product</th>
          				<th>Price</th>
          				<th>Quantity</th>
          				<th>Total</th>
          				<th>Update</th>
          				<th>Delete</th>
          			</tr>
          			</thead>
          			<tbody>
          				@php 

          				$bill=0;
          				 $s_no=0;
          			
          				 @endphp 
                        @foreach($cartdetail as $prod)
                        @php  $p=0;
                        $q=0;
                        @endphp 
                       
          				<tr>
          				<td>{{ ++$s_no }}</td>
          				<form action="{{ route('updatecart')}}" method="post">
          					@csrf
          			 @foreach($prod as $key=> $value)
          			 @if($key == 0)
          				<td>{{ $value }}</td>
          				<input type="hidden" value="{{ $value }}" name="name0" class="form-control">
          				@endif
          				@if($key == 1)
          				<td>{{ $value }}</td>
          				<input type="hidden" value="{{ $value }}" name="name1" class="form-control">
          				   @php $p=$value  @endphp
          				@endif
          				@if($key == 2)
          				<td><input type="number" value="{{ $value }}" name="name2" class="form-control"></td>
          				@php $q=$value  @endphp
          				@endif
          				@endforeach
          				@php $bill=$p*$q; @endphp
          				<td>{{ $bill }} </td>
          				<td><input type="submit" name="event" value="update" class="btn btn-warning"></td>
          				<td><input type="submit" name="event" value="delete" class="btn btn-danger"></td>
          				</form>
          				@endforeach
          				
          			</tr>
          				
          		</tbody>
          	</table>
          	<a href="{{ route('product') }}" class="btn btn-primary mb-5">Continue shoping</a>
          </div>
      </div>
  </div>
</div>
</section>
@endsection