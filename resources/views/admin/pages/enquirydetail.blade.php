@extends('admin.layouts.master')
@section('content')
<main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-sticky-note"></i> Enquiry Detail </h1>
          <p>Table to display analytical data effectively</p>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active"><a href="#">Enquiry Detail</a></li>
        </ul>
      </div>
        @if($message = Session::get('success'))
      <div class="alert alert-success">  {{$message}}
      </div>
    @endif 
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
                  <tr>
                    <th>S.No.</th>
                    <th>Customer Name</th>
                    <th>Email</th>
                    <th>Enquiry About</th>
                    <th>Contact customer</th>
                    <th>Details</th>
                    <th>Remove</th>
                  </tr>
                </thead>
                <tbody>
                  @php 
                  $s_no=0;
                  @endphp
                  @foreach($enquiry as $detail)
                  <tr>
                    <td>{{ ++$s_no }}</td>
                    <td>{{ $detail->enq_name }}</td>
                    <td>{{ $detail->enq_email }}</td>
                    <td>{{ $detail->enq_subject }}</td>
                    <td>{{ $detail->enq_contact }}</td>
                    <td>{{ $detail->enq_detail }}</td>
                    <td><a href="{{ route('admin.removeenquiry',$detail->id) }}" class="btn btn-danger">Delete</a></td>
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