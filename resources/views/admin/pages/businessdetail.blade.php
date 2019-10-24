@extends('admin.layouts.master')
@section('content')
<main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-truck"></i>Bunisness</h1>
          <p>Table to display analytical data effectively</p>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active"><a href="#">Bunisness Detail</a></li>
        </ul>
      </div>
        @if($message = Session::get('success'))
      <div class="alert alert-success">  {{$message}}
      </div>
    @endif 
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body table-responsive">
              <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
                  <tr>
                    <th>S.No.</th>
                    <th>Owner</th>
                    <th>Bunisness Name</th>
                    <th>Contact No</th>
                    <th>Email</th>
                    <th>B-Type</th>
                    <th>Message</th>
                    <th>state</th>
                    <th>District</th>
                    <th>City</th>
                    <th>Address</th>
                    <th>Remove</th>
                  </tr>
                </thead>
                <tbody>
                  @php 
                   $s_no=0;
                   @endphp

               @foreach($business as $detail)
                  <tr>
                    <td>{{ ++$s_no }}</td>
                    <td>{{$detail->business_owner}}</td>
                    <td>{{$detail->business_name}}</td>
                    <td>{{$detail->contact_number}}</td>
                    <td>{{$detail->email_id}}</td>
                    <td>{{$detail->business_type}}</td>
                    <td>{{$detail->message}}</td>
                    <td>{{$detail->state_name}}</td>
                    <td>{{$detail->city_name}}</td>
                    <td>{{$detail->town}}</td>
                    <td>{{$detail->address}}</td>
                    <td><a href="{{ route('admin.removebusiness',$detail->id)}}" class='btn btn-danger'>Delete</a></td>
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