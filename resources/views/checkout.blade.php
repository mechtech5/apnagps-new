@extends('layouts.master')
@section('content')
 <section id="features" class="section-with-bg wow fadeInUp">  
  <div class="container">
  <div class="py-5 text-center">
    <img class="d-block mx-auto mb-4" src="/docs/4.3/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
    <h2 class="font-weight-bold">Checkout form</h2>
    <p class="lead">For Online Billing & Shiping</p>
  </div>

  <div class="row">
    <div class="col-md-4 order-md-2 mb-4">
      <h4 class="d-flex justify-content-between align-items-center mb-3">
        <span class="text-muted">Your cart</span>
        <span class="badge badge-secondary badge-pill">{{ $cart->gettotalqty()}}</span>
      </h4>
      <ul class="list-group mb-3">
        @foreach($cart->getContents() as $productname => $product)
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">{{ $product['product']->productname }}</h6>
            <small class="text-muted">{{ $product['qty'] }}</small>
          </div>
          <span class="text-muted">{{ $product['price'] }}</span>
        </li>
        @endforeach
        <li class="list-group-item d-flex justify-content-between">
          <span>Total (USD)</span>
          <strong>{{ $cart->gettotalprice() }}</strong>
        </li>
      </ul>
    </div>
    <div class="col-md-8 order-md-1">
      <h4 class="mb-3">Billing address</h4>
      <form class="needs-validation" novalidate action="{{ route('storecustorder')}}"  method="post">
        @csrf
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="firstName">First name</label>
            <input type="text" class="form-control" id="firstName" name="billing_firstName" placeholder="Enter Name" value="{{ old('billing_firstName')}}" required>
           @error('billing_firstName')
                    <span class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                  @enderror
          </div>
          <div class="col-md-6 mb-3">
            <label for="lastName">Last name</label>
            <input type="text" class="form-control" id="lastName" name="billing_lastName" placeholder="Enter Last Name" value="{{ old('billing_lastName')}}" required>
            @error('billing_lastName')
                    <span class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                  @enderror
          </div>
        </div>
        <input type="hidden" name="Order_id" value="">
        <input type="hidden" name="price" value="{{ $cart->gettotalprice()}}">
        <input type="hidden" name="transectid" value="" >

        <div class="mb-3">
          <label for="username">Username</label>
          <div class="input-group">
            <input type="text" class="form-control" id="username" value="{{ old('billing_username')}}" name="billing_username" placeholder="Username" required>
           
          </div>
        </div>

        <div class="row">
          <div class="col-md-6 mb-3">
          <label for="email">Email</label>
          <input type="email" class="form-control" id="email" value="{{ old('billing_email')}}" name="billing_email" placeholder="you@example.com">
          @error('billing_email')
                    <span class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                  @enderror
        </div>
        <div class="col-md-6 mb-3">
          <label for="email">Contact</label>
          <input type="email" class="form-control" id="contact_no" value="{{ old('contact_no')}}" name="contact_no" placeholder="Contact No...">
          @error('contact_no')
                    <span class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                  @enderror
        </div>
      </div>

        <div class="mb-3">
          <label for="address">Address</label>
          <input type="text" class="form-control" id="address" name="billing_address1" value="{{ old('billing_address1')}}" placeholder="Enter Address" required>
         @error('billing_address1')
                    <span class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                  @enderror
        </div>

        <div class="mb-3">
          <label for="address2">Address 2 <span class="text-muted">(Optional)</span></label>
          <input type="text" class="form-control" id="address2" name="billing_address2" placeholder="Enter Address"
          value="{{ old('billing_address2')}}" >
         
        </div>

        <div class="row">
          <div class="col-md-5 mb-3">
            <label for="country">State</label>
             @php 
                   $state=App\state::all();
                 @endphp
            <select class="custom-select d-block w-100" id="billing_state" name="billing_state" required>
              <option value="0">Choose...</option>
              @foreach($state as $states)
                <option value="{{ $states->state_code }}" {{ old('billing_state')== $states->state_code ? 'selected' : '' }}>{{ $states->state_name }}</option>
                @endforeach
            </select>
          @error('billing_state')
                    <span class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                  @enderror
          </div>
          <div class="col-md-4 mb-3">
            <label for="state">District</label>
            <select class="custom-select d-block w-100" id="billing_district"  name="billing_district" required>
              <option value="">Choose...</option>
              <option>California</option>
            </select>
            @error('billing_district')
                    <span class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                  @enderror
          </div>
          <div class="col-md-3 mb-3">
            <label for="zip">Pincode</label>
            <input type="text" class="form-control" id="billing_Pincode" name="billing_Pincode" placeholder=""  value="{{ old('billing_Pincode')}}" required>
           @error('billing_Pincode')
                    <span class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                  @enderror
          </div>
        </div>
        <hr class="mb-4">
        <div class="custom-control custom-checkbox" id="shipping_address">
          <input type="checkbox" class="custom-control-input" id="same-address">
          <label class="custom-control-label" for="same-address">Shipping address is the same as my billing address</label>
        </div>
    </div>
  </div>
  <div class="row" id="shippingform">
     <div class="col-lg-12 col-md-12">
      <hr class="mb-4">

        <h4 class="mb-3">Shipping Address</h4>
      <div class="form-row">
              <div class="form-group col-md-4">
                <lable>First Name</lable>
                <input type="text" name="shipping_customername" class="form-control" id="enq_name" placeholder="Your Name" value="{{ old('shipping_customername')}}" />
               
              </div>
              <div class="form-group col-md-4">
                <lable>Last Name</lable>
                <input type="text" class="form-control" name="shipping_lastname" id="email" placeholder="Your Last Name." value="{{ old('shipping_lastname')}}" />
             
              </div>
                <div class="form-group col-md-4">
                <lable>Contact Person</lable>
                <input type="text" class="form-control" name="shipping_contact" value="{{ old('shipping_contact')}}" id="email" placeholder="Your  No."/>
              
              </div>
                <div class="form-group col-md-4">
                <lable>State</lable>
                @php 
                $state= App\state::all() 
                @endphp
              <select name="shipping_state" id="shipping_state" class="form-control">
                @foreach($state as $st)
                <option value="{{ $st->state_code}}" {{ old('shipping_state')== $st->state_code ? 'selected' : ''}}>{{$st->state_name}}</option>
                 @endforeach
              </select>
             
              </div>
              <div class="form-group col-md-4">
                <lable>District</lable>
                 <select name="shipping_district" id="shipping_district" class="form-control">
                  <option value="">select</option>
                 </select>
               
              </div>
              <div class="form-group col-md-4">
                <lable>Pin code</lable>
                <input type="text" class="form-control" name="shipping_Pincode" id="email" placeholder="Your Vehicle No." value="{{ old('shipping_Pincode')}}"/>
             
              </div>
               <div class="form-group col-md-6">
                <lable>Address 1</lable>
               <textarea class="form-control" name="shipping_address1" rows="3">{{ old('shipping_address1')}}</textarea>
               
              </div>
              <div class="form-group col-md-6">
                <lable>Address 2</lable>
                <textarea class="form-control" name="shipping_address2" rows="3">{{ old('shipping_address2')}}</textarea>
               
              </div>
            </div>
          </div>
        </div>
        <div class="form-row">
        <div class="form-group col-md-12 mb-4 text-center">
        <button class="btn btn-success btn-lg" type="submit">Continue to checkout</button>
      </div>
    </div>
      </form>
     </div>
  </div>
</div>
</section>
<script>
$(document).ready(function(){
$("#shipping_address").on('change',function(){
  $("#shippingform").slideToggle(!this.checked);

})
$.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
  });
$("#billing_state").on('change',function(){
  var id=$(this).val();
  $.ajax({
          type:"get",
          url:"{{route('getdistrict')}}?id="+id,
          success:function(res){
            if(res){
              $("#billing_district").empty();
              $("#billing_district").append("<option value='0'>select District</option>");
              $.each(res ,function(index,district){

                $("#billing_district").append("<option value="+district.city_code+">"+district.city_name+"</option>");
              });

          }else{
            $("#billing_district").empty();
          }

        }

  });

});

$("#shipping_state").on('change',function(){
    var ship_id = $(this).val();
    $.ajax({
          type:"get",
          url:"{{ route('getdistrict')}}?id="+ship_id,
          success:function(data){
             if(data){
                 $("#shipping_district").empty();
                 $("#shipping_district").append("<option value>Select District</option>");
                 $.each(data,function(index,disttt){
                    
                 $("#shipping_district").append("<option value="+disttt.city_code+">"+disttt.city_name+"</option>");

                 });
             }else{
                $("#shipping_district").empty();
             }
          }

    })


});
var ship_id = "{{ old('shipping_state')}}";
var ship_dist_id ="{{ old('shipping_district')}}";
    $.ajax({
          type:"get",
          url:"{{ route('getdistrict')}}?id="+ship_id,
          success:function(data){
             if(data){
                 $("#shipping_district").empty();
                 $("#shipping_district").append("<option value>Select District</option>");
                 $.each(data,function(index,disttt){
                    
                 $("#shipping_district").append('<option value="'+disttt.city_code+'" ' + (disttt.city_code == ship_dist_id ? 'selected="selected"' : '' )+ '>'+disttt.city_name+'</option>');

                 });
             }else{
                $("#shipping_district").empty();
             }
          }

    });
    var bill_id = "{{ old('billing_state')}}";
var bill_dist_id ="{{ old('billing_district')}}";
    $.ajax({
          type:"get",
          url:"{{ route('getdistrict')}}?id="+bill_id,
          success:function(data){
             if(data){
                 $("#billing_district").empty();
                 $("#billing_district").append("<option value>Select District</option>");
                 $.each(data,function(index,disttt){
                    
                 $("#billing_district").append('<option value="'+disttt.city_code+'" ' + (disttt.city_code == bill_dist_id ? 'selected="selected"' : '' )+ '>'+disttt.city_name+'</option>');

                 });
             }else{
                $("#billing_district").empty();
             }
          }

    });




  });
  </script>
@endsection

