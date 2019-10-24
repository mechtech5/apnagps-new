@extends('admin.layouts.master')
@section('content')
<main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-truck"></i>Complaints</h1>
          <p>Table to display analytical data effectively</p>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active"><a href="#">Complaints Detail</a></li>
        </ul>
      </div>
      @if($messag = Session::get('success'))
      <div class="alert alert-success">{{$messag}}
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
                    <th>Vehicle No.</th>
                    <th>Email Id</th>
                    <th>Contact No.</th>
                    <th>Details</th>
                    <th>Address</th>
                    <th>Remove</th>
                  </tr>
                </thead>
                <tbody>
                  @php
                  $s_no=0;
                  @endphp
                @foreach($complaint as $detail)
                  <tr>
                    <td>{{ ++$s_no }}</td>
                    <td>{{ $detail->customername }}</td>
                    <td>{{ $detail->vehicle_no }}</td>
                    <td>{{ $detail->reg_email }}</td>
                    <td>{{ $detail->mobile_no }}</td>
                    <td>{{ $detail->description }}</td>
                    <td>{{ $detail->address }}</td>
                    <td><a href="{{ route('admin.rcomPlaint',$detail->id) }}" class="btn btn-danger">Delete</a></td>
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