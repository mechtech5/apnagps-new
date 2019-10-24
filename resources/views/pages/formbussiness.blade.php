@extends('layouts.master')
@section('content')
<section id="features" class="section-with-bg wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2 class="font-weight-bold apnagps">Bussiness With ApnaGps</h2>
        </div>
            @if($message = Session::get('success'))
      
      <div class="alert alert-success">  {{$message}}
      </div>
    @endif 
<!-- for Enquiry -->
                <div class="form"   id="">
          <h3 class="text-center font-weight-bold apnagps"></h3>
          <div id="errormessage"></div>
          <form action="{{ route('businessstore')}}" method="post" role="form" class="contactForm">
            @csrf
            <div class="form-row">
              <div class="form-group col-md-6">
                 <lable>Business Owner</lable>
                <input type="text" name="business_owner" class="form-control" id="name" placeholder="Business Owner" value="{{ old('business_owner')}}"/>
                @error('business_owner')
                    <span class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                  @enderror
              </div>
              <div class="form-group col-md-6">
                <lable>Business Name</lable>
                <input type="text" class="form-control" name="business_name" id="email" placeholder="Business Name" value="{{ old('business_name')}}"/>
               @error('business_name')
                    <span class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                  @enderror
              </div>
            </div>
             <div class="form-row">
              <div class="form-group col-md-6">
                 <lable>Contact Number</lable>
              <input type="text" class="form-control" name="contact_number" id="subject" placeholder="Contact Number" value="{{ old('contact_number')}}"/>
              @error('contact_number')
                    <span class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                  @enderror
              </div>
              <div class="form-group col-md-6">
                <lable>E-mail</lable>
                <input type="text" class="form-control" name="email_id" id="email" placeholder="Your Email" value="{{ old('email_id')}}"/>
                @error('email_id')
                    <span class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                  @enderror
              </div>
            </div>
            <div class="form-group">
              <div class="form-row">
              <div class="form-group col-md-4">
                 <lable>State</lable>

                 @php 
                   $state=App\state::all();
                 @endphp
              <select name="state" class="form-control" id="state">
                @foreach($state as $states)
                <option value="{{ $states->state_code }}" {{ old('state')== $states->state_code ? 'selected' : '' }}>{{ $states->state_name }}</option>
                @endforeach
              </select>
              @error('state')
                    <span class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                  @enderror
              </div>
              <div class="form-group col-md-4">
                <lable>District</lable>
                <select name="district" class="form-control" id="district">
                  
                </select>
               @error('district')
                    <span class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                  @enderror
              </div>
              <div class="form-group col-md-4">
                <lable>Town</lable>
                <input type="text" class="form-control" name="town" id="email" placeholder="Your Town" value="town"  />
              @error('town')
                    <span class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                  @enderror
              </div>
            </div>
            <lable>Address Details</lable>
              <textarea class="form-control" name="address" rows="5" >{{ old('address')}}</textarea>
              @error('address')
                    <span class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                  @enderror
            </div>
             <div class="form-row">
              <div class="form-group col-md-3">
                 <lable>Business Type</lable>
                <input type="text" name="business_type" class="form-control" id="name" placeholder="Your Bussiness" value="{{ old('business_type')}}" />
                @error('business_type')
                    <span class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                  @enderror
              </div>
              <div class="form-group col-md-9">
                <lable>Message</lable>
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message">{{ old('message')}}</textarea>
                @error('message')
                    <span class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                  @enderror
              </div>
            </div>
            <div class="text-center"><button type="submit" class="btn btn-success">Submit</button></div>
          </form>
        </div>
      </div>
  </section>

   <script>

    $(document).ready(function() {
      $("#bussiness").click(function(){

        $("#bussiness_form").show();
        $("#enquiry_form").hide();
        $("#franchise_form").hide();

      });
      $("#enquiry").click(function(){

        $("#enquiry_form").show();
        $("#bussiness_form").hide();
        $("#franchise_form").hide();

      });
      $("#franchise").click(function(){

        $("#franchise_form").show();
        $("#bussiness_form").hide();
        $("#enquiry_form").hide();

      });
      $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
  });
      $("#state").on("change",function(){
           var id = $(this).val();
           //alert(id);
          $.ajax({
                 type: "GET",
                 url: "{{ route('getdistrict')}}?id="+id,
                 success: function(res){
                 if(res){
              //alert(res);
                        $("#district").empty();
                        $("#district").append('<option value="0">Select District</option>');
                        $.each(res,function(index, district){
                        $("#district").append('<option value="'+district.city_code+'">'+district.city_name+'</option>');
              });

                      }
                      else{
                      $("#district").empty();
                      }
                    }
                      });

            
      });
          var bill_id = "{{ old('state')}}";
      var bill_dist_id ="{{ old('district')}}";
    $.ajax({
          type:"get",
          url:"{{ route('getdistrict')}}?id="+bill_id,
          success:function(data){
             if(data){
                 $("#district").empty();
                 $("#district").append("<option value>Select District</option>");
                 $.each(data,function(index,disttt){
                    
                 $("#district").append('<option value="'+disttt.city_code+'" ' + (disttt.city_code == bill_dist_id ? 'selected="selected"' : '' )+ '>'+disttt.city_name+'</option>');

                 });
             }else{
                $("#district").empty();
             }
          }

    });

    });
  </script>
@endsection