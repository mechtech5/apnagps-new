@extends('layouts.master')
@section('content')
 <section id="contact" class="section-with-bg wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2>Purchase Online</h2>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-4">
            <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="img/image/item3.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">nüvi 3597LMTHD</h5>
    <p class="card-text">fleettrack Vehicle tracking Device for bike GPS Device</p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">₹2,499</li>
  </ul>
</div>
          </div>
          <div class="col-lg-8 col-md-8">
          <div class="form"  id="enquiry_form">
          <h3 class="text-center font-weight-bold">Payment Details</h3>
          <div id="errormessage"></div>
          <form action="{{ route('order.paytmorder')}}" method="post" role="form" class="contactForm">
            @csrf
            <div class="form-row">
              <div class="form-group col-md-6">
                <lable>Order</lable>
                <input type="text" name="order_id" class="form-control" id="custname" placeholder="Your Name"/>
                @error('cust_name')
                    <span class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                  @enderror
              </div>
              <div class="form-group col-md-6">
                <lable>price</lable>
                <input type="text" class="form-control" name="price" id="email" placeholder="Your Email"/>
               @error('contact_no')
                    <span class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                  @enderror
              </div>
            </div>
            <div class="form-group">
              <lable>transection id</lable>
                <textarea class="form-control" name="transectid" rows="5"></textarea>
            @error('address')
                    <span class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                  @enderror
            </div>
            <div class="text-center"><button type="submit">Submit</button></div>
          </form>
           @if($message = Session::get('success'))
      <div class="alert alert-success">  {{$message}}
      </div>
    @endif 
        </div>
          </div>
        </div>
    </div>
    </section>
@endsection