@extends('admin.layouts.master')
@section('content')
<main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-truck"></i>Franchise</h1>
          <p>Table to display analytical data effectively</p>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active"><a href="#">Franchise Detail</a></li>
        </ul>
      </div>
      @if($message = Session::get('success'))
      <div class="alert alert-success">{{ $message }}
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
                    <th>Name</th>
                    <th>Email</th>
                    <th>Age</th>
                    <th>contact</th>
                    <th>landline</th>
                    <th>total cash</th>
                    <th>Free Cash</th>
                    <th>from</th>
                    <th>No. of Store</th>
                    <th>Start Date</th>
                    <th>borowwer Name</th>
                    <th>Message</th>
                    <th>Remove</th>
                  </tr>
                </thead>
                <tbody>
                  @php 
                  $s_no=0;
                  @endphp
               @foreach($franchise as $detail)
                  <tr>
                    <td>{{ ++$s_no }}</td>
                    <td>{{$detail->full_name}}</td>
                    <td>{{$detail->email}}</td>
                    <td>{{$detail->age}}</td>
                    <td>{{$detail->contact_number}}</td>
                    <td>{{$detail->landline}}</td>
                    <td>{{$detail->total_cash}}</td>
                    <td>{{$detail->free_cash}}</td>
                    <td>{{$detail->cash_from}}</td>
                    <td>{{$detail->total_store}}</td>
                    <td>{{$detail->startdate}}</td>
                    <td>{{$detail->borrower_name}}</td>
                    <td>{{$detail->message}}</td>
                    <td><a href="{{ route('admin.rfranchise',$detail->id )}}" class="btn btn-danger">Delete</a></td>
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