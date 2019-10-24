@extends('layouts.master')
@section('content')
 <section id="contact" class="section-with-bg wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2>Pay Securly</h2>
        </div>
        <div class="row">
          <div class="col-lg-12 col-md-12">
          <div class="form"  id="enquiry_form">
             <form action="{{ route('order.paytmorder')}}" method="post" role="form" class="contactForm">
               @csrf
          <h3 class="text-center font-weight-bold">Pay Total Amount:-{{ $cart->gettotalPrice() }}</h3>
          <div id="errormessage"></div>
         
             <input type="hidden" name="Order_id" value="">
             <input type="hidden" name="price" value="{{ $cart->gettotalprice()}}">
             <input type="hidden" name="transectid" value="" >

                
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